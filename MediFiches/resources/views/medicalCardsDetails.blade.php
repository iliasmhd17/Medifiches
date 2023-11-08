@extends('template')
@section('title', 'détail')
@section('content')
    @foreach ($data as $row)
    <div class="postition-relative">
        <img src="{{ asset('images/medi-banner.png') }}" id="banner" alt="Banner" class="img-fluid" style="width: 100%; height: auto;">
        <div class="container mt-5 position-absolute bg-white" id="consult">
            <br><br><h3 class="pb-3">Détail de la fiche médicale <strong> {{ $row->national_number }}</strong></h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Numéro national:</strong>{{ $row->national_number }}</li>
              <li class="list-group-item"><strong>Médecin:</strong> {{ $row->medecins }}</li>
              <li class="list-group-item"><strong>Allergie:</strong> {{ $row->allergies }}</li>
              <li class="list-group-item"><strong>Consequences:</strong> {{ $row->allergies_consequences }}</li>
              <li class="list-group-item"><strong>Quantite_medecine:</strong> {{ $row->quantity_medecine }}</li>
              <li class="list-group-item"><strong>Frequence :</strong> {{ $row->time_medecine }}</li>
              <li class="list-group-item"><strong>Date De Naissance:</strong> {{ $row->birth_date }}</li>
              <li class="list-group-item"><strong>Note Extra: </strong>{{ $row->additional_infos }}</li>
              <li class="list-group-item"><strong>Rue:</strong> {{ $row->street }}</li>
              <li class="list-group-item"><strong>numéro de maison:</strong> {{ $row->no }}</li>
              <li class="list-group-item"><strong>Boite à lettre:</strong> {{ $row->mailbox }}</li>
              <li class="list-group-item"><strong>Ville:</strong> {{ $row->city }}</li>
              <li class="list-group-item"><strong>Pays:</strong> {{ $row->country }}</li>
            </ul>
        </div>
    </div>
    @endforeach
@endsection


