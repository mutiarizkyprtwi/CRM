<div class="row">
   <div class="col-sm-12">
      <?= $this->session->flashdata('pesan') ?>
      <div class="row">
         <div class="col-xl-6 col-md-6">
            <div class="card">
               <div class="card-body">
                  <?php foreach ($dataprofil as $data1) : ?>
                     <h4 class="header-title m-t-0 m-b-30"><i class="zmdi zmdi-notifications-none m-r-5"></i> View Profile</h4>
                     <div>
                        <div class="row">
                           <div class="col-md-3 text-center">
                              <img src="<?= base_url('assets/images/profile/resize/' . $data1['foto'] . '') ?>" class="rounded-circle thumbnail img-thumbnail m-b-10" alt="profile-image">
                              <p class="text-muted font-13 mb-4">
                                 <?= $data1['jk'] ?>
                              </p>
                           </div>
                           <div class="col-md-9">
                              <div class="text-left">
                                 <small><i>Last Login</i> : <?= time_elapsed($this->session->userdata('loginAt')) ?></small>
                                 <table class="table table-hover">
                                    <tr>
                                       <th class="font-13" style="width: 35%">Nama Lengkap</th>
                                       <td>:</th>
                                       <td><?= $data1['nama_depan'] . ' ' . $data1['nama_belakang'] ?></td>
                                    </tr>
                                    <tr>
                                       <th class="font-13">Tanggal Lahir</th>
                                       <td>:</th>
                                       <td><?= date('d/m/Y', strtotime($data1['tgl_lahir'])) ?></td>
                                    </tr>
                                    <tr>
                                       <th class="font-13">Email</th>
                                       <td>:</th>
                                       <td><?= $this->session->userdata('email') ?></td>
                                    </tr>
                                    <tr>
                                       <th class="font-13">Kontak</th>
                                       <td>:</th>
                                       <td><?= $data1['kontak'] ?></td>
                                    </tr>
                                 </table>

                                 <a href="<?= base_url('profile/edit') ?>" class="btn btn-info btn-trans  btn-rounded w-md waves-effect waves-light m-b-5"><i class="zmdi zmdi-edit"></i> Ubah</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach ?>
               </div>

            </div>
         </div>

         <?php
         if ($this->uri->segment(2) == 'edit') : ?>
            <div class="col-xl-6 col-md-6">
               <div class="card card-border card-warning" style="min-height: 377px;">
                  <div class="card-body">
                     <h4 class="header-title m-t-0 m-b-30"><i class="zmdi zmdi-edit m-r-5"></i> Edit Profile
                        <a href="<?= base_url('profile') ?>" class="btn btn-danger btn-trans  btn-rounded w-md waves-effect waves-light float-right"><i class=" ti-angle-double-left"></i> Kembali</a>
                     </h4>
                     <?= form_open_multipart('profile/save') ?>
                     <?php foreach ($dataprofil as $data) : ?>
                        <input type="text" name="idUser" value="<?= $data['id_user'] ?>" hidden />
                        <div class="row align-items-center">
                           <div class="col-md-3 text-center">
                              <img src="<?= base_url('assets/images/profile/resize/' . $data['foto'] . '') ?>" class="rounded-circle thumbnail img-thumbnail m-b-10" alt="profile-image">
                           </div>
                           <div class="col-md-9">
                              <input type="file" name="photo" />
                           </div>
                        </div>
                        <div class="text-left">
                           <table class="table table-hover">
                              <tr>
                                 <th class="font-13" style="width: 25%">Username</th>
                                 <td>:</th>
                                 <td>
                                    <?= $this->session->userdata('username') ?>
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13" style="width: 25%">Nama Depan</th>
                                 <td>:</th>
                                 <td>
                                    <input type="text" class="form-control" id="namaDepan" name="namaDepan" placeholder="Nama Depan" value="<?= $data['nama_depan'] ?>">
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13">Nama Belakang</th>
                                 <td>:</th>
                                 <td>
                                    <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" placeholder="Nama Belakang" value="<?= $data['nama_belakang'] ?>">
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13">Tanggal Lahir</th>
                                 <td>:</th>
                                 <td>
                                    <div class="input-group">
                                       <input type="text" class="form-control" name="tglLahir" placeholder="dd/mm/yyyy" id="tgllahir-autoclose" value="<?= date('d/m/Y', strtotime($data['tgl_lahir'])) ?>">
                                       <div class="input-group-append">
                                          <span class="input-group-text bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                       </div>
                                    </div><!-- input-group -->
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13">Jenis Kelamin</th>
                                 <td>:</th>
                                 <td>
                                    <input type="radio" id="pria" name="jk" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : '' ?>> <label for="pria">Pria</label>
                                    <input type="radio" id="wanita" name="jk" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : '' ?>> <label for="wanita">Wanita</label>
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13">Kontak</th>
                                 <td>:</th>
                                 <td>
                                    <input type="text" class="form-control" id="kontak" placeholder="eg. 0821xxxxxx" name="kontak" value="<?= $data['kontak'] ?>">
                                 </td>
                              </tr>
                              <tr>
                                 <th class="font-13">Alamat</th>
                                 <td>:</th>
                                 <td>
                                    <textarea class="form-control" rows="5" name="alamat"><?= $data['alamat'] ?></textarea>
                                 </td>
                              </tr>
                           </table>

                           <button type="submit" name="save-profile" class="btn btn-success btn-trans btn-block btn-rounded w-md waves-effect waves-light m-b-5"><i class="zmdi zmdi-save"></i> Simpan</button>
                        </div>
                     <?php endforeach ?>
                     <?= form_close() ?>
                  </div>

               </div>
            </div>
         <?php endif; ?>

      </div>
   </div>
</div>