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

            <h4 class="header-title m-t-0 m-b-30">Fasilitas
               &nbsp &nbsp
               <a href="<?= base_url('fasilitas/add') ?>"><button type="button" class="btn btn-info waves-effect w-md waves-light m-b-5">Add Fasilitas</button></a> </h4>  

                  <?php $this->session->flashdata('pesan') ?>
            <table id="datatable-fixed-header" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
               <thead>
                  <tr>
                     <th>Kode Fasilitas</th>
                     <th>Fasilitas</th>
                     <th>Aksi</th>
                  </tr>
               </thead>

               <tbody>
                  <?php foreach ($fasilitas as $fst) : ?>
                  <tr>
                     <td><?= $fst['kd_fasilitas'] ?></td>
                     <td><?= $fst['fasilitas'] ?></td>
                     <td><a href="<?=base_url (); ?>fasilitas/hapus/<?= $fst['kd_fasilitas']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Delete</a>  <a href="<?=base_url (); ?>fasilitas/ubah/<?= $fst['kd_fasilitas']; ?>" class="badge badge-succses float-right">Edit</a></td>
                  </tr>
               <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div><!-- end col -->
</div>
<!-- end row -->