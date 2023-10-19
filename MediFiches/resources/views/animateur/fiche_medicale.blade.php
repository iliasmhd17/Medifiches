@extends('template')
@section('title', " - Fiche Médicale")
@section('content')
<div class="pbteam-container pbteam-padding-32" id="fiche-medicale">
  <h3 class="pbteam-border-bottom pbteam-border-light-grey pbteam-padding-16">Fiche Médicale</h3>
  <p><strong>Nom de l'enfant: </strong> <span>{{$values->childLastName}}</span></p>
  <p><strong>Prénom de l'enfant: </strong><span></span>{{$values->childFirstName}}</p>
  <p><strong>Date de naissance:</strong></p>
  <p><strong>Peut nager: </strong></p>
  <p><strong>Médicaments: </strong></p>
  <p><strong>Quantité de médicaments: </strong></p>
  <p><strong>Indiquez la fréquance: </strong></p>
  <p><strong>Allergies: </strong><span>{{$values->allergies}}</span></p>
  <p><strong>Conséquances des allergies: </strong></p>
  <p><strong>Vaccination tetanos: </strong></p>
  <p><strong>Adresse:</strong></p>
</div>
@endsection