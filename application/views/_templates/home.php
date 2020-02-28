<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->

<head>
   <?php $this->load->view('_templates/kepala') ?>

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
   <!-- Loader -->
   <!-- <div id="site-loader" class="load-complete">
      <div class="loader">
         <div class="loader-inner ball-clip-rotate">
            <div></div>
         </div>
      </div>
   </div> -->
   <!--Loader /- -->

   <a id="top"></a>

   <!-- Header Section -->
   <header id="header" class="header-section header-position container-fluid no-padding">
      <?php $this->load->view('_templates/header') ?>
      <?php $this->load->view('_templates/menu') ?>
   </header><!-- Header Section /- -->

   <main class="site-main page-spacing">
      <?php $this->load->view('_templates/content') ?>
   </main>

   <?php $this->load->view('_templates/footer') ?>

   <?php $this->load->view('_templates/kaki') ?>


</body>

</html>