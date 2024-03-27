<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print-2</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('csss/well.css')}}">
</head>
<body>
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
                        <p><strong>SURAT IJIN JALAN KENDARAAN (SIJK)</strong></p>
                    </div>
                    <div class="text-left ms-3">
                            <div class="row mt-3">
                                <div class="col-5">
                                    <div class="sl">
                                        NO.SIJK
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sl border-end border-3">
                                        : SIJK/{{$data->id}}/PIL-PSG/II/2023 
                                    </div>
                                </div>
                            </div>
                    </div>
                    <br>
                    <div class="text-center fs-6 mb-2">
                        <strong>DIBERIKAN KEPADA :</strong>
                    </div>
                    <div class="text-left ms-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        Nama
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sl">
                                        : {{$data->categories->name}}
                                    </div>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sl">
                                        : Pengemudi
                                    </div>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">

                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="sl">
                                        : {{$data->tujuan}}
                                    </div>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        Tgl Berangkat
                                    </div>
                                    
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        : {{$data->berangkat}}
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        Jam : ..........
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        Tgl Kembali
                                    </div>
                                    
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        : {{$data->pulang}}
                                    </div>
                                
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        Jam : ..........
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    No.Polisi/Jenis Kendaraan 
                                </div>
                                <div class="col-3">
                                   : {{$data->categories->nopol}}
                                </div>
                                <div class="col-3">
                                   /       {{$data->kendaraan}}
                                </div>
                            </div>
                        <div class="text-left ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        Unit Pemesan
                                    </div>
                                
                                </div>
                                <div class="col-2">
                                    <div class="sl">
                                    : {{$data->keperluan}}
                                    </div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="sl">
                                    bpk.{{$data->nama}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        Keterangan
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="sl">
                                        <div class="border border-2 border-dark ">
                                          .  
                                        </div>
                                    </div>  
                                    <div class="sl">
                                        <div class="border border-2 border-dark ">
                                            .
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left col-3">
                                    <div class="sl">
                                        SPD Perpanjangan
                                    </div>  
                                    <div class="sl">
                                       Akomodasi
                                    </div>
                                </div>
                                <!-- <div class="col-2">
                                    <div class="sl">
                                    (.....    Malam)
                                    </div>
                                </div> -->
                            </div>
                        </div> 
                        <br>
                        <div class="text-center fs-6 mb-2">
                            <strong>DATA KELENGKAPAN KENDARAAN</strong>
                        </div>
                        <br>
                        <div class="text-left">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-1">
                                    <div class="sl">
                                         
                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        <div class="border border-2 border-dark xl">
                                            <div class="row">
                                                <div class="col-6 border-dark border-end">
                                                    <div class="ms-3">
                                                        <strong>ADA</strong>
                                                    </div>  
                                                </div>
                                                <div class="col-1  border-dark ">
                                                    <div class="">
                                                        <div class="">
                                                            <strong>TIDAK</strong>
                                                        </div>
                                                    </div>  
                                                </div>

                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        1.STNK ASLI
                                    </div>
                                    
                                </div>
                                <div class="col-1">
                                    <div class="sl">
                                        : 
                                    </div>
                                
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        <div class="border border-2 border-dark xl">
                                            <div class="me-4">
                                                <div class="me-5">
                                                    <div class="ms-3 border-end border-dark col-10">
                                                        .
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        2.KUNCI RODA
                                    </div>
                                    
                                </div>
                                <div class="col-1">
                                    <div class="sl">
                                        : 
                                    </div>
                                
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        <div class="border border-2 border-dark xl">
                                            <div class="me-4">
                                                <div class="me-5">
                                                    <div class="ms-3 border-end border-dark col-10">
                                                        .
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <div class="row">
                                <div class="col-5">
                                    <div class="sl">
                                        3.DONGKRAK
                                    </div>
                                    
                                </div>
                                <div class="col-1">
                                    <div class="sz">
                                        : 
                                    </div>
                                
                                </div>
                                <div class="col-3">
                                    <div class="sl">
                                        <div class="border border-2 border-dark xl">
                                            <div class="me-4">
                                                <div class="me-5">
                                                    <div class="ms-3 border-end border-dark col-10">
                                                        .
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-5 sz ms-5">
                                    <strong>Pengguna,</strong>
                                </div>
                                <div class="col-6 text-center me-2 sz">
                                    <strong>Bandung,.... {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-y')}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-5 sl me-3">
                                    <div class="text-right">
                                        .
                                    </div>
                                </div>
                                <div class="col-5 sl me-2">
                                    <div class="text-right">
                                        PENANGGUNG JAWAB
                                    </div>
                                </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row">
                                <div class="col-4 sz text-center me-5">
                                    <p><strong>NPP : </strong></p>
                                </div>
                                <div class="col-6 sl  text-right me-4">
                                    <div class="ms-5">
                                         <strong> DZIRAR SHAN RYAN PRATOMO</strong>
                                    </div>
                                   
                                    <div class="text-center ms-5">
                                        <div class="ms-5">
                                            <P>NPP: 136</P>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <br>
                            <div class="row">
                                 <div class="col-6 ms-4">
                                <strong>Penilaian Pelayanan :</strong>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Puas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tidak puas
                                    </label>
                                </div>
                               
                                 </div>
                                 <div class="col-5 text-right ms-2">
                                    <strong>Pengaduan Pelayanan: </strong><br>
                                    Hp:087855432013
                                 </div>
                            </div> 
                            <div class="ms-2">
                                <strong>Keterangan:</strong>
                            </div>
                            
                        </div>
                       
                    </div>
                        
     </div>
     <script>
         window.print();
     </script> 
</body>
</html>