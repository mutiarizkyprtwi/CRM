<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('room_model');
      otentikasi();
   }

   public function index()
   {
      $data      =  [
         'title' => SITE_NAME,
         'judul' => 'Type Room',
         'isi'   => 'admin/room/read-room'
      ];
      $data['room'] = $this->room_model->getDataRoom()->result_array();
      $this->load->view('_templatesAdmin/home', $data);
   }

   public function add()
   {
      $this->form_validation->set_rules('kd_room', 'Kode Room', 'required|trim');
      $this->form_validation->set_rules('room', 'Room', 'required|trim');
      $this->form_validation->set_rules('location', 'Location', 'required|trim');
      $this->form_validation->set_rules('size', 'Size', 'required|trim');
      $this->form_validation->set_rules('theatre', 'Theatre', 'required|trim');
      $this->form_validation->set_rules('u-shape', 'U-shape', 'required|trim');
      $this->form_validation->set_rules('class', 'Class', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Add Room',
         'isi'   => 'admin/room/add-room'
      ];
      $data['room'] = $this->db->get('m_room')->result_array();
      $this->load->view('_templatesAdmin/home', $data);
      } else{
       $data =  [
                  'kd_room' => $this->input->post('kd_room'),
                  'room' => $this->input->post('room'),
                  'location' => $this->input->post('location'),
                  'size' => $this->input->post('size'),
                  'theatre' => $this->input->post('theatre'),
                  'u-shape' => $this->input->post('u-shape'),
                  'class' => $this->input->post('class')
         ];

         if ($_FILES['fotoroom']['name'][0]!=='') {
            $banyakFoto = sizeof($_FILES['fotoroom']['tmp_name']);

            $files = $_FILES['fotoroom'];
            $config['image_library']='gd2';
            $config['upload_path']= './images/room/';
            $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg|JPG|PNG|GIF|BMP|JPEG';
            $config['max_size']=2048;
            $config['create_thumb']=FALSE;
            $config['maintain_ratio']=FALSE;
            $config['width'] = 582;
            $config['height']= 543;

            $id = $this->input->post('kd_room');
            $cek = $this->room_model->save($data);

            for ($i=0; $i < $banyakFoto; $i++) { 
               $_FILES['fotoroom']['name'] = $files['name'][$i];
               $_FILES['fotoroom']['type'] = $files['type'][$i];
               $_FILES['fotoroom']['tmp_name'] = $files['tmp_name'][$i];
               $_FILES['fotoroom']['size'] = $files['size'][$i];
               $config['file_name']= $id.'--'.date("d-m-Y").'--'.$_FILES['fotoroom']['name'];

               $this->load->library('upload',$config);
               $this->upload->initialize($config);

               if($this->upload->do_upload('fotoroom')){
                  $foto = $this->upload->data();
                  $config['source_image']='./images/room/'.$foto['file_name'];
                  $config['new_image']='./images/room/resize/'.$foto['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar= [
                     'nama_foto'=> $foto['file_name'],
                     'kd_room' => $id
                  ];

                  $this->db->insert('m_fotoroom', $gambar);
                  $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Room');
               }else{
                  $error = array('error'=>$this->upload->display_error());
                  $this->session->set_flashdata('pesan', $error['error']);
               }
            }
            redirect(base_url('room'));
            $cek = $this->room_model->save($data);
            if ($cek){
               $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Room');
               redirect(base_url('room'));
            }
        }
      }
   }

   public function hapus($kd_room)
   {
      $this->room_model->HapusDataRoom($kd_room);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('room'));
   }

   public function ubah($kd_room)
   {
      $this->form_validation->set_rules('kd_room', 'Kode Room', 'required|trim');
      $this->form_validation->set_rules('room', 'Room', 'required|trim');
      $this->form_validation->set_rules('location', 'Location', 'required|trim');
      $this->form_validation->set_rules('size', 'Size', 'required|trim');
      $this->form_validation->set_rules('theatre', 'Theatre', 'required|trim');
      $this->form_validation->set_rules('u-shape', 'U-shape', 'required|trim');
      $this->form_validation->set_rules('class', 'Class', 'required|trim');
      if ($this->form_validation->run() == FALSE) {
      $data = [
         'title' => SITE_NAME,
         'judul' => 'Ubah Room',
         'isi'   => 'admin/room/ubah-room'
      ];
      $data['fotoroom'] = $this->db->get_where('m_fotoroom',['kd_room'=>$kd_room])->result_array();
      $data['room'] = $this->db->get_where('m_room', ['kd_room'=>$kd_room])->row_array();
      // var_dump($data['room']);
      // die;
      $this->load->view('_templatesAdmin/home', $data);
      } else{
         $data =  [
                  'kd_room' => $this->input->post('kd_room'),
                  'room' => $this->input->post('room'),
                  'location' => $this->input->post('location'),
                  'size' => $this->input->post('size'),
                  'theatre' => $this->input->post('theatre'),
                  'u-shape' => $this->input->post('u-shape'),
                  'class' => $this->input->post('class')
                  ];

         if ($_FILES['fotoroom']['name'][0]!=='') {
            $banyakFoto = sizeof($_FILES['fotoroom']['tmp_name']);

            $files = $_FILES['fotoroom'];
            $config['image_library']='gd2';
            $config['upload_path']= './images/room/';
            $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg|JPG|PNG|GIF|BMP|JPEG';
            $config['max_size']=2048;
            $config['create_thumb']=FALSE;
            $config['maintain_ratio']=FALSE;
            $config['width'] = 582;
            $config['height']= 543;

            $id = $this->input->post('kd_room');
            $cek = $this->room_model->UbahRoom($data, $id);

            for ($i=0; $i < $banyakFoto; $i++) { 
               $_FILES['fotoroom']['name'] = $files['name'][$i];
               $_FILES['fotoroom']['type'] = $files['type'][$i];
               $_FILES['fotoroom']['tmp_name'] = $files['tmp_name'][$i];
               $_FILES['fotoroom']['size'] = $files['size'][$i];
               $config['file_name']= $id.'--'.date("d-m-Y").'--'.$_FILES['fotoroom']['name'];

               $this->load->library('upload',$config);
               $this->upload->initialize($config);

               if($this->upload->do_upload('fotoroom')){
                  $foto = $this->upload->data();
                  $config['source_image']='./images/room/'.$foto['file_name'];
                  $config['new_image']='./images/room/resize/'.$foto['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar= [
                     'nama_foto'=> $foto['file_name'],
                     'kd_room' => $id
                  ];

                  $this->db->insert('m_fotoroom', $gambar);
                  $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data Room');
               }else{
                  $error = array('error'=>$this->upload->display_error());
                  $this->session->set_flashdata('pesan', $error['error']);
               }
            }
            redirect(base_url('room'));
         }else{
             $id = $this->input->post('kd_room');
             $cek = $this->room_model->UbahRoom($data, $id);
             $this->session->set_flashdata('pesan', 'Berhasil Mengubah Data Room');
            redirect(base_url('room'));
         }
      }
   }

    public function hapusfotoroom($id_room,$kd_room)
   {
      $this->room_model->HapusFotoRoom($id_room);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect(base_url('room/ubah/'.$kd_room));
   }
}
