<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Passanger</title>
    <!-- Custom fonts for this template-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="vendorr/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('csss/tbn.css')}}">
  </head>
  <body>
  <div class="container mt-5">
    <div class="col-auto lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">Edit Pemesanan</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
            </div>
          </div>
          <form action="/updatedata/{{$data->id}}" method="post">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="row mt-3 container">
                          <div class="col-12 col-sm-6">
                              <div   div class="form-group">
                                  <label for="company" class=" form-control-label">Nama Pemesan</label>
                                  <input type="text" name="nama" id="company" value="{{old('nama',$data->nama)}}" placeholder="Nama" class="form-control  @error('nama') is-invalid @enderror">
                                      <div class="invalid-feedback">
                                          @error('nama')
                                             {{ $message }}
                                          @enderror
                                      </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-6">
                                      <div class="form-group"><label for="vat" class=" form-control-label">Nama Driver</label>
                                        <select class="form-control"  name="category_id" id="vat" value="{{old('category_id',$data->category_id)}}"placeholder="Wajib di isi" class="form-control">
                                            <option selected>Pilih Driver</option>
                                            @foreach($datadriver as $w)
                                              <option value="{{$w->id}}">{{$w->name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                          </div>
                      </div>
                      <div class="row mt-3 container">
                          <div class="col-12 col-sm-6">
                              <div class="form-group">
                                  <label for="street" class=" form-control-label"><Table>Tujuan</Table></label>
                                  <input type="text" name="tujuan" id="street" placeholder="Wajib di isi"  value="{{old('tujuan',$data->tujuan)}}"class="form-control @error('tujuan') is-invalid @enderror">
                                          <div class="invalid-feedback">
                                            @error('tujuan')
                                                {{ $message }}
                                            @enderror
                                          </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-6">
                              <div class="form-group">
                                  <label for="street" class=" form-control-label"><Table>Divisi Pemesan</Table></label>
                                  <input type="text"  name="keperluan"  id="street" placeholder=" Wajib di isi" value="{{old('keperluan',$data->keperluan)}}" class="form-control @error('keperluan') is-invalid @enderror">
                                          <div class="invalid-feedback">
                                            @error('keperluan')
                                                {{ $message }}
                                            @enderror
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="mt-3 row container">
                          <div class="col-12 col-sm-6">
                              <div class="form-group"><label for="street" class=" form-control-label"><Table>Jenis kendaraan</Table></label>
                              <input class="form-control" type="text" placeholder="Innova" aria-label="Disabled input example" disabled>
      
                          </div>
                          </div>
                          <div class="col-12 col-sm-6">
                              <div class="form-group"><label for="street" class=" form-control-label"><Table>Request</Table></label>
                              <input type="text" name="Request" id="street" placeholder="Isi Sesuai Request (boleh kosong)"  value="{{old('Request',$data->Request)}}"class="form-control @error('Request') is-invalid @enderror">
                                          <div class="invalid-feedback">
                                            @error('Request')
                                                {{ $message }}
                                            @enderror
                                        </div>
                          </div>
                          </div>
                      </div>
                      <div class="mt-3 row container">
                          <div class="col-12 col-sm-6">
                              <div class="form-group"><label for="vat" class=" form-control-label">Durasi</label>
                                  <select class="form-control"  name="Biaya" id="vat" placeholder="Wajib di isi" class="form-control @error('Biaya') is-invalid @enderror">
                                      <option selected>Pilih</option>
                                      @foreach($databiaya as $w)
                                         <option value="{{$w->id}}">{{$w->durasi}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="col-12 col-sm-6">
                              <div class="form-group">
                                  <label for="street" class=" form-control-label"><Table>No. Handphone</Table></label>
                                  <input type="text"  name="telfon"id="street" placeholder="Wajib di isi"  value="{{old('telfon',$data->telfon)}}"class="form-control @error('pulang') is-invalid @enderror">
                                  <div class="invalid-feedback">
                                      @error('telfon')
                                          {{ $message }}
                                      @enderror
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="container">
                          <div class="row">
                              <div class="col-5 col-sm-6">
                                  <div class="form-group"><label for="street" class=" form-control-label"><Table>Tanggal Berangkat</Table></label>
                                  <input type="date" name="berangkat"value="{{old('berangkat',$data->berangkat)}}" id="street" placeholder="Wajib di isi" class="form-control @error('berangkat') is-invalid @enderror">
                                  <div class="invalid-feedback">
                                          @error('berangkat')
                                              {{ $message }}
                                          @enderror
                                      </div>
                              </div>
                              </div>
                              <div class="col-5 col-sm-6">
                                  <div class="form-group">
                                      <label for="street" class=" form-control-label"><Table>Tanggal Pulang</Table></label>
                                      <input type="date"  name="pulang" value="{{old('pulang',$data->pulang)}}"id="street" placeholder="Wajib di isi" class="form-control @error('pulang') is-invalid @enderror">
                                      <div class="invalid-feedback">
                                          @error('pulang')
                                              {{ $message }}
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class=" container mb-3 text-right">
                          <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                             Submit
                          </button>
                      </div>
      </div>
    </div>
  </div>
        </form>
  </body>

      <!-- Bootstrap core JavaScript-->
     <script src="vendorr/jquery/jquery.min.js"></script>
     <script src="vendorr/bootstrap/js/bootstrap.bundle.min.js"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="vendorr/jquery-easing/jquery.easing.min.js"></script>
 
     <!-- Custom scripts for all pages-->
     <script src="jss/sb-admin-2.min.js"></script>
 
     <!-- Page level plugins -->
     <script src="vendorr/chart.js/Chart.min.js"></script>
 
     <!-- Page level custom scripts -->
     <script src="jss/demo/chart-area-demo.js"></script>
     <script src="jss/demo/chart-pie-demo.js"></script>
</html>