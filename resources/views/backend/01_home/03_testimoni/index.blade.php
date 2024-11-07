@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 180vh;
    margin-left: none;
    background: linear-gradient(to bottom, #90EE90, white, wheat);
    align-items: center;
    position: relative;
">

<div style="display: flex; align-items: center; margin-left:120px;">
    <img src="/assets/icon/lambangsihade.png" alt="Logo SIPJAKIKBB" style="width: 50%; object-fit: cover;">
    {{-- <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;"> --}}
</div>

<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> PT. Haznia Bina Virofarm </span></h1>
    
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
            .badge {
                background: linear-gradient(to right, green, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 0px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
            }

            .badge-plus {
            background: linear-gradient(to right, orange, black);
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            display: inline-block;
            font-size: 12px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
            position: absolute; /* Tambahkan ini */
            top: 20px; /* Atur jarak dari atas jika diperlukan */
            right: 20px; /* Atur jarak dari kanan jika diperlukan */
        }

        .badge-plus:hover {
            background: white;
            color: black;
        }

            .badge-menu1 {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 15px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 0px;
            }
            .badge-menu1:hover {
                background: white;
                color: black;
            }
        </style> <!-- <div class="badge"><i class="fas fa-edit me-2"></i>Create New </div></label> -->
         <button id="previewBtn" class="badge" style="border: none; font-size: 14px; cursor: pointer;">
            <i class="fas fa-comments mr-2"></i>Testimoni

        </button>
        {{-- <a href="/settingkecamatan" style="background: inherit">
            <button class="badge" style="border: none; font-size: 14px; cursor: pointer;">
                <i class="fas fa-map-marker-alt"></i>
            </button>
        </a>
        
        <a href="/settingpengawasanbangunangedung" style="background: inherit">
            <button class="badge" style="border: none; font-size: 14px; cursor: pointer; margin-left:-20px;">
                <i class="fas fa-building"></i>
            </button>
        </a>
        
        <a href="/settingpengawasanstatus" style="background: inherit">
            <button class="badge" style="border: none; font-size: 14px; cursor: pointer; margin-left:-20px;">
                <i class="fas fa-eye"></i>
            </button>
        </a>
        
        <a href="/settingpengawasantindakan" style="background: inherit">
            <button class="badge" style="border: none; font-size: 14px; cursor: pointer; margin-left:-20px;">
                <i class="fas fa-check-circle"></i>
            </button>
        </a>
         --}}

        <a href="/testimonicreate" style="background: inherit">
            <button class="badge-plus" style="border: none; font-size: 14px; cursor: pointer; margin-left:-20px;">
                <i class="fas fa-plus mr-2" style="color: white;"></i> Create
            </button>
        </a>
        
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->

    {{-- <select id="entries" onchange="showEntries()">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        </select> --}}
</div>
</div>


{{-- ================ --}}
@include('tambahan.alert')
{{-- ================ --}}



<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    font-size: 12px;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                    font-size: 12px;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #90EE90;
                    color: black;
                    font-size: 14px;
                }
            </style>
             <table>
                <thead>
                    <tr>
                        <th style="width:5%; font-size:12px;">NO</th>
                        {{-- <th>Judul</th> --}}
                        <th style="width:125px; font-size:12px;">NAMA LENGKAP</th>
                        <th style="width:200px; font-size:12px;">KOMENTAR</th>
                        <th style="width:170px; font-size:12px;">FOTO</th>
                        <th style="width:100px; font-size:12px;">JABATAN</th>
                        <th style="width:100px; font-size:12px;">PERUSAHAAN</th>
                        <th style="width:75px; font-size:12px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- ============================================ --}}
                    @php
                $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                    @endphp

                    @foreach($data as $item )
                    
                    <tr>
                        <td style="font-size: 12px;">{{ $loop->iteration + $start - 1 }}</td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->namalengkap}}</td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->komentar}}</td>
                        <td style="font-size: 12px; text-align:center;">
                            <img style="width: 50%;" src="{{asset('storage/' . $item->foto)}}" alt="">
                        </td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->jabatan}}</td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->perusahaan}}</td>
                   
                   <style>
                            .btn-full-width {
                                    width: 100%;
                                    text-align: center;
                                    font-size: 12px;
                                    border: none; /* Optional: menghapus border default tombol */
                                    padding: 6px; /* Optional: menambahkan padding agar lebih enak dilihat */
                                }

                                .btn-high-risk {
                                    background-color: red;
                                    color: white;
                                }
                                .btn-high-risk:hover {
                                    background-color: white;
                                    color: black;
                                }

                                .btn-low-risk {
                                    background-color: green;
                                    color: white;
                                }

                                .btn-low-risk:hover {
                                    background-color: white;
                                    color: black;
                                }

                                .btn-medium-risk {
                                    background-color: yellow;
                                    color: black;
                                }

                                .btn-medium-risk:hover {
                                    background-color: white;
                                    color: black;
                                }
                                
                                .btn-selesai {
                                    background-color: blue;
                                    color: white;
                                }

                                .btn-selesai:hover {
                                    background-color: white;
                                    color: black;
                                }
                                
                                .btn-proses {
                                    background-color: green;
                                    color: white;
                                }

                                .btn-proses:hover {
                                    background-color: white;
                                    color: black;
                                }
                                
                                .btn-lanjuti {
                                    background-color: red;
                                    color: white;
                                }

                                .btn-lanjuti:hover {
                                    background-color: white;
                                    color: black;
                                }

                        </style>
                        
                        {{-- <td style="font-size: 12px; text-align:left;">{{ $item->pengawasantindakan->tindakan}}</td> --}}
{{--                         
                        
                        <td style="font-size: 12px; text-align:center;">
                            {{ \Carbon\Carbon::parse($item->tanggal_laporan)->locale('id')->translatedFormat('l, d F Y') }}
                        </td> --}}
                        
                        
                        {{-- <td style="font-size: 12px; text-align:left;">{{ $item->keterangan}}</td> --}}
                    
                        
                          
                        <td>
                            
                        <style>
                                                /* Container for the buttons */
                    .button-container {
                        display: flex;
                        gap: 10px; /* Space between icons */
                        justify-content: center; /* Center the icons horizontally */
                    }

                    /* Style for the individual buttons */
                    .iconhover {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 25px; /* Adjust width as needed */
                        height: 25px; /* Adjust height as needed */
                        background: green, white; /* Yellow background */
                        color: white; /* Text color */
                        border: none;
                        border-radius: 50%;
                        text-decoration: none;
                        padding: 3px 3px;
                        font-size: 15px; /* Adjust font size as needed */
                        transition: background 0.3s, color 0.3s;
                        cursor: pointer;
                    }

                    .iconhover:hover {
                        background: white; /* White background on hover */
                        color: black; /* Black text color on hover */
                    }

                    .iconhover i {
                        margin: 0;
                    }
                    
                        </style>

                        <div class="button-container">
                        {{-- <a href="/pengawasandanketertiban/{{$item->judul}}" class="iconhover" title="View">
                            <i class="fas fa-eye"></i>
                        </a> --}}
                                <a href="/testimoni/update/{{$item->id}}" class="iconhover" title="Update">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#" class="iconhover" title="Delete" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteAction('{{ route('delete.datatestimoni', $item->id) }}')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                                                
        
                                {{-- ================= FORM DELETE =================== --}}
                    <!-- Modal HTML -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="container" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <img src="/assets/icon/lambangsihade.png" alt="" style="width:200px; height:50px; margin-bottom: 10px;">
                                        {{-- <img src="/assets/icon/pupr.png" alt="" style="width:10px; height:10px; margin-bottom: 10px;"> --}}
                                        <h5 class="modal-title" id="deleteModalLabel" style="margin: 0;">Konfirmasi Delete</h5>
                                    </div>
                                
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Anda Yakin Ingin Menghapus Data ini?</p>
                                    <form id="deleteForm" action="" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <script>
                        function setDeleteAction(actionUrl) {
                          document.getElementById('deleteForm').action = actionUrl;
                        }
                      </script>
                      
        
                                {{-- ================= FORM DELETE =================== --}}
                                    
                            </div>

                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    @endforeach
                    {{-- ============================================ --}}
                    
                    
                </tbody>
            </table>


        </div>

        <div class="pagination-container" style="margin-top: 25px; margin-bottom:75px; display: flex; flex-direction: column; align-items: center;">
                <div class="pagination-info mb-2" style="margin-bottom: 10px; color:orange; font-weight: 500;">
                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                </div>
                    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none;">
                        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                            <a class="page-link" href="{{ $data->previousPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 20px 0px 0px 20px;"><i class="fas fa-arrow-left" style="margin-right:10px;"></i>Previous</a>
                        </li>
{{-- 
                        @foreach ($data->getUrlRange($data->currentPage() - 0, $data->currentPage() + 2) as $page => $url)
                            <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                                <a class="page-link" href="{{ $url }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; ">{{ $page }}</a>
                            </li>
                        @endforeach --}}

                        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                            <a class="page-link" href="{{ $data->nextPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 0px 20px 20px 0px;">Next <i class="fas fa-arrow-right" style="margin-left:10px;"></i></a>
                        </li>
                    </ul>

            </div>
            {{-- @include('backend.00_dashboard.part.menufooter') --}}
        </div>
    </div>
    
                <hr style="border:0; height:5px; background-color:green; margin: 20px 0px;">
                @include('backend.00_dashboard.part.menufooter')
                    
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    