<!DOCTYPE html>
<html lang="en">

<head>
   <?php $this->load->view('_templatesAdmin/kepalak') ?>

</head>

<body class="fixed-left">

   <!-- Begin page -->
   <div id="wrapper">

      <?php $this->load->view('_templatesAdmin/topbar') ?>

      <?php $this->load->view('_templatesAdmin/sidebarmenu') ?>

      <?php $this->load->view('_templatesAdmin/content') ?>

      <?php $this->load->view('_templatesAdmin/notifikasi') ?>

      <?php $this->load->view('_templatesAdmin/kaki') ?>

   </div>
   <!-- END wrapper -->
</body>

</html>