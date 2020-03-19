<!-- Top Bar Start -->
<div class="topbar">

   <!-- LOGO -->
   <div class="topbar-left">
      <div class="text-center">
         <a href="<?= base_url('admincp') ?>" class="logo">
            <i class="zmdi zmdi-toys icon-c-logo"></i><span>Flac<span>to</span></span>
            <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
         </a>
      </div>
   </div>

   <!-- Button mobile view to collapse sidebar menu -->
   <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
         <div class="">
            <div class="float-left">
               <button class="button-menu-mobile open-left waves-effect waves-light">
                  <i class="zmdi zmdi-menu"></i>
               </button>
            </div>

            <form role="search" class="navbar-left app-search">
               <input type="text" placeholder="Search..." class="form-control">
               <a href="#"><i class="fa fa-search"></i></a>
            </form>

            <ul class="nav navbar-right float-right">
               <li class="list-inline-item">
                  <!-- Notification -->
                  <div class="notification-box">
                     <ul class="list-inline m-b-0">
                        <li>
                           <a href="javascript:void(0);" class="right-bar-toggle">
                              <i class="zmdi zmdi-notifications-none"></i>
                           </a>
                           <div class="noti-dot">
                              <span class="dot"></span>
                              <span class="pulse"></span>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!-- End Notification bar -->
               </li>

               <li class="dropdown user-box list-inline-item">
                  <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                     <img src="<?= base_url('assets/flacto/assets/images/users/avatar-1.jpg') ?>" alt="user-img" class="rounded-circle user-img">
                     <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-right">
                     <li><a href="<?= base_url('profile') ?>" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                     <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings m-r-5"></i> Settings</a></li>
                     <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                     <li><a href="<?= base_url('auth/logout') ?>" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                  </ul>
               </li>

            </ul>

         </div>
         <!--/.nav-collapse -->
      </div>
   </div>
</div>
<!-- Top Bar End -->