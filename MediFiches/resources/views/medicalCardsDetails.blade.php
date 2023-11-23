<x-app-layout>
    <div class="postition-relative">
        <div class="container mt-5 position-absolute bg-white" id="consult">
            <div class="d-flex justify-content-between align-items-center mb-3">
                @foreach ($data as $row)
                <br><br><br><br>
                <h3 class="pb-3">Fiche médicale <strong> {{ $row->last_name .' '. $row->first_name }}</strong></h3>
                <form method="POST" action="{{ route('generate-pdf') }}" class="ms-auto">

                    <input type="text" name="national_number" value="{{$row->national_number}}" hidden>
                    @csrf
                    <button type="submit" class="btn" style="background: none; border: none; display: flex; align-items: center;" title="Télécharger en PDF">
                        <img src="{{ asset('images/down.png') }}" alt="Générer PDF" style="height: 40px; margin-left: 5px;">
                    </button>
                </form>
            </div>
            @foreach ($children as $item)
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nom : </strong>{{$item->last_name }}</li>
                <li class="list-group-item"><strong>Prénom : </strong>{{$item->first_name }}</li>
            </ul>
            @endforeach

            <ul class="list-group list-group-flush">

                <li class="list-group-item"><strong>Numéro national : </strong>{{ $row->national_number }}</li>
                <li class="list-group-item"><strong>Médecin : </strong> {{ $row->doctor }}</li>
                <li class="list-group-item"><strong>Medicaments : </strong> {{ $row->medecins }}</li>
                <li class="list-group-item"><strong>Allergie :</strong> {{ $row->allergies }}</li>
                <li class="list-group-item"><strong>Date De Naissance :</strong> {{ $row->birth_date }}</li>
                <li class="list-group-item"><strong>Peut-il Participer ? :</strong> {{ $row->can_participate ? 'Oui' : 'Non' }}</li>
                <li class="list-group-item"><strong>Est-il vacciné contre le tétanos ? :</strong> {{ $row->tetanos_protected ? 'Oui' : 'Non' }}</li>
                <li class="list-group-item"><strong>Rue:</strong> {{ $row->street }}</li>
                <li class="list-group-item"><strong>numéro de maison:</strong> {{ $row->no }}</li>
                <li class="list-group-item"><strong>numéro de Boite Postale:</strong> {{ $row->mail_box }}</li>
                <li class="list-group-item"><strong>Ville:</strong> {{ $row->city }}</li>
                <li class="list-group-item"><strong>Code Postal:</strong> {{ $row->postal_code }}</li>
                <li class="list-group-item"><strong>Note Extra: </strong>{{ $row->additional_infos }}</li>
            </ul>
            @endforeach
        </div>
    </div>
</x-app-layout>