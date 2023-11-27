<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails de la fiche médicale') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mt-5 bg-white">
            <div class="d-flex justify-content-between align-items-center mb-3">
                @foreach ($data as $row)
                <h3 class="pb-3">Fiche médicale de <strong>{{ $row->last_name }} {{ $row->first_name }}</strong></h3>
                <form method="POST" action="{{ route('generate-pdf') }}" class="ml-auto">
                    <input type="text" name="national_number" value="{{ $row->national_number }}" hidden>
                    @csrf
                    <button type="submit" class="btn" style="background: none; border: none; display: flex; align-items: center;" title="Télécharger en PDF">
                        Télécharger
                        <img src="{{ asset('images/down.png') }}" alt="Générer PDF" style="height: 40px; margin-left: 5px;">
                    </button>
                </form>
                @endforeach
            </div>
            <ul class="list-group list-group-flush">
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
