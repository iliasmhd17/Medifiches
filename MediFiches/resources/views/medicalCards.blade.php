
@extends('template')
@section('title', 'détail')
@section('content')

<div class="postition-relative">
    <img src="{{ asset('images/medi-banner.png') }}" id="banner" alt="Banner" class="img-fluid" style="width: 100%; height: auto;">
    <div class="container mt-5 position-absolute bg-white d-inline " id="consult">
        <div><h3>Liste de tous les fiches médicales</h3><div/>
        <div class=" mr-4 mt-4">
            @foreach ($data as $row)
                <div class="card border-secondary mt-3 mr-5" style="max-width: 18rem;">
                    <div class="card-header"><h5 class="card-title">{{ $row->national_number }}</h5></div>
                    <div class="card-body text-secondary">
                      <p class="card-text"> Médecin: {{ $row->medecins }}</p>
                      <p class="card-text">Allergie: {{ $row->allergies }}</p>
                      <p class="card-text">Consequences: {{ $row->allergies_consequences }}</p>
                      <a href="/fiches/details/{{ $row->national_number }}" class="btn btn-secondary">Détail</a>
                    </div>
                </div>
            @endforeach
        <div/>
    </div>
</div>
@endsection


