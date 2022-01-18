@extends("voting.master", [$title = "- Pemilihan", $active = 'voting'])
@section('main-content')
<h4>PASLON 1</h3>
<div class="paslon-card shadow-lg " data-aos="fade-up" data-aos-duration="500"
    data-aos-easing="ease-in-sine">
    <div class="paslon-card-title">PASLON 1</div>
    <div class="paslon-card-body">
        <img src="{{ asset('img/paslon/paslon1.png') }}" alt="foto paslon"
            class="img-fluid">
    </div>
    <div class="paslon-name">
        <p>Alif & Iman</p>
    </div>
</div>
<div class="paslon-card shadow-lg " data-aos="fade-up" data-aos-duration="500"
    data-aos-easing="ease-in-sine">
    <div class="paslon-card-title">PASLON 1</div>
    <div class="paslon-card-body">
        <img src="{{ asset('img/paslon/paslon1.png') }}" alt="foto paslon"
            class="img-fluid">
    </div>
    <div class="paslon-name">
        <p>Alif & Iman</p>
    </div>
</div>
<div class="paslon-card shadow-lg " data-aos="fade-up" data-aos-duration="500"
    data-aos-easing="ease-in-sine">
    <div class="paslon-card-title">PASLON 1</div>
    <div class="paslon-card-body">
        <img src="{{ asset('img/paslon/paslon1.png') }}" alt="foto paslon"
            class="img-fluid">
    </div>
    <div class="paslon-name">
        <p>Alif & Iman</p>
    </div>
</div>
@endsection
@section("info-content")
<h4>Paslon 1</h4>
<div class="info-suara bg-white shadow mt-2 my-rounded py-3">
    <div class="text-center">
        <h5>Presiden</h5>
        <div class="p-4">
            <img src="{{ asset('img/paslon/pres1.png') }}" alt="Presiden 1" class="img-fluid">
            <div class="text-paslon">
                <h6>Alif Ilman Nafian</h6>
                <p>200098</p>
                <p>Pend. Teknik Arsitektur 2017 - FPTK</p>
            </div>
        </div>
    </div>
</div>
<div class="info-suara bg-white shadow mt-2 my-rounded py-3">
    <div class="text-center">
        <h5>Visi</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque optio dolores, a nostrum
    perferendis
    asperiores voluptates, dolorem suscipit labore exercitationem repellat maxime numquam illum fuga
    qui
    consequuntur! Molestias, suscipit! </p>
    </div>
</div>
<div class="info-suara bg-white shadow mt-2 my-rounded py-3">
    <div class="text-center">
        <h5>Mahasisa Aktif</h5>
        <p>99</p>
    </div>
</div>
<div class="info-suara bg-white shadow mt-2 my-rounded py-3">
    <div class="text-center">
        <h5>Total Suara</h5>
        <p>99</p>
    </div>
</div>
@endsection