@extends('template')
@section('title', 'détail')
@section('content')
    @foreach ($data as $row)
        <div class="card text-center">
            <div class="card-header">
                Détails du dossier numéro: {{ $row->medical_record }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Numéro national:{{ $row->national_number }}</h5>
                <h5 class="card-title">Médecin: {{ $row->medecins }}</h5>
                <h5 class="card-title">Participation:
                    @if ($row->can_participate)
                        Oui
                    @else
                        Non
                    @endif
                </h5>

                <h5 class="card-title">Allergie: {{ $row->allergies }}</h5>
                <h5 class="card-title">Consequences: {{ $row->allergies_consequences }}</h5>
                <h5 class="card-title">Protection tetanos:
                    @if ($row->tetanos_protected)
                        Oui
                    @else
                        Non
                    @endif
                </h5>
                <h5 class="card-title">Consequences: {{ $row->allergies_consequences }}</h5>
                <h5 class="card-title">Quantite_medecine: {{ $row->quantity_medecine }}</h5>
                <h5 class="card-title">Temp_medecine: {{ $row->time_medecine }}</h5>
                <h5 class="card-title">Date De Naissance: {{ $row->birth_date }}</h5>
                <h5 class="card-title">Note Extra: {{ $row->additional_infos }}</h5>
                <h5 class="card-title">Rue: {{ $row->street }}</h5>
                <h5 class="card-title">numéro de maison: {{ $row->no }}</h5>
                <h5 class="card-title">Boite à lettre: {{ $row->mailbox }}</h5>
                <h5 class="card-title">Ville: {{ $row->city }}</h5>
                <h5 class="card-title">Pays: {{ $row->country }}</h5>

                <a href="/fiches/" class="btn btn-primary card-link">Retour</a>
            </div>
        </div>
    @endforeach
@endsection
