<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Wali-On | Data Bimbingan</title>
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
      <span class="logo-lg"><b>Dosen</b></span>
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
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="lte/dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Sarah Bullock</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  Sarah Bullock - Lecturer
                  <small>1134xxxx</small>
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
          <img src="lte/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Sarah Bullock</p>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li>
          <a href="/profilDsn">
            <i class="fa fa-user"></i> <span>Profil</span>
          </a>
        </li>
       
        <li class="active">
          <a href="/dataBimbingan">
            <i class="fa fa-folder"></i> <span>Data Bimbingan</span>
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
        Data Bimbingan
      </h1>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Bimbingan</h3>
            </div>


        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Bimbingan</h4>
              </div>
              <div class="modal-body">
              <table width="100%">
                    <tr height="25px">
                    <td align="left">NIM &ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp; &ensp;&nbsp;&nbsp;&ensp;: </td>
                    <td align="left" width="75%"> 7219xxxx  </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Nama &ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </td>
                    <td align="left"> Alexander Pierce  </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Subjek Kegiatan &ensp;&nbsp;&nbsp; : </td>
                    <td align="left" > Perwalian KRS  </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Keterangan &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: </td>
                    <td align="left">Daring</td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Permasalahan &ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                    <td align="left">Saya ingin melakukan Perwalian KRS Prediksi </td>
                    </tr>
            </table>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Bimbingan</h4>
              </div>
              <div class="modal-body">
              <table width="100%">
                    <tr height="25px">
                    <td align="left">NIM &ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp; &ensp;&nbsp;&nbsp;&ensp;: </td>
                    <td align="left" width="75%"> 7219xxxx  </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Nama &ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </td>
                    <td align="left"> Alexander Pierce  </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Subjek Kegiatan &ensp;&nbsp;&nbsp; : </td>
                    <td align="left">Konsultasi Pribadi</td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Keterangan &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: </td>
                    <td align="left">Luring</td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Permasalahan &ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                    <td align="left">Saya ingin berkonsultasi terkait studi saya  </td>
                    </tr>
                </table>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="modal-default3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Validasi Bimbingan</h4>
              </div>
              <div class="modal-body">
              <table width="100%">
                    <tr height="25px">
                    <td align="left">Subjek Kegiatan &ensp;&nbsp;&nbsp; : </td>
                    <td align="left" width="75%">Perwalian KRS</td>
                    </tr>
                    <tr height="75px">
                    <td align="left">Status &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: </td>
                    <td align="left">
                        
                 <!-- select -->
                  <div class="form-group">
                    <select class="form-control">
                      <option>On Process</a></option>
                      <option>Done</option>
                    </select>
                  </div>
                    </td>
                    </tr>
       
                </table>
                <div class="modal-footer">
                <a href="/dataBimbingan">
                  <button type="button" class="btn btn-info">Update</button>
                </a>
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal fade" id="modal-default4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Validasi Bimbingan</h4>
              </div>
              <div class="modal-body">
              <table width="100%">
                    <tr height="25px">
                    <td align="left">Subjek Kegiatan &ensp;&nbsp;&nbsp; : </td>
                    <td align="left" width="75%">Konsultasi Pribadi</td>
                    </tr>
                    <tr height="75px">
                    <td align="left">Status &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: </td>
                    <td align="left">
                        
                 <!-- select -->
                  <div class="form-group">
                    <select class="form-control">
                      <option>On Process</a></option>
                      <option>Done</option>
                    </select>
                  </div>
                    </td>
                    </tr>
       
                </table>
                <div class="modal-footer">
                <a href="/dataBimbingan">
                  <button type="button" class="btn btn-info">Update</button>
                </a>
              </div>
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
                  <th>Tgl Bimbingan</th>
                  <th>Pengaju Bimbingan</th>
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
                    Alexander Pierce
                  </td>
                  <td>
                    <button type="button" style="width:90px;" class="btn btn-block btn-flat btn-warning btn-xs">
                      <strong>On Process</strong>
                    </button>
                  </td>
                  <td>
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-eye" data-toggle="modal" data-target="#modal-default">
                      </button>
                      <a href="/isiKrsMhs">
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-file">
                      </button>
                      </a>
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-pencil" data-toggle="modal" data-target="#modal-default3">
                      </button>
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
                    Alexander Pierce
                  </td>
                  <td>
                    <button type="button" style="width:90px;" class="btn btn-block btn-success btn-flat btn-xs">
                      <strong>Done</strong>
                    </button>
                  </td>
                  <td>
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-eye" data-toggle="modal" data-target="#modal-default2">
                      </button>
                      <a href="/chatDosenBlsMhs">
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-commenting">
                      </button>
                      </a>
                      <button type="button" style="width:75px; height:22px;" class="bg-primary fa fa-pencil" data-toggle="modal" data-target="#modal-default4">
                      </button>
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
