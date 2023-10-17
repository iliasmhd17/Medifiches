@extends('template')
@section('title', " - Fiche Médicale")
@section('content')
<div class="pbteam-container pbteam-padding-32" id="fiche-medicale">
  <h3 class="pbteam-border-bottom pbteam-border-light-grey pbteam-padding-16">Fiche Médicale</h3>
  <p><strong>Nom de l'enfant:</strong> {{-- {{ $person['last_name'] }} --}}</p>
  <p><strong>Prénom de l'enfant:</strong> {{-- {{ $person['first_name'] }} --}}</p>
  <p><strong>Médicaments:</strong> {{-- {{ implode(', ', $medical_card['medecins']) }} --}}</p>
  <p><strong>Allergies:</strong> {{-- {{ implode(', ', $medical_card['allergies']) }} --}}</p>
</div>
@endsection