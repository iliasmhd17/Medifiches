<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste de toutes les fiches medicales') }}
        </h2>
    </x-slot>

    <div style="background-image: url('{{ asset('images/medi-banner.png') }}'); background-size: cover; background-position: center; height: 100vh; position: relative; background-attachment: fixed;">
        <div class="container-fluid mt-5 position-absolute text-white d-flex align-items-center justify-content-center" id="consult">
            <div class="row row-cols-1 row-cols-md-3 w-100">
                @foreach ($data as $row)
                    <div class="col-md-4 mb-4">
                        <div class="card border-secondary h-100 w-100">
                            <div class="card-header" style="color: #000;">
                                <h5 class="card-title">{{ $row->last_name .' '. $row->first_name }}</h5>
                            </div>
                            <div class="card-body text-secondary">
                                <p class="card-text">Médecin: {{ $row->doctor }}</p>
                                <p class="card-text">Allergie: {{ $row->allergies }}</p>
                                <a href="/fiches/details/{{ $row->national_number }}" class="btn btn-secondary">Détails</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
