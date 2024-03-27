<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<!-- sidepinggir -->
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/PIL.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="/dashboard">Home</a>
	          </li>
	          <li class="active">
              <a href="/Passenger">Passenger</a>
	          </li>
	          <li>
              <a href="#">Trucking</a>
	          </li>
	          <li>
              <a href="#">Keuangan</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i>AWRIL -->
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <!-- sideatas -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/Passenger">Passenger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trucking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keuangan</a>
                </li>
                <li>
                <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="btn btn-sm nav-link" ><i class="bi bi-box-arrow-right"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
              </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Edit data Pemesanan</h2>
        <form action="/updatedata/{{$data->id}}" method="post">
          @csrf
          <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
        <div class="lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Isi Form dibawah</strong></div>
                            <div class="card-body card-block">
                            <div class="col-10">
                                <div class="form-group"><label for="company" class=" form-control-label">Nama Pemesan</label><input type="text" name="nama" value="{{data->nama}}" id="company" placeholder="Nama" class="form-control"></div>
                            </div>
                            <div class="col-10">
                                <div class="form-group"><label for="vat" class=" form-control-label">Nama Driver</label><input type="text"  name="driver" value="{{data->driver}}" id="vat" placeholder="Wajib di isi" class="form-control"></div>
                            </div>
                            <div class="col-10">
                            <div class="form-group"><label for="street" class=" form-control-label"><Table>Tujuan</Table></label><input type="text"  name="tujuan" value="{{data->tujuan}}" id="street" placeholder="Wajib di isi" class="form-control"></div>
                            </div>
                            <div class="col-10">
                            <div class="form-group"><label for="street" class=" form-control-label"><Table>Jenis Kendaraan</Table></label><input type="text" name="kendaraan" value="{{data->text}}" id="street" placeholder=" Wajib di isi" class="form-control"></div>
                            </div>
                            <div class="container">
                              <div class="row">
                                <div class="col-5">
                                  <div class="form-group"><label for="street" class=" form-control-label"><Table>Tanggal Berangkat</Table></label><input type="date"  name="berangkat" value="{{data->date}}" id="street" placeholder="Wajib di isi" class="form-control"></div>
                                </div>
                                <div class="col-5">
                                  <div class="form-group"><label for="street" class=" form-control-label"><Table>Tanggal Pulang</Table></label><input type="date"  name="pulang" value="{{data->date}}" id="street" placeholder="Wajib di isi" class="form-control"></div>
                                </div>
                              </div>
                            </div>
                                <div class="txt">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                </div>
                            </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>