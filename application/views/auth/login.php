<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 08:17:38 GMT -->

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
   <meta name="author" content="Coderthemes">

   <!-- App Favicon -->
   <link rel="shortcut icon" href="<?= base_url('assets/flacto/assets/images/favicon.ico') ?>">

   <!-- App title -->
   <title>Auth - <?= SITE_NAME ?></title>

   <!-- App CSS -->
   <link href="<?= base_url('assets/flacto/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/flacto/assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/flacto/assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

   <script src="<?= base_url('assets/flacto/assets/js/modernizr.min.js') ?>"></script>

</head>

<body>

   <div class="text-center logo-alt-box">
      <a href="index-2.html" class="logo"><span class="text-inverse">Flac<span class="text-custom">to</span></span></a>
      <h5 class="text-muted m-t-0">Responsive Admin Dashboard</h5>
   </div>

   <div class="wrapper-page">

      <div class="m-t-30 card card-body">
         <div class="text-center">
            <h4 class="text-uppercase font-bold">Sign In</h4>
         </div>
         <div class="p-2">
            <form class="form-horizontal m-t-10" method="POST" action="<?= base_url('auth/login') ?>">

               <div class="form-group ">
                  <div class="col-12">
                     <input class="form-control" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                     <?= form_error('username', '<label id="username-error" class="error text-danger">', '</label>') ?>
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-12">
                     <input class="form-control" type="password" name="password" placeholder="Password">
                     <?= form_error('password', '<label id="username-error" class="error text-danger">', '</label>') ?>
                  </div>
               </div>

               <div class="form-group ">
                  <div class="col-12">
                     <div class="checkbox checkbox-custom">
                        <input id="checkbox-signup" type="checkbox" name="rememberme">
                        <label for="checkbox-signup">
                           Remember me
                        </label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-12">
                     <?= $this->session->flashdata('pesan') ?>
                  </div>
               </div>
               <div class="form-group text-center m-t-10">
                  <div class="col-12">
                     <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" name="submit-login">Log In &nbsp;<i class="fa fa-sign-in"></i></button>
                  </div>
               </div>

               <div class="form-group m-t-30 m-b-0">
                  <div class="col-sm-12">
                     <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                  </div>
               </div>


               <!-- <div class="form-group m-t-20 m-b-0">
                  <div class="col-sm-12 text-center">
                     <h4>Sign In with</h4>
                  </div>
               </div>

               <div class="form-group m-b-0 text-center">
                  <div class="col-sm-12">
                     <button type="button" class="btn btn-facebook waves-effect waves-light m-t-20"><i class="fa fa-facebook m-r-5"></i> Facebook
                     </button>
                     <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20"><i class="fa fa-twitter m-r-5"></i> Twitter
                     </button>
                     <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20"><i class="fa fa-google-plus m-r-5"></i> Google+
                     </button>
                  </div>
               </div> -->

            </form>

         </div>
      </div>
      <!-- end card-box -->

      <div class="row">
         <div class="col-sm-12 text-center">
            <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
         </div>
      </div>

   </div>
   <!-- end wrapper page -->




   <script>
      var resizefunc = [];
   </script>

   <!-- jQuery  -->
   <script src="<?= base_url('assets/flacto/assets/js/jquery.min.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/bootstrap.bundle.min.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/detect.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/fastclick.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/jquery.slimscroll.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/jquery.blockUI.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/waves.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/wow.min.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/jquery.nicescroll.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/jquery.scrollTo.min.js') ?>"></script>

   <!-- App js -->
   <script src="<?= base_url('assets/flacto/assets/js/jquery.core.js') ?>"></script>
   <script src="<?= base_url('assets/flacto/assets/js/jquery.app.js') ?>"></script>

</body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 08:17:38 GMT -->

</html>