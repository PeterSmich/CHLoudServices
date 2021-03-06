<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['valid'])){
    $_SESSION['valid'] = false;
  }
  if( $_SESSION['valid'] == true){
  }else{    
    $_SESSION['nickname'] = 'Anonymus';
  }
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CHLoud | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .content-wrapper,
  .right-side {
  background-color: #0f0f0f;
  color: #ffffff;
  }
  h1,
  h1 > small,
  ol > li > a > i{
    color:#ffffff;
  }
  </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini" >
<div class="wrapper" >


  <!-- Main Header -->
  <header class="main-header">
      <a href="../../index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CH</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CHLoud</b>Services</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
          </a>
      </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel" >
              <div class="pull-left image" style="padding-bottom: 20%;">
                  <img src="dist/img/avatars/<?php if( $_SESSION['valid'] == true){ echo $_SESSION['username'];}else{ echo "anonymus";} ?>.png" class="img-circle" alt="User Image" />
              </div>
              <div class="pull-left info">
                  <p>Szervusz <?php echo $_SESSION['nickname'] ?>!</p>
                  <div>
                  <?php
                    if( $_SESSION['valid'] == 'true' ){
                      echo '<p><a href="profile.php"><button type="submit" name="profil" id="profil" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-user">Adatlap</i></button></a></br></p>';
                      echo '<a href="logout.php"><button type="submit" name="sign_out" id="out" class="btn btn-warning btn-xs"><i class="fa fa-sign-out">Kijelentkezés</i></button></a></br>';
                    }else{
                      echo '<p><a href="login.php"><button type="submit" name="sign_in" id="in" class="btn btn-danger btn-xs"><i class="fa fa-sign-in">Bejelentkezés</i></button></a></p>';
                      echo '<a href="register.php"><button type="submit" name="register" id="reg" class="btn btn-warning btn-xs"><i class="fa fa-user-plus">Regisztráció</i></button></a></br>';
                    }
                  ?>
                  </div>
              </div>
          </div>
          
          <!-- search form
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search..."/>
                  <span class="input-group-btn">
                      <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active"><!--set the correct active content!-->
                  <a href="#">
                      <i class="fa fa-home"></i>
                      <span>Home</span>
                      <i class="label label-primary pull-right"></i>
                  </a>
              </li>
              <li>
                <a href="pages/ijaszda/ijaszda.php">
                  <i class="fa fa-bullseye"></i>
                    <span>Íjászda</span>
                </a>
              </li>
              <li><a href="pages/widgets.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
  </aside>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Hírke</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" style="color:#ffffff;"><i class="fa fa-home"></i> Home</a></li>
        <li class="active" style="color:#ffffff;">Hírek</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   

      <!-- Your Page Content Here -->
      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>

      <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
       <?php
          if($_SESSION['valid'] == true){
          echo '<div class="box box-info box-solid" style="padding-bottom: 100%; ">
            <div class="box-header with-border">
              <h3 class="box-title">Naptár</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding-left: 0; width: 100%; height: 100%; ">
               <iframe src="https://teamup.com/ksxejfuc18ewt3po1v" frameborder="0" style="position: absolute; width: 99.6%; height: 92.4%; "></iframe>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->';}
        ?>
      </div>
      </div>

      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: #000000;">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      CHLoudTeam
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">CHLoud</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
