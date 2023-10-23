@extends('template')
@section('title', 'détail')
@section('content')
    @foreach ($data as $row)
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5 class="card-title">{{ $row->national_number }}</h5></div>
            <div class="card-body text-secondary">
              <p class="card-text"> Médecin: {{ $row->medecins }}</p>
              <p class="card-text">Allergie: {{ $row->allergies }}</p>
              <p class="card-text">Consequences: {{ $row->allergies_consequences }}</p>
              <a href="/fiches/details/{{ $row->national_number }}" class="btn btn-primary">Détail</a>
            </div>
        </div>
    @endforeach
@endsection


