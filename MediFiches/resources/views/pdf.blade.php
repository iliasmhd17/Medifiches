<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche santé individuelle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            padding: 20px;
            /* background: #f4f4f4; */
            color: #333;
        }
        .container {
            max-width: 750px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #444;
        }
        h2 {
            border-bottom: 2px solid #444;
            padding-bottom: 3px;
            margin-top: 20px;
        }
        .info-section {
            background: #e7e7e7;
            padding: 15px;
            margin-bottom: 10px;
            border-left: 4px solid #007bff;
        }
        .info-section p {
            margin: 5px 0;
        }
        .info-section h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Fiche santé individuelle</h1>
    <p>Cette fiche contient des informations importantes concernant la santé du participant. Elle doit être complète et mise à jour pour garantir une prise en charge adaptée en cas d'urgence.</p>

    <!-- Section Identité -->
    <div class="info-section">
        <h2>Identité du participant</h2>
        <p>Nom : {{ $info->last_name }}</p>
        <p>Prénom : {{ $info->first_name }}</p>
        <p>Date de naissance : {{ $data->birth_date }}</p>
        <p>Adresse : {{ $data->street }} {{ $data->no }}, {{ $data->postcode }} {{ $data->city }}</p>
        <p>Téléphone : 0485644461</p>
        <p>Email : {{ $data->mailbox }}</p>
    </div>

    <!-- Section Contact d'urgence -->
    <div class="info-section">
        <h2>Contacts en cas d'urgence</h2>
        <p>Parent 1: {{ $data->parent_1_name }} - {{ $data->parent_1_phone }} - {{ $data->parent_1_email }}</p>
        <p>Parent 2: {{ $data->parent_2_name }} - {{ $data->parent_2_phone }} - {{ $data->parent_2_email }}</p>
    </div>

    <!-- Section Médecin traitant -->
    <div class="info-section">
        <h2>Médecin traitant</h2>
        <p>Nom : {{ $data->medecins }}</p>
    </div>

    <!-- Section Informations de santé -->
    <div class="info-section">
        <h2>Informations sur la santé</h2>
        <p>Des détails spécifiques : {{ $data->additional_infos}}</p>
        <p>L'enfant peut participer à toute les activités? {{ $data->can_participate ? 'Oui' : 'Non' }} </p>
        <p>L'enfant est vacciné contre le tétanos ? {{ $data->tetanons_protected ? 'Non' : 'Oui' }}</p>
    </div>

    <!-- Section Allergies -->
    <div class="info-section">
        <h2>Allergies et réactions</h2>
        <p>Allergies connues : {{ $data->allergies}}</p>
        <p>Conséquences de/des allergie(s) : {{ $data->allergies_consequences }}</p>
    </div>

    <!-- Section Médicaments -->
    <div class="info-section">
        <h2>Médicaments</h2>
        <p>Prise régulière de médicaments : {{$data->quantity_medecine}}</p>
    </div>
</div>

</body>
</html>
