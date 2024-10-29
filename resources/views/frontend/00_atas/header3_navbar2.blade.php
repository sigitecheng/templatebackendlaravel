<nav>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black; /* Warna teks untuk tautan PROFIL */
        }
        .dropdown .arrow {
            margin-left: 5px;
            color: black; /* Warna teks untuk panah */
            font-size: 0.8em; /* Ukuran ikon panah */
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 325px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black; /* Warna teks untuk menu dropdown */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>

    <a href="/">DASHBOARD</a>
    
    <div class="dropdown">
        <a href="#" class="dropdown-toggle">PROFIL</a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content">

            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/profil/struktur" style="color: black; text-decoration: none; text-align:left">STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a>
            </div>
                                        {{-- <a href="#" style="color: black; text-align: left"><i class="fab fa-home"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a> --}}
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/profil/rencanastrategis" style="color: black; text-decoration: none; text-align:left">RENSTRA PROGRAM DAN JASA KONSTRUKSI </a>
            </div>
                                        {{-- <a href="#" style="color: black; text-align: left"><i class="fab fa-home"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a> --}}
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/profil/tupoksi" style="color: black; text-decoration: none; text-align:left">TUPOKSI PROGRAM DAN JASA KONSTRUKSI </a>
            </div>
             
        
            </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}
    
    <div class="dropdown">
        <a href="#" class="dropdown-toggle">BERITA</a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 100px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-newspaper" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">BERITA</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-newspaper" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">AGENDA</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}

    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">DATA <br> JAKON </a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 210px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">ASOSIASI</a>
            </div>

            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/datajakon/standarbiayaumum" style="color: black; text-decoration: none; text-align:left">STANDAR BIAYA UMUM</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/datajakon/paketpekerjaan" style="color: black; text-decoration: none; text-align:left">PROGRESS PAKET PEKERJAAN</a>
            </div>

            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">POTENSI JASA KONSTRUKSI</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}

    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">TENAGA <br> KERJA </a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 210px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/tenagakerja/skaskt" style="color: black; text-decoration: none; text-align:left">SKK</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/tenagakerja/pjt" style="color: black; text-decoration: none; text-align:left">PENANGGUNG JAWAB TEKNIS (PJT)</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/tenagakerja/timpembina" style="color: black; text-decoration: none; text-align:left">PEMBINA JASA KONSTRUKSI</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}
    

    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">SPM</a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 210px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/spm/informasispm" style="color: black; text-decoration: none; text-align:left">INFORMASI SPM</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">LAPORAN SPM</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}
    
    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">DUKUNGAN <br> USAHA </a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 210px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERMODALAN</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">JAMINAN USAHA</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">MITRA USAHA</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}

    <a href="/404" style="text-align: center">BADAN <br> USAHA </a>
    <a href="/uijk">SBU</a>
    <a href="/tdup">TDUP</a>
    
    
    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">PELATIHAN</a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 210px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">PELATIHAN</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">PENGAWASAN</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">KECELAKAAN</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">TEKNOLOGI KONSTRUKSI</a>
            </div>

            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/404" style="color: black; text-decoration: none; text-align:left">PRODUK DALAM NEGERI</a>
            </div>
             
        </div>
    </div>
    
    <div class="dropdown">
        <a href="#" class="dropdown-toggle" style="text-align: left">PERATURAN</a>
        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
        <div class="dropdown-content" style="min-width: 250px;">
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/undangundang" style="color: black; text-decoration: none; text-align:left">UNDANG UNDANG</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/pemerintah" style="color: black; text-decoration: none; text-align:left">PERATURAN PEMERINTAH</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/presiden" style="color: black; text-decoration: none; text-align:left">PERATURAN PRESIDEN</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/menteri" style="color: black; text-decoration: none; text-align:left">PERATURAN MENTERI</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/keputusanmenteri" style="color: black; text-decoration: none; text-align:left">KEPUTUSAN MENTERI</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/suratedaranmenteri" style="color: black; text-decoration: none; text-align:left">SURAT EDARAN MENTERI</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/referensi" style="color: black; text-decoration: none; text-align:left">REFERENSI</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/daerah" style="color: black; text-decoration: none; text-align:left">PERATURAN DAERAH</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/gubernur" style="color: black; text-decoration: none; text-align:left">PERATURAN GUBERNUR</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/walikotadanbupati" style="color: black; text-decoration: none; text-align:left">PERATURAN WALIKOTA/ BUPATI</a>
            </div>
             
            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                <a href="/peraturan/suratkeputusan" style="color: black; text-decoration: none; text-align:left">SURAT KEPUTUSAN</a>
            </div>
             
        </div>
    </div>                    {{-- <a href="#">PROFIL</a> --}}
    
    
    <a href="#">FORUM</a>
   


    {{-- <i class="fa-solid fa-magnifying-glass" id="search"></i> --}}
    <a href="/login">
        <i class="fa-solid fa-sign-in-alt" ></i>
    </a>

</nav>