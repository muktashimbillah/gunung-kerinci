@extends('homepage.template.index')


@section('css')
<style>
    .border-between {
        border-top: 2px solid var(--base-black);
        width: 50px;
    }
</style>
@endsection

@section('main')
<div class="container py-5">
    <main class="d-flex flex-column align-items-center">
        <header class="fs-5 fw-semibold">
            Pilih Jalur Pendakian
        </header>
        <div class="border-between"></div>
        <div class="row w-100 justify-content-center my-3" style="flex-wrap: wrap">
            @for ($i = 1; $i <= 4; $i++) <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('assets/img/sampel/sampel 2.png') }}" class="card-img-top" alt="Jalur Pendakian Kersik Tuo">
                    <div class="card-body">
                        <h5 class="card-title ">Jalur Kersik Tuo <span class="ms-2 badge gk-bg-primary400 fw-normal">Open</span>
                        </h5>
                        <p class="card-text index-text">Lorem ipsum dolor sit amet consectetur. Lorem posuere amet
                            non
                            in fermentum. Euismod lectus tellus imperdiet amet condimentum semper nulla ipsum.
                            Tortor ut
                            vestibulum diam maecenas elementum viverra. Sed arcu integer sagittis feugiat diam
                            egestas.
                        </p>
                        <a href="#" class="btn gk-bg-primary700 w-100 text-white">Pilih Jalur Pendakian</a>
                    </div>
                </div>
        </div>
        @endfor
</div>
</main>
</div>
@endsection