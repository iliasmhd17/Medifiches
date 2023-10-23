@extends('template')
@section('title', 'détail')
@section('content')
    @foreach ($data as $row)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $row->national_number }}</h5>
                <p class="card-text"> Médecin: {{ $row->medecins }}</p>
                <p class="card-text">Allergie: {{ $row->allergies }}</p>
                <p class="card-text">Consequences: {{ $row->allergies_consequences }}</p>
                <a href="/fiches/details/{{ $row->national_number }}" class="card-link">Détail</a>
            </div>
        </div>
    @endforeach
@endsection
