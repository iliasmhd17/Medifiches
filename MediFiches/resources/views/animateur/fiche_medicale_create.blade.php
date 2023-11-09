@extends('template')
@section('title', " - Créer une Fiche Médicale")
@section('content')
<script type="text/javascript">
        $(document).ready(function() {
            let width = screen.width
            if (width <= 800) {
                $("#banner").attr("src", "{{ asset('images/medi-banner-vertical.png') }}");
            }
        });
</script>
<br><br>
<div class="postition-relative">
<img src="{{ asset('images/medi-banner.png') }}" id="banner" alt="Banner" class="img-fluid" style="width: 100%; height: auto;">
<div class="container mt-5 position-absolute bg-white" id="consult">
  <h3 class="pb-3">Créer Fiche Médicale</h3>
  <form action="{{route('create.record')}}" method="post">
        @csrf
        <div class="form-group">
        <div class="input-group-text m-2">
                <label for="national_number" class="m-2">Numéro national : </label>
                <input type="text" id="national_number" class="form-control w-25" placeholder="Entrez le numéro national...">
            </div>
            <div class="input-group-text m-2">
                <label for="last_name" class="m-2">Nom : </label>
                <input type="text" id="last_name" class="form-control w-25" placeholder="Entrez le nom de famille...">
            </div>
            <div class="input-group-text m-2">
                <label for="first_name" class="m-2">Prénom : </label>
                <input type="text" id="first_name" class="form-control w-25" placeholder="Entrez le prénom...">
            </div>
            <div class="input-group-text m-2">
                <label for="birth_date" class="m-2">Date de naissance : </label>
                <input type="date" id="birth_date" class="form-control w-25" placeholder="Entrez la date de naissance...">
            </div>
            <div class="input-group-text m-2">
                <label for="can_participer" class="m-2">Peut participer : </label>
                <input type="checkbox" class="form-check-input" id="can_participer">
            </div>
            <div class="input-group-text m-2">
                <label for="medical_record" class="m-2">Médecin traitant : </label>
                <input type="text" id="medical_record" class="form-control w-25" placeholder="Entrez le médecin...">
            </div>
            <div class="input-group-text m-2">
                <label for="tetanos" class="m-2">Vaccin du tétanos fait ?: </label>
                <input type="checkbox" class="form-check-input" id="tetanos">
            </div>
            <div class="input-group-text m-2">
                <label for="Email" class="m-2">Email : </label>
                <input type="email" id="Email" class="form-control w-25" placeholder="Entrez un email...">
            </div>
            <div class="input-group-text m-2">
                <label for="medic" class="m-2">Médicaments : </label>
                <input type="text" class="form-control w-25" id="medic" placeholder="Entrez le(s) médicament(s)...">
            </div>
            <div class="input-group-text m-2">
                <label for="qMedic" class="m-2">Quantité de médicaments : </label>
                <input type="text" class="form-control w-25" id="qMedic" placeholder="Entrez la / les quantité(s)...">
            </div>
            <div class="input-group-text m-2">
                <label for="fMedic" class="m-2">Indiquez la fréquence : </label>
                <input type="text" class="form-control w-25" id="fMedic" placeholder="Entrez la / les fréquence(s)...">
            </div>
            <div class="input-group-text m-2">
                <label for="allergies" class="m-2">Allergies : </label>
                <input type="text" class="form-control w-25" id="allergies" placeholder="Entrez les allergies...">
            </div>
            <div class="input-group-text m-2">
                <label for="consequences" class="m-2">Indiquez les conséquences : </label>
                <input type="text" class="form-control w-25" id="consequences" placeholder="Entrez les consequences...">
            </div>
            <div class="input-group-text m-2">
                <label for="street" class="m-2">Rue : </label>
                <input type="text" class="form-control w-25" id="street" placeholder="Entrez votre rue">
            </div>
            <div class="input-group-text m-2">
                <label for="no" class="m-2">Numéro : </label>
                <input type="text" class="form-control w-25" id="no" placeholder="Entrez votre numéro">
            </div>
            <div class="input-group-text m-2">
                <label for="mailbox" class="m-2">Boite : </label>
                <input type="text" class="form-control w-25" id="mailbox" placeholder="Entrez votre boite">
            </div>
            <div class="input-group-text m-2">
                <label for="contry" class="m-2">Pays : </label>
                <input type="text" class="form-control w-25" id="contry" placeholder="Entrez votre pays">
            </div>
            <div class="input-group-text m-2">
                <label for="city" class="m-2">Ville : </label>
                <input type="text" class="form-control w-25" id="city" placeholder="Entrez votre ville">
            </div>
        </div>
        <button class="btn btn-primary" href="/create-record" type="submit">Envoyer</button>
  </form>
  </div>
</div>
@endsection