<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->

<head>
   <?php include '_template/kepala.php' ?>
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
      <?php include '_template/header.php' ?>
      <?php include '_template/menu.php' ?>
   </header><!-- Header Section /- -->

   <main class="site-main page-spacing">
      <?php include '_template/content.php' ?>
   </main>

   <?php include '_template/footer.php' ?>

   <?php include '_template/kaki.php' ?>

</body>

</html>