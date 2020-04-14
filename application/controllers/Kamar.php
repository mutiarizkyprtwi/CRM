<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('kamar_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Kategori Kamar',
         'isi'   => 'admin/kamar/read-kamar'
      ];
      $data['kamar'] = $this->kamar_model->getDataKamar()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_kategori', 'Kode Kategori', 'required|trim');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
      $this->form_validation->set_rules('harga_permalam', 'Harga Permalam', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Kategori Kamar',
         'isi'   => 'admin/kamar/add-kamar'
      ];
      $data['fasilitas'] = $this->db->get('m_fasilitas')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_kategori' => $this->input->post('kd_kategori'),
                  'kategori' => $this->input->post('kategori'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga_permalam' => $this->input->post('harga_permalam')
         ];
        

         if ($_FILES['fotoKamar']['name'][0]!=='') {
            $banyakFoto = sizeof($_FILES['fotoKamar']['tmp_name']);

            $files = $_FILES['fotoKamar'];
            $config['image_library']='gd2';
            $config['upload_path']= './images/kamar/';
            $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg|JPG|PNG|GIF|BMP|JPEG';
            $config['max_size']=2048;
            $config['create_thumb']=FALSE;
            $config['maintain_ratio']=FALSE;
            $config['width'] = 297;
            $config['height']= 267;

            $id = $this->input->post('kd_kategori');
            $cek = $this->kamar_model->save($data);
             $fa= $this->input->post('fasilitas');

         foreach ($fa as $fst) {
            $fasilitas =[
               'id_fasilitas' => $fst,
               'kd_kategori' =>$id
            ];
            $this->db->insert('fasilitas_kamar',$fasilitas);
         }

            for ($i=0; $i < $banyakFoto; $i++) { 
               $_FILES['fotoKamar']['name'] = $files['name'][$i];
               $_FILES['fotoKamar']['type'] = $files['type'][$i];
               $_FILES['fotoKamar']['tmp_name'] = $files['tmp_name'][$i];
               $_FILES['fotoKamar']['size'] = $files['size'][$i];
               $config['file_name']= $id.'--'.date("d-m-Y").'--'.$_FILES['fotoKamar']['name'];

               $this->load->library('upload',$config);
               $this->upload->initialize($config);

               if($this->upload->do_upload('fotoKamar')){
                  $foto = $this->upload->data();
                  $config['source_image']='./images/kamar/'.$foto['file_name'];
                  $config['new_image']='./images/kamar/resize/'.$foto['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar= [
                     'nama_foto'=> $foto['file_name'],
                     'kd_kategori' => $id
                  ];

                  $this->db->insert('m_fotokamar', $gambar);
                  $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Kamar');
               }else{
                  $error = array('error'=>$this->upload->display_error());
                  $this->session->set_flashdata('pesan', $error['error']);
               }
            }
            redirect(base_url('kamar'));
             $fa= $this->input->post('fasilitas');
         }else{
             $cek = $this->kamar_model->save($data);    
            foreach ($fa as $fst) {
               $fasilitas =[
                  'id_fasilitas' => $fst,
                  'kd_kategori' => $this->input->post('kd_kategori')
               ];
               $this->db->insert('fasilitas_kamar',$fasilitas);
            }
         
             $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Kamar');
            redirect(base_url('kamar'));
         }
      }
   }

   public function hapus($kd_kategori)
   {
      $this->kamar_model->HapusDataKamar($kd_kategori);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('kamar'));
   }

   public function ubah($kd_kategori)
   {
     $this->form_validation->set_rules('kd_kategori', 'Kode Kategori', 'required|trim');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
      $this->form_validation->set_rules('harga_permalam', 'Harga Permalam', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Kategori Kamar',
         'isi'   => 'admin/kamar/ubah-kamar'
      ];
      $data['fotoKamar'] = $this->db->get_where('m_fotokamar',['kd_kategori'=>$kd_kategori])->result_array();
      $data['kriteria'] = $this->db->get_where('m_kategori',['kd_kategori'=>$kd_kategori])->row_array();
      $data['fasilitas'] = $this->db->get('m_fasilitas')->result_array();
      $data['fasilitasKamar'] = $this->db->get_where('fasilitas_kamar', ['kd_kategori'=>$kd_kategori])->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_kategori' => $this->input->post('kd_kategori'),
                  'kategori' => $this->input->post('kategori'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga_permalam' => $this->input->post('harga_permalam')
         ];

          $fa= $this->input->post('fasilitas');

         foreach ($fa as $fst) {
            $fasilitas =[
               'id_fasilitas' => $fst,
               'kd_kategori' => $this->input->post('kd_kategori')
            ];
            $this->db->insert('fasilitas_kamar',$fasilitas);
         }

         if ($_FILES['fotoKamar']['name'][0]!=='') {
            $banyakFoto = sizeof($_FILES['fotoKamar']['tmp_name']);

            $files = $_FILES['fotoKamar'];
            $config['image_library']='gd2';
            $config['upload_path']= './images/kamar/';
            $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg|JPG|PNG|GIF|BMP|JPEG';
            $config['max_size']=2048;
            $config['create_thumb']=FALSE;
            $config['maintain_ratio']=FALSE;
            $config['width'] = 297;
            $config['height']= 267;

            $id = $this->input->post('kd_kategori');
            $cek = $this->kamar_model->UbahKategoriKamar($data, $id);

            for ($i=0; $i < $banyakFoto; $i++) { 
               $_FILES['fotoKamar']['name'] = $files['name'][$i];
               $_FILES['fotoKamar']['type'] = $files['type'][$i];
               $_FILES['fotoKamar']['tmp_name'] = $files['tmp_name'][$i];
               $_FILES['fotoKamar']['size'] = $files['size'][$i];
               $config['file_name']= $id.'--'.date("d-m-Y").'--'.$_FILES['fotoKamar']['name'];

               $this->load->library('upload',$config);
               $this->upload->initialize($config);

               if($this->upload->do_upload('fotoKamar')){
                  $foto = $this->upload->data();
                  $config['source_image']='./images/kamar/'.$foto['file_name'];
                  $config['new_image']='./images/kamar/resize/'.$foto['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar= [
                     'nama_foto'=> $foto['file_name'],
                     'kd_kategori' => $id
                  ];

                  $this->db->insert('m_fotokamar', $gambar);
                  $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Kamar');
               }else{
                  $error = array('error'=>$this->upload->display_error());
                  $this->session->set_flashdata('pesan', $error['error']);
               }
            }
            redirect(base_url('kamar'));
         }else{
             $id = $this->input->post('kd_kategori');
             $cek = $this->kamar_model->UbahKategoriKamar($data, $id);
             $this->session->set_flashdata('pesan', 'Berhasil Mengubah Data Kamar');
            redirect(base_url('kamar'));
         }
      }
   }

      public function hapusfotokamar($id_fotokamar,$kdkategori)
   {
      $this->kamar_model->HapusFotoKamar($id_fotokamar);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('kamar/ubah/'.$kdkategori));
   }
}