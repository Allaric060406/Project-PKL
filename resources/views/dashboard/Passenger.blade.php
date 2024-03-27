<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Passanger</title>
    <!-- Custom fonts for this template-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="vendorr/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="csss/tbn.css" rel="stylesheet">

</head>
<body>
        <div class="container mt-5">
            <div class="col-auto lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <form action="/Passenger" method="post">
                        @csrf
                        <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <a href="dashboard" class="btn btn-dark">Home</a>
                            <h6 class="m-0 font-weight-bold text-dark">Pemesanan</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <a href="pesanan" class="btn btn-dark">Hasildata</a>
                            </div>
                        </div>
                    <div class="row mt-3 container">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Nama Pemesan</label>
                                <input type="text" name="nama"  value="{{old('nama')}}" id="company" placeholder="Nama" class="form-control  @error('nama') is-invalid @enderror">
                                    <div class="invalid-feedback">
                                        @error('nama')
                                           {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                                    <div class="form-group"><label for="vat" class=" form-control-label">Nama Driver</label>
                                      <select class="form-control"  name="category_id" id="vat" placeholder="Wajib di isi" class="form-control">
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
                                <input type="text" name="tujuan" value="{{old('tujuan')}}"id="street" placeholder="Wajib di isi" class="form-control @error('tujuan') is-invalid @enderror">
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
                                <input type="text"  name="keperluan" value="{{old('keperluan')}}" id="street" placeholder=" Wajib di isi" class="form-control @error('keperluan') is-invalid @enderror">
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
                            <input type="text" name="Request" value="{{old('Request')}}"id="street" placeholder="Isi Sesuai Request (boleh kosong)" class="form-control @error('Request') is-invalid @enderror">
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
                                <input type="text"  name="telfon" value="{{old('telfon')}}"id="street" placeholder="Wajib di isi" class="form-control @error('pulang') is-invalid @enderror">
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
                                <input type="date" name="berangkat"value="{{old('berangkat')}}" id="street" placeholder="Wajib di isi" class="form-control @error('berangkat') is-invalid @enderror">
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
                                    <input type="date"  name="pulang" value="{{old('pulang')}}"id="street" placeholder="Wajib di isi" class="form-control @error('pulang') is-invalid @enderror">
                                    <div class="invalid-feedback">
                                        @error('pulang')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Attention
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                            </svg>
                                </h5>
                            </div>
                            <div class="modal-body fw-bold">
                                Apakah form tersebut sudah di isi dengan sesuai,jika sudah klik save untuk lanjut ke halman berikut nya 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
                        <div class=" container mb-3 text-right">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Submit
                            </button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>