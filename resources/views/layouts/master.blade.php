
<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kasir Prararama Sport</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    {!! Html::style('assets/plugins/bootstrap/css/bootstrap.css') !!}

    <!-- Waves Effect Css -->
    {!! Html::style('assets/plugins/node-waves/waves.css') !!}

    <!-- Animation Css -->
    {!! Html::style('assets/plugins/animate-css/animate.css') !!}

    <!-- Table Css -->
    {!! Html::style('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

    <!-- Custom Css -->
    {!! Html::style('assets/css/style.css') !!}

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    {!! Html::style('assets/css/themes/all-themes.css') !!}
</head>

<body class="theme-red">
    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> --}}
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php"><b>PRARARAMA SPORT</b></a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    {{ Html::image('storage/avatars/'.$user.'.png', $user.' Avatar', array('width' => '50', 'height' => '50')) }}
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>{{ $user }}</b></div>
                    <div class="email">{{ $jabatan }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a data-toggle="modal" data-target="#changepwd"><i class="material-icons">lock</i>Change Password</a></li>
                            <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
                        <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li> 

                    <li class="active">
                        <a href="/kasir">
                            <i class="material-icons">shopping_cart</i>
                            <span>Kasir</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="/barang">
                            <i class="material-icons">view_module</i>
                            <span>Barang</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="/report">
                            <i class="material-icons">description</i>
                            <span>Report</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="/user">
                            <i class="material-icons">supervisor_account</i>
                            <span>User</span>
                        </a>
                    </li>
                 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019<a href="javascript:void(0);"> Prararama Sport</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                    </ul>
                </div>
                
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            @if (Session::get('message')!="")
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="block-header">
               @yield('content')
            </div>
        </div>
    </section>

    
<!-- Modal Ganti Password -->
<div class="modal fade" id="changepwd">
<div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="center">Ganti Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <div class="form-line">
                <label for="pass_lama">Password Lama</label>
                <input type="password" name="pass_lama" placeholder="Masukkan Password Lama" class="form-control" id="pass_lama">            
            </div>
            </div>      

            <div class="form-group">
                <div class="form-line">
                <label for="pass_baru">Password Baru</label>
                <input type="password" name="pass_baru" placeholder="Masukkan Password Baru" class="form-control" id="pass_baru" >
            </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                <label for="pass_baru1">Ulangi Password Baru</label>
                <input type="password" name="pass_baru1" placeholder="Ulangi Masukkan Password Baru" class="form-control" id="pass_baru1" >
            </div>
            </div>            
                <input type="submit" name="Simpan" value="Ganti" class="btn btn-success">
    </form>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- Jquery Core Js -->

    {!! Html::script('assets/plugins/jquery/jquery.min.js') !!}

    <!-- Bootstrap Core Js -->
    {!! Html::script('assets/plugins/bootstrap/js/bootstrap.js') !!}

    <!-- Select Plugin Js -->
    {!! Html::script('assets/plugins/bootstrap-select/js/bootstrap-select.js') !!}

    <!-- Slimscroll Plugin Js -->
    {!! Html::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') !!}

    <!-- Waves Effect Plugin Js -->
    {!! Html::script('assets/plugins/node-waves/waves.js') !!}

  	<!-- Jquery DataTable Plugin Js -->
    {!! Html::script('assets/plugins/jquery-datatable/jquery.dataTables.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/jszip.min.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') !!}
    {!! Html::script('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') !!}

    <!-- Custom Js -->
    {!! Html::script('assets/js/admin.js') !!}
    {!! Html::script('assets/js/pages/tables/jquery-datatable.js') !!}

    <!-- Demo Js -->
    {!! Html::script('assets/js/demo.js') !!}
    <script>
        $("#flash-message").fadeOut(2000);
    </script>
    @if ($errors->has('username') || $errors->has('password') || $errors->has('alamat') || $errors->has('nama_pegawai'))
        <script>
            $('#mybar3').modal('show');
        </script>
    @endif
    @if ($errors->has('usernameE') || $errors->has('passwordE') || $errors->has('alamatE') || $errors->has('nama_pegawaiE'))
        <script>
            $('#mybar4').modal('show');
        </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function(){
            $(".editUser").click(function(){
                var $linkEU = $(this).closest("td");
                var link = $linkEU.find("#linkU").attr('linkUser');
                $.ajax({
                    url : link,
                    success: function(data){
                        $('#mybar4').modal('show');
                        $('#formEdit').attr('action', '/user/' + data.id_pegawai);
                        $('#jabatanEdit option[value=' + data.jabatan + ']').attr('selected',true);
                        $("#no_telpEdit").val(data.no_telp);
                        $("#namaEdit").val(data.nama_pegawai);
                        $("#alamatEdit").val(data.alamat);
                        $("#usernameEdit").val(data.username);
                        $("#passwordEdit").val(data.password);
                    }
                });
            });
               
            $(".editBarang").click(function(){
                var $linkEB = $(this).closest("td");
                var link = $linkEB.find("#linkB").attr('linkBarang');
                $.ajax({
                    url : link,
                    success: function(data){
                        $('#mybar2').modal('show');
                        $('#formEdit').attr('action', '/barang/' + data.id_barang);
                        $("#nama_barangE").val(data.nama_barang);
                        $("#stockN").text(data.stock + ' + ');
                        $("#harga_beliE").val(data.harga_beli);
                        $("#harga_jualE").val(data.harga_jual);
                    }
                });
            }); 
        });
    </script>
</body>

</html>