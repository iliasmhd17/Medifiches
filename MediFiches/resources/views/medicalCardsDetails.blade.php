@extends('template')
@section('title', 'détail')
@section('content')

    <div class="postition-relative">
        <div class="container mt-5 position-absolute bg-white" id="consult">
            <div class="d-flex justify-content-between align-items-center mb-3">

            @foreach ($data as $row)
            <br><br><br><br><h3 class="pb-3">Fiche médicale de <strong> {{ $row->first_name }} {{ $row->last_name }}</strong></h3>
                <form method="POST" action="{{ route('generate-pdf') }}" class="ms-auto">

                    <input type="text" name="national_number" value="{{$row->national_number}}" hidden>
                    @csrf
                    <button type="submit" class="btn" style="background: none; border: none; display: flex; align-items: center;" title="Télécharger en PDF">
                        Télécharger
                        <img src="{{ asset('images/down.png') }}" alt="Générer PDF" style="height: 40px; margin-left: 5px;">
                    </button>
                </form>
                @endforeach
            </div>
            <ul class="list-group list-group-flush">
<<<<<<< HEAD
                <li class="list-group-item"><strong>Nom : </strong>{{$item->last_name }}</li>
                <li class="list-group-item"><strong>Prénom : </strong>{{$item->first_name }}</li>
                <li class="list-group-item"><strong>Email : </strong>{{$item->email }}</li>
            </ul>
            @endforeach

            <ul class="list-group list-group-flush">

              <li class="list-group-item"><strong>Numéro national : </strong>{{ $row->national_number }}</li>
              <li class="list-group-item"><strong>Nom : </strong>{{$row->last_name }}</li>
              <li class="list-group-item"><strong>Prénom : </strong>{{$row->first_name }}</li>
              <li class="list-group-item"><strong>Médecin : </strong> {{ $row->medecins }}</li>
              <li class="list-group-item"><strong>Allergie:</strong> {{ $row->allergies }}</li>
              <li class="list-group-item"><strong>Consequences:</strong> {{ $row->allergies_consequences }}</li>
              <li class="list-group-item"><strong>Quantite_medecine:</strong> {{ $row->quantity_medecine }}</li>
              <li class="list-group-item"><strong>Frequence :</strong> {{ $row->time_medecine }}</li>
              <li class="list-group-item"><strong>Date De Naissance:</strong> {{ $row->birth_date }}</li>
              <li class="list-group-item"><strong>Note Extra: </strong>{{ $row->additional_infos }}</li>
              <li class="list-group-item"><strong>Rue:</strong> {{ $row->street }}</li>
              <li class="list-group-item"><strong>Numéro de maison:</strong> {{ $row->no }}</li>
              <li class="list-group-item"><strong>Ville:</strong> {{ $row->city }}</li>
              <li class="list-group-item"><strong>Code Postal:</strong> {{ $row->postal_code }}</li>
              <li class="list-group-item"><strong>Pays:</strong> {{ $row->country }}</li>
            </ul>
        </div>
    </div>

@endsection


=======
                <li class="list-group-item"><strong>Nom : </strong>{{ $row->last_name }}</li>
                <li class="list-group-item"><strong>Prénom : </strong>{{ $row->first_name }}</li>
                <li class="list-group-item"><strong>Numéro national : </strong>{{ $row->national_number }}</li>
                <li class="list-group-item"><strong>Médecin : </strong> {{ $row->medical_record }}</li>
                <li class="list-group-item"><strong>Médicaments:</strong> {{ $row->medecins }}</li>
                <li class="list-group-item"><strong>Quantité:</strong> {{ $row->quantity_medecine }}</li>
                <li class="list-group-item"><strong>Frequence :</strong> {{ $row->time_medecine }}</li>
                <li class="list-group-item"><strong>Consequences:</strong> {{ $row->allergies_consequences }}</li>
                <li class="list-group-item"><strong>Allergie:</strong> {{ $row->allergies }}</li>
                <li class="list-group-item"><strong>Date De Naissance:</strong> {{ $row->birth_date }}</li>
                <li class="list-group-item"><strong>Rue:</strong> {{ $row->street }}</li>
                <li class="list-group-item"><strong>Numéro de maison:</strong> {{ $row->no }}</li>
                <li class="list-group-item"><strong>Ville:</strong> {{ $row->city }}</li>
                <li class="list-group-item"><strong>Code Postal:</strong> {{ $row->postal_code }}</li>
                <li class="list-group-item"><strong>Pays:</strong> {{ $row->country }}</li>
                <li class="list-group-item"><strong>Note Extra: </strong>{{ $row->additional_infos }}</li>
            </ul>
        </div>
    </div>
</x-app-layout>
>>>>>>> 5a2b331a6f4bcfdabc2ab22b623771e0ba942b89
