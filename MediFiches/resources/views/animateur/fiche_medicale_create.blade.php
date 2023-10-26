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
  <form action="" method="post">
        <div class="form-group">
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
                <input type="text" class="form-control w-25" id="consequence" placeholder="Entrez les consequences...">
            </div>
        </div>
  </form>
  </div>
</div>
@endsection