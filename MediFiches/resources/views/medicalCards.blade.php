<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous">
    <title>Fiches</title>
</head>

<body>
    @foreach ($data as $row)

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $row->national_number }}</h5>
          <h6 class="card-subtitle mb-2 text-muted"> Médecin: {{ $row->medecins }}</h6>
          <p class="card-text">Allergie: {{ $row->allergies }}</p>
          <p class="card-text">Consequences: {{ $row->allergies_consequences }}</p>
          <a href="#" class="card-link">Détail</a>
        </div>
      </div>

      <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
=======
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
>>>>>>> 67204381e2ecf56c8009ee7f6a700e39cd03fb53
    @endforeach
@endsection


