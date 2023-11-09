@extends('template')
@section('title', 'détail')
@section('content')
    
    <div class="postition-relative">
        <img src="{{ asset('images/medi-banner.png') }}" id="banner" alt="Banner" class="img-fluid" style="width: 100%; height: auto;">
        <div class="container mt-5 position-absolute bg-white" id="consult">
            <div class="d-flex justify-content-between align-items-center mb-3">

            @foreach ($data as $row)
            <br><br><br><br><h3 class="pb-3">Fiche médicale <strong> {{ $row->national_number }}</strong></h3>
                <form method="POST" action="{{ route('generate-pdf') }}" class="ms-auto">
                    @csrf
                    <button type="submit" class="btn" style="background: none; border: none;" title="Télécharger en PDF">
                        <img src="{{ asset('images/down.png') }}" alt="Générer PDF" style="height: 40px;">Télécharger
                    </button>
                </form>
            </div>
            @foreach ($children as $item)
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nom : </strong>{{$item->last_name }}</li>
                <li class="list-group-item"><strong>Prénom : </strong>{{$item->first_name }}</li>
                <li class="list-group-item"><strong>Email : </strong>{{$item->email }}</li>
            </ul> 
            @endforeach
            
            <ul class="list-group list-group-flush">
              
              <li class="list-group-item"><strong>Numéro national : </strong>{{ $row->national_number }}</li>
              <li class="list-group-item"><strong>Médecin : </strong> {{ $row->medecins }}</li>
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
            @endforeach
        </div>
    </div>
   
@endsection


