<!doctype html>
<html lang="en">
  <head>
  	<title>Print-Passangger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('csss/well.css')}}">
  </head>
  <body>
        <!-- isi disini -->
        <table>
                <div class="border border-4 border-dark">
                    <div class="row">
                        <div class="col-6">
                            <img src="/imagess/logo_pil.png" alt="" width="190px" height="60px">
                        </div>
                        <div class="col-6 almt">
                            <div class="text-right">
                                <div class="pt">
                                     <strong>PT.PINDAD INTERNASIONAL LOGISTIC</strong>
                                </div>
                               <p><u>https://pindadinternationallogistic.co.id</u><br>
                                jln.jend Gatot Subroto No.517 Bandung<br>
                                Telp : 022-7312073 Ext 2226,022-73515652</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center fs-5">
                        <p><strong>SURAT PESANAN KENDARAAN (SPK)</strong></p>
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                        <div class="text-left ms-3">
                            <div class="row mt-3">
                                <div class="col-5">
                                    <div class="sz">
                                        Nama Pemesan/Surat
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sz border-end border-3">
                                        : 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Nomor SIJ
                                    </div>
                                
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : SIJK/{{$data->id}} /PIL-PSG/II/2023
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Tanggal Pesanan
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-y')}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Unit Pemesan
                                    </div>
                                
                                </div>
                                <div class="col-4">
                                    <div class="sz">
                                    : {{$data->keperluan}}
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="sz">
                                    bpk.{{$data->nama}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Jenis/Type Kendaraan 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{$data->kendaraan}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Tanggal Berangkat
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{ \Carbon\Carbon::parse($data->berangkat)->format('d-m-y')}}
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Tanggal kembali
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{ \Carbon\Carbon::parse($data->pulang)->format('d-m-y')}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Tujuan
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{$data->tujuan}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11 sz">
                                <div class="text-right me-5 ">
                                    <p><strong>Pemesan,</strong></p>
                                    <br>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-11">
                                <div class="text-right">
                                <div class="fs-4 me-1">
                                        <p>(............................)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center fs-5 mb-2">
                            <strong>DATA KENDARAAN</strong>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Nama Pengemudi
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{$data->categories->name}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        No.Polisi
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{$data->categories->nopol}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        No.HP Pengemudi
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{$data->categories->nohp}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Tanggal Pemakaian
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : {{ \Carbon\Carbon::parse($data->berangkat)->format('d-m-y')}}
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Jam Berangkat
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : 
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="text-left ms-3 mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sz">
                                        Jam kembali
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sz">
                                        : 
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                            <div class="lbr">
                                <div class="row border border-dark border-3 xl" >
                                    <div class="col-8 text-center mt-1">
                                        <P><strong>KETERANGAN</strong></P>
                                    </div>
                                    <div class="col-4 text-center border-start border-dark">
                                        <P><strong>Bandung, {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-y')}}</strong></P>
                                    </div>
                                </div>
                                <div class="row border border-dark border-3 sz">
                                    <div class="col-4 text-left mt-1">
                                        <a>HARI PEMAKAIAN</a><br>
                                        <a>TARIF SEWA KENDARAAN</a><br>
                                        <a>TARIF PENGEMUDI</a><br>
                                        <a>BIAYA AKOMODASI</a><br>
                                        <a>JUMLAH</a><br>
                                        <a>PPN</a>
                                    </div>
                                    <div class="col-4 text-right border-start border-dark">
                                        <a>{{$data->tarifs->durasi}}</a><br>
                                        <a>{{$data->tarifs->biaya}}</a><br>
                                        <a id="tPengemudi" value=150000>150.000</a><br>
                                        <a>-</a><br>
                                        <a></a><br>
                                        <a id="tPpn" value=71500>71.500</a><br>
                                    </div>
                                    <div class="col-4 text-center border-start border-dark">
                                        <P><strong>SPV PENJUALAN &  ADM</strong></P>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="mt-1">
                                            <p><strong><u>GILANG ANGGIKA</u></strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border border-dark border-3 xl">
                                    <div class="col-4 text-center mt-1">
                                        <P><strong>TOTAL TAGIHAN</strong></P>
                                    </div>
                                    <div class="col-4 text-center border-start border-dark">
                                        <P id="total"><strong></strong></P>
                                    </div>
                                    <div class="col-4 text-center border-start border-dark">
                                        <P><strong></strong></P>
                                    </div>
                                </div>
                                <div class="row border border-dark border-3 sz">
                                    <div class="col-2 text-center mt-1">
                                        <P><strong>SPD UNIT</strong></P>
                                    </div>
                                    <div class="col-2 text-center border-start border-dark">
                                        <P><strong></strong></P>
                                    </div>
                                    <div class="col-2 text-center border-start border-dark">
                                        <P><strong>SPD PIL</strong></P>
                                    </div>
                                    <div class="col-2 text-center border-start border-dark">
                                        <P><strong></strong></P>
                                    </div>
                                    <div class="col-2 text-center border-start border-dark">
                                        <P><strong>LAIN2</strong></P>
                                    </div>
                                    <div class="col-2 text-center border-start border-dark">
                                        <P><strong></strong></P>
                                    </div>
                                </div>
                            </div>
                 </div>
                 <script>
                    window.print();
                </script> 
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<!-- <script type="text/javascript">

    var tPengemudi = 150000;
    var tPpn = 71500;

    var total = tPengemudi + tPpn;
    document.getElementById("total").innerHTML = "<b> Rp." + total +"</b>";
</script> -->