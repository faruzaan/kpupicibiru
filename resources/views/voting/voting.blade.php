@extends("voting.master", [$title = "- Pemilihan", $active = 'voting'])
@push('js')
    <script>
        $("body").on("click", ".btn-vote", function(e) {
            if (confirm("Apakah anda yakin akan melakukan pemilihan ini?")) {
                $(this).parent().submit();
            } else {
                alert("Tidak jadi memilih")
            }
        })
    </script>
@endpush
@section('main-content')
    <div class="row">
        <div class="col-md-6 paslon-wrap" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine"
            data-paslon="1">
            <div class="paslon-card shadow vote">
                <div class="paslon-card-title">PASLON 1</div>
                <div class="paslon-card-body">
                    <img src="{{ asset('img/paslon/paslon1.png') }}" alt="foto paslon" class="img-fluid">
                </div>
                <div class="paslon-name">
                    <p>Gumilang Pawitan & Rafif Dzakwan R</p>
                </div>
                <form action="{{ route('vote', [Auth::user()->id, 1]) }}" method="POST">
                    <button class="btn btn-vote" type="button">
                        @csrf
                        @method('put')
                        <div class="paslon-vote text-center py-2">
                            Pilih
                        </div>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-6 paslon-wrap" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine"
            data-paslon="2">
            <div class="paslon-card shadow vote">
                <div class="paslon-card-title">PASLON 2</div>
                <div class="paslon-card-body">
                    <img src="{{ asset('img/paslon/paslon2.png') }}" alt="foto paslon" class="img-fluid">
                </div>
                <div class="paslon-name">
                    <p>- & -</p>
                </div>
                <form action="{{ route('vote', [Auth::user()->id, 2]) }}" method="POST">
                    <button class="btn btn-vote" type="button">
                        @csrf
                        @method('put')
                        <div class="paslon-vote text-center py-2">
                            Pilih
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('info-content')
    <div id="info">

    </div>
    <div class="info-wrap" data-info-paslon="1">
        <h4>Paslon 1</h4>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>Visi</h5>
                <p>Menjadi BEM UPI Cibiru yang mengedepankan nilai kebersamaan dan keberagaman dalam persatuan.</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>MISI</h5>
                <ol class="ml-3 px-2 text-left">
                    <li>Menjalin relasi dan kolaborasi yang bersahaja, baik di internal maupun eksternal demi terciptanya
                        lingkungan yang harmonis.</li>
                    <li>Memupuk potensi mahasiswa demi optimalisasi perkembangan diri.</li>
                    <li>Membangun pergerakan dan pengabdian yang mengutamakan kemaslahatan masyarakat.</li>
                    <li>Mengukuhkan integritas dan solidaritas internal organisasi.</li>
                </ol>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>Program Unggulan</h5>
                {{-- <ol class="ml-3 px-2 text-left">
                    <li>Desa Mekar (Membina Karakter)</li>
                    <li>UPI Cibiru Masagi</li>
                    <li>BEM <i>Quick Response</i></li>
                    <li>Mahasiswa Usaha Sejahtera (Mahara)</li>
                    <li>Piala BEM CUP</li>
                    <li>BEM Menyapa</li>
                    <li>Bukti Lisan (Buletin Fakta Isu dan Kajian)</li>
                </ol> --}}
            </div>
        </div>
    </div>
    <div class="info-wrap" data-info-paslon="2">
        <h4>Paslon 2</h4>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>Visi</h5>
                <p>-</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>MISI</h5>
                <p>-</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>Program Unggulan</h5>
                <p>-</p>
            </div>
        </div>
    </div>
@endsection
