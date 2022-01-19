@extends("voting.master", [$title = "- Pemilihan", $active = 'voting'])
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
                    <p>M Figo Alfaiq & Dian Saepul A</p>
                </div>
                <form action="{{ route('vote', [/* Auth::user->id*/ 3, 2]) }}">
                    <button class="btn btn-vote" type="submit">
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
                <form action="{{ route('vote', [/* Auth::user->id*/ 2, 1]) }}">
                    <button class="btn btn-vote" type="submit">
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
                <p>Mewujudkan BEM UPI Kampus Cibiru Juara Lahir Batin dengan Inovasi Teknologi, aktif berkolaborasi, dan
                    berkarakter Masagi.</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>MISI</h5>
                <ol class="ml-3 px-2 text-left">
                    <li>Membentuk karakter kader mahasiswa yang aktif dan memiliki kepekaan sosial serta tanggap terhadap
                        isu lingkungan</li>
                    <li>Meningkatkan produktivitas dan daya saing mahasiswa yang menyeluruh melalui pemanfaatan teknologi
                        digital dan kolaborasi dengan pusat-pusat inovasi serta kelembagaan.</li>
                    <li>Mewujudkan tata kelola organisasi dan pelayanan publik yang responsif dan inovatif serta
                        kepemimpinan yang kolaboratif antara UKM Ormawa, Mahasiswa dan Lembaga.</li>
                    <li>Mengembangkan kepedulian sosial mahasiswa yang kreatif dan inspiratif sebagai bagian dari tri dharma
                        perguruan tinggi.</li>
                    <li>Memfasilitasi dan memotivasi mahasiswa untuk menghasilkan prestasi yang cemerlang di era disrupsi.
                    </li>
                </ol>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded-2 py-3 mx-3">
            <div class="text-center">
                <h5>Program Unggulan</h5>
                <ol class="ml-3 px-2 text-left">
                    <li>Desa Mekar (Membina Karakter)</li>
                    <li>UPI Cibiru Masagi</li>
                    <li>BEM <i>Quick Response</i></li>
                    <li>Mahasiswa Usaha Sejahtera (Mahara)</li>
                    <li>Piala BEM CUP</li>
                    <li>BEM Menyapa</li>
                    <li>Bukti Lisan (Buletin Fakta Isu dan Kajian)</li>
                </ol>
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
