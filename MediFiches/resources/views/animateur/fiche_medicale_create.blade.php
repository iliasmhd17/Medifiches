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
            <label for="birth_date">Date de naissance</label>
            <input type="date" id="birth_date" class="form-control w-25" placeholder="Entrez la date de naissance...">
            <div class="input-group-text">
                <label for="can_participer">Peut participer</label>
                <input type="checkbox" id="can_participer">
            </div>
            <label for="Email">Addresse email</label>
            <input type="email" id="Email" class="form-control w-25" placeholder="Entrez un email...">
        </div>
  </form>
  </div>
</div>
@endsection