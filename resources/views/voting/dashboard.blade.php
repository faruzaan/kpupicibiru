@extends("voting.master", [$title = "- Beranda", $active = 'dashboard'])
@section('main-content')
    <h4>SIPDA UPI CIBIRU</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque optio dolores, a nostrum
            perferendis
            asperiores voluptates, dolorem suscipit labore exercitationem repellat maxime numquam illum fuga
            qui
            consequuntur! Molestias, suscipit!
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque optio dolores, a nostrum
            perferendis
            asperiores voluptates, dolorem suscipit labore exercitationem repellat maxime numquam illum fuga
            qui
            consequuntur! Molestias, suscipit!
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque optio dolores, a nostrum
            perferendis
            asperiores voluptates, dolorem suscipit labore exercitationem repellat maxime numquam illum fuga
            qui
            consequuntur! Molestias, suscipit!
        </p>
    @endsection
    @section('info-content')
        <h4>TATA CARA</h4>
        <div class="embed-responsive embed-responsive-16by9 hero-video ">
            <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0"
                allowfullscreen></iframe>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3 mx-3 ">
            <div class="text-center">
                <h5>Suara Masuk Hari ini</h5>
                <p>99</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3 mx-3">
            <div class="text-center">
                <h5>Mahasiswa Aktif</h5>
                <p>99</p>
            </div>
        </div>
        <div class="info-suara bg-white shadow mt-2 my-rounded py-3 mx-3">
            <div class="text-center">
                <h5>Total Suara</h5>
                <p>99</p>
            </div>
        </div>
    @endsection
