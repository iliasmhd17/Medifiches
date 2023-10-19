<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mon Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/images/back.jpg');
            background-size: cover;
        }


        .card {
            background-image: url('/images/back.jpg');
            border: 1px solid #1f1f1f; 
            border-radius: 5px;
            color: #fff; 
        }

        .card-body {
            padding: 20px;
        }
        @media print {
        .card-header {
            background-color: #007BFF; 
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Contenu du PDF</div>
                    <div class="card-body">
                        <p><strong>Nom:</strong> {{ $data->nom }}</p>
                        <p><strong>Prénom:</strong> {{ $data->prénom }}</p>
                        <p><strong>Médicaments:</strong> {{ $data->medicaments }}</p>
                        <p><strong>Allergies:</strong> {{ $data->allergies }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
    <div class="col-md-8 mx-auto text-center">
        <form method="POST" action="{{ route('generate-pdf') }}">
            @csrf
            <input type="hidden" name="person_id" value="{{ $data->id }}">
            <button type="submit" class="btn btn-primary">Générer le PDF</button>
        </form>
    </div>
    </div>
    </div>
</body>
</html>
