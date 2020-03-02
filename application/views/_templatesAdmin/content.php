<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
   <!-- Start content -->
   <div class="content">
      <div class="container-fluid">
         <?php
         if ($isi) {
            $this->load->view($isi);
         }
         ?>
      </div> <!-- container-fluid -->

   </div> <!-- content -->

   <?php $this->load->view('_templatesAdmin/footer') ?>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->