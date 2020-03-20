<div class="row">
   <div class="col-sm-12">
      <div class="card table-responsive">
         <div class="card-body">
            <div class="dropdown float-right">
               <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                  <i class="zmdi zmdi-more-vert"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#" class="dropdown-item">Action</a></li>
                  <li><a href="#" class="dropdown-item">Another action</a></li>
                  <li><a href="#" class="dropdown-item">Something else here</a></li>
                  <li class="dropdown-divider"></li>
                  <li><a href="#" class="dropdown-item">Separated link</a></li>
               </ul>
            </div>

            <h4 class="header-title m-t-0 m-b-30">Data Check-in Kamar
               &nbsp &nbsp
               <a href="<?= base_url('checkin_kamar/add') ?>"><button type="button" class="btn btn-info waves-effect w-md waves-light m-b-5">Tambah Check-in</button> </h4>  

                  <?php $this->session->flashdata('pesan') ?>
            <table id="datatable-fixed-header" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                     <th>Nomor Kamar</th>
                     <th>Type Room</th>
                     <th>Nama</th>
                     <th>Arrival</th>
                     <th>Depart</th>
                     <th>Harga</th>
                     <th>BF</th>
                     <th>Extra Bed</th>
                     <th>Total</th>
                     <th>PAX</th>
                     <th>HU</th>
                     <th>REMARK</th>
                     <th>Aksi</th>
                  </tr>
               </thead>

               <tbody>
                  <?php foreach ($checkin_kamar as $ckin) : ?>
                  <tr>
                     <td><?= $ckin['no_kamar'] ?></td>
                     <td><?= $ckin['type_room'] ?></td>
                     <td><?= $ckin['nama'] ?></td>
                     <td><?= $ckin['arrival'] ?></td>
                     <td><?= $ckin['depart'] ?></td>
                     <td><?= $ckin['harga'] ?></td>
                     <td><?= $ckin['bf'] ?></td>
                     <td><?= $ckin['extra_bed'] ?></td>
                     <td><?= $ckin['total_harga'] ?></td>
                     <td><?= $ckin['pax'] ?></td>
                     <td><?= $ckin['hu'] ?></td>
                     <td><?= $ckin['remark'] ?></td>
                     <td><a href="<?=base_url (); ?>checkin_kamar/hapus/<?= $ckin['id_user']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>  <a href="<?=base_url (); ?>checkin_kamar/ubah/<?= $ckin['id_user']; ?>" class="badge badge-succses float-right">Ubah</a></td>
                  </tr>
               <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div><!-- end col -->
</div>
<!-- end row -->