<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Wali-On | Perwalian</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('lte')}}/dist/css/skins/_all-skins.min.css">


  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('lte')}}/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('lte')}}/dist/css/skins/_all-skins.min.css">


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
                        <img src="{{asset('lte')}}/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
              <img src="{{asset('lte')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('lte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
          <img src="{{asset('lte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <table width="100%">
                    <tr height="25px">
                    <td align="left">Kode Bimbingan &ensp;&nbsp;&nbsp; : </td>
                    <td align="left" width="90%"> KRS-0522-12345 </td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Nama Mahasiswa &ensp; : </td>
                    <td align="left"><strong> Alexander Pierce</strong></td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Tgl Bimbingan &ensp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                    <td align="left">18 Agustus 2021</td>
                    </tr>
                    <tr height="25px">
                    <td align="left">Status Bimbingan &ensp;:</td>
                    <td>
                        <button type="button" style="width:90px;" class="btn btn-block btn-flat btn-warning btn-xs">
                            <strong>On Process</strong>
                        </button>
                    </td>
                    </tr>
            </table>
        </div>

        <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Mata Kuliah</h3>
            </div>
           
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Matakuliah</label>
                <select class="form-control select2" style="width:100%;">
                  <option selected="selected">Bahasa Mandarin</option>
                  <option>Bahasa Korea</option>
                  <option>Magang Industri</option>
                  <option>Praktik Usaha</option>
                  <option>Apresiasi Seni</option>
                  <option>Apresiasi Seni Musik</option>
                  <option>Pendidikan Agama Kristen</option>
                  <option>Dasar Dasar Pemrograman</option>
                  <option>Prak Dasar Dasar Pemrograman</option>
                  <option>Dasar Dasar Manajemen dan Organisasi</option>
                  <option>Konsep Sistem Informasi</option>
                  <option>Pengantar Sistem Informasi</option>
                  <option>Prak Pengantar Sistem Informasi</option>
                  <option>Matrikulasi Logika Pemrograman</option>
                  <option>Jaringan Komputer</option>
                  <option>Perancangan Basis Data</option>
                  <option>Prak Perancangan Basis Data</option>
                  <option>Manajemen Proses Bisnis</option>
                  <option>Sistem Informasi Manajemen</option>
                  <option>Analisis Data Bisnis</option>
                  <option>Aplikasi Berbasis Desktop</option>
                  <option>Prak Aplikasi Berbasis Desktop</option>
                  <option>Manajemen Layanan Teknologi Informasi</option>
                  <option>Bahasa Inggris Terapan</option>
                  <option>Komunikasi Antar Personal</option>
                  <option>Rekayasa Perangkat Lunak</option>
                  <option>Prak Rekayasa Perangkat Lunak</option>
                  <option>Manajemen Proyek</option>
                  <option>Keamanan Teknologi Informasi</option>
                  <option>Data Mining</option>
                  <option>Terminologi Medis</option>
                  <option>Bisnis Cerdas Layanan Kesehatan</option>
                  <option>Pemrograman Mobile</option>
                  <option>Pemrograman Front End</option>
                  <option>Bahasa Indonesia</option>
                  <option>KKN</option>
                  <option>Kerja Praktek</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kelas</label>
                <select class="form-control select2" style="width:100%;">
                  <option selected="selected">A</option>
                  <option>B</option>
                  <option>C</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Tambahkan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
 

          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Matakuliah KRS Prediksi</h3>
            </div>
            <div class="box-header with-border">
              <h5>Maksimal SKS yang diajurkan : <b>24 SKS</b></h5>
            </div>
           
        <!-- /.box-header -->
        <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Matakuliah</th>
                  <th>SKS</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                      1
                  </td>
                  <td>
                      SI2413
                  </td>
                  <td>
                      Rekayasa Perangkat Lunak
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      B
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      2
                  </td>
                  <td>
                      SI2373
                  </td>
                  <td>
                      Komunikasi Antar Personal
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      B
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      3
                  </td>
                  <td>
                      PR2413
                  </td>
                  <td>
                      Praktikum Rekayasa Perangkat Lunak
                  </td>
                  <td>
                      0
                  </td>
                  <td>
                      B
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      4
                  </td>
                  <td>
                      SI3323
                  </td>
                  <td>
                      Manajemen Proyek
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      A
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      5
                  </td>
                  <td>
                      SE4323
                  </td>
                  <td>
                      Data Mining
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      A
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      6
                  </td>
                  <td>
                      SE3343
                  </td>
                  <td>
                      Keamanan Teknologi Informasi
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      A
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      7
                  </td>
                  <td>
                      MH2023
                  </td>
                  <td>
                      Apresiasi Seni
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      A
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      8
                  </td>
                  <td>
                      MH2033
                  </td>
                  <td>
                      Apresiasi Seni Musik
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      B
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                      9
                  </td>
                  <td>
                      SI3423
                  </td>
                  <td>
                      Pemrograman Terintegrasi Terapan
                  </td>
                  <td>
                      3
                  </td>
                  <td>
                      A
                  </td>
                  <td>
                    <button type="button" style="width:70px; height:30px;"
                        class="btn btn-block btn-danger btn-sm fa fa-trash">
                    </button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
          <!-- /.box -->
          <button type="button" style="margin-bottom:10px;" class="btn btn-block btn-success fa fa-check-square" data-toggle="modal" data-target="#modal-default">
             Simpan Perubahan
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
                <p> Apakah Anda sudah yakin dengan pilihan KRS Prediksi Anda saat ini?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" style="width:70px;" data-dismiss="modal">Tidak</button>
                <a href="/lihatKrs">
                  <button type="button" class="btn btn-info" style="width:70px;">Ya</button>
                </a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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
<script src="{{asset('lte')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('lte')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="{{asset('lte')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('lte')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('lte')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('lte')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte')}}/dist/js/demo.js"></script>
<!-- page script -->

<!-- Select2 -->
<script src="{{asset('lte')}}/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="{{asset('lte')}}/plugins/input-mask/jquery.inputmask.js"></script>
<script src="{{asset('lte')}}/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="{{asset('lte')}}/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="{{asset('lte')}}/bower_components/moment/min/moment.min.js"></script>
<script src="{{asset('lte')}}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('lte')}}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="{{asset('lte')}}/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="{{asset('lte')}}/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('lte')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('lte')}}/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="{{asset('lte')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte')}}/dist/js/demo.js"></script>
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

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
