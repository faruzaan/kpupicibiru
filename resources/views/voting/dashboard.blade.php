@extends("voting.master", [$title = "- Beranda", $active = 'dashboard'])
@section('main-content')
    <h4>SIPDA UPI CIBIRU</h3>
        @if (Auth::user()->pilihan != 0)
        <div class="alert alert-success" role="alert">
            Terima Kasih Telah Memilih
        </div>
        @endif
        <p>Assalamualaikum wr.wb.</p>
        <p>
        Pemilihan Umum tahun ini dilaksanakan dengan hanya 1 kandidat tetapi dalam pemilihannya itu saudara-saudari sebagai hak pemilih dapat memilih kotak kosong. Pemilihan umum ini dilaksanakan pada tanggal 23 Maret 2022 sampai 29 Maret 2022, dengan begitu yakinkan diri untuk pilihan anda.
        </p>
        <p>
        Wassalamualaikum wr.wb
        </p>

    @endsection
    @section('info-content')
        <h4>TATA CARA</h4>
        <div class="embed-responsive embed-responsive-16by9 hero-video">
        <iframe width="853" height="480" src="https://www.youtube.com/embed/aDFCMxl_l_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3">
            <div class="text-center">
                <h5>Suara Masuk Hari ini</h5>
                <p>{{ $SuaraSekarang }}</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3">
            <div class="text-center">
                <h5>Mahasiswa Aktif</h5>
                <p>1.933</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3">
            <div class="text-center">
                <h5>Total Suara</h5>
                <p>{{ $Total }}</p>
            </div>
        </div>
    @endsection
