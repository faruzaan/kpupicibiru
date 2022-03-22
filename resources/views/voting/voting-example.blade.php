@extends("voting.master", [$title = "- Pemilihan", $active = 'voting'])
@section('main-content')
    <div class="row">
        <div class="col-md-6 paslon-wrap" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine"
            data-paslon="1">
            <div class="paslon-card shadow vote">
                <div class="paslon-card-title">PASLON X</div>
                <div class="paslon-card-body">
                    <img src="{{ asset('img/paslon/paslon2.png') }}" alt="foto paslon" class="img-fluid">
                </div>
                <div class="paslon-name">
                    <p>Nama Ketua X & Wakil Ketua X</p>
                </div>
                <form action="{{ route('vote', [Auth::user()->id, 1]) }}" method="POST">
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
                <div class="paslon-card-title">PASLON Y</div>
                <div class="paslon-card-body">
                    <img src="{{ asset('img/paslon/paslon2.png') }}" alt="foto paslon" class="img-fluid">
                </div>
                <div class="paslon-name">
                    <p>Nama Ketua Y & Wakil Ketua Y</p>
                </div>
                <form action="{{ route('vote', [Auth::user()->id, 2]) }}" method="POST">
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
            data-paslon="3">
            <div class="paslon-card shadow vote">
                <div class="paslon-card-title">PASLON Z</div>
                <div class="paslon-card-body">
                    <img src="{{ asset('img/paslon/paslon2.png') }}" alt="foto paslon" class="img-fluid">
                </div>
                <div class="paslon-name">
                    <p>Nama Ketua Z & Wakil Ketua Z</p>
                </div>
                <form action="{{ route('vote', [Auth::user()->id, 2]) }}" method="POST">
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
        <h4>Paslon X</h4>
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
    <div class="info-wrap" data-info-paslon="2">
        <h4>Paslon Y</h4>
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
    <div class="info-wrap" data-info-paslon="3">
        <h4>Paslon Z</h4>
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
