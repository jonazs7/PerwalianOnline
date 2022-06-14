<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Wali-On | Perwalian</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="lte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="lte/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mahasiswa</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">1 Pesan untuk Anda</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="/lihatChat">
                      <div class="pull-left">
                        <img src="lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sarah Bullock
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Wokee gas</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Lihat Semua</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">1 Notifikasi untuk Anda</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="/perwalian">
                      <i class="fa fa-warning text-yellow"></i> Wajib Perwalian !
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Lihat Semua</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="lte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Student
                  <small>7219xxxx</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
          
                </div>
                <div class="pull-right">
                  <a href="/" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li>
          <a href="/profilMhs">
            <i class="fa fa-user"></i> <span>Profil</span>
          </a>
        </li>
       
        <li class="active">
          <a href="/perwalian">
            <i class="fa fa-file-text-o"></i> <span>Perwalian</span>
          </a>
        </li>

        <li>
          <a href="/chatDosen">
            <i class="fa fa-wechat"></i> <span>Chat Dosen Wali</span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perwalian
      </h1>
      <div class="callout callout-danger" style="width:700px; margin-top: 10px;">
          <h4>SEGERA PERWALIAN !</h4>
          <p>Batas waktu perwalian untuk semua prodi dari <b>18 - 20 Agustus 2021</b></p>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Kegiatan</h3>
            </div>

      <button type="button" style="margin-top:20px; margin-bottom:10px;" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">
        [+] Tambah <b>Perwalian</b> Baru
      </button>
         
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Kegiatan Baru</h4>
              </div>
              <div class="modal-body">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Permasalahan</label>
                    <textarea class="form-control" style="resize:none; rows="3" placeholder="Isi permasalahan Anda"></textarea>
                  </div>

                  <!-- text input -->
          
                  <div class="form-group">
                    <label>Jenis Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Perwalian KRS" disabled>
                  </div>

                  <!-- select -->
                  <div class="form-group">
                    <label>Keterangan</label>
                    <select class="form-control">
                      <option>Daring</a></option>
                      <option>Luring</option>
                    </select>
                  </div>
             
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                <a href="/formIsiKrsPrediksi">
                  <button type="button" class="btn btn-info">Tambahkan</button>
                </a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl Kegiatan</th>
                  <th>Permasalahan</th>
                  <th>Jenis Kegiatan</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    18 Agustus 2021 - 13:00 WIB
                  </td>
                  <td>
                    Saya ingin melakukan Perwalian KRS Prediksi
                  </td>
                  <td>
                    Perwalian KRS
                  </td>
                  <td>
                    <button type="button" style="width:60px;" class="btn bg-maroon btn-flat btn-xs">
                      <strong>Daring</strong>
                    </button>
                  </td>
                  <td>
                    <button type="button" style="width:90px;" class="btn btn-block btn-flat btn-warning btn-xs">
                      <strong>On Process</strong>
                    </button>
                  </td>
                  <td>
                    <a href="/lihatKrs">
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-eye">
                      </button>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    19 Agustus 2021 - 10:00 WIB
                  </td>
                  <td>
                    Saya ingin berkonsultasi terkait studi saya
                  </td>
                  <td>
                    Konsultasi Pribadi
                  </td>
                  <td>
                    <button type="button" style="width:60px;" class="btn bg-maroon btn-flat btn-xs">
                      <strong>Luring</strong>
                    </button>
                  </td>
                  <td>
                    <button type="button" style="width:90px;" class="btn btn-block btn-success btn-flat btn-xs">
                      <strong>Done</strong>
                    </button>
                  </td>
                  <td>
                    <a href="/lihatChat">
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-eye">
                      </button>
                    </a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">SI Wali-On</a>.</strong> All rights
    reserved.
  </footer>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="lte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="lte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="lte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
