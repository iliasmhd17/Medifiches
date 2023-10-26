<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Fiche santé individuelle</title>
    <meta name="author" content="sbz">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        h1 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 16pt;
        }

        .s1 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        h2 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        h3 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        p {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
            margin: 0pt;
        }

        .s2 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        body {
            margin-right: 1cm;
        }
    </style>
</head>

<body>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="text-indent: 0pt;text-align: left;"><span></span></p>
    <table border="0" cellspacing="0" cellpadding="0">
    </table>
    <p></p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="text-indent: 0pt;text-align: left;"></p>
    <h1 style="padding-top: 13pt;padding-left: 115pt;text-indent: 0pt;text-align: justify;">Fiche santé individuelle</h1>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Cette fiche a pour objectif d’être au plus près de votre enfant/de vous-même en cas de nécessité. Elle sera un appui pour les animateurs ou le personnel soignant en cas de besoin. Il est essentiel que les renseignements que vous fournissez soient complets, corrects et à jour au moment des activités concernées.</h2>
    <h2 style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">N’hésitez pas à ajouter des informations écrites ou orales auprès des animateurs si cela vous semble utile.</h2>
    <p style="padding-left: 38pt;text-indent: 0pt;text-align: left;"></p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <h3 style="padding-top: 4pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Identité du participant</h3>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;line-height: 150%;text-align: left;">Nom : {{ $data->last_name }} Prénom : {{ $data->first_name }} Né(e) le {{ $data->birth_date }}</p>
    <p style="padding-left: 44pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Adresse : {{ $data->street }} {{ $data->no }}</p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Localité : {{ $data->city }} CP : tél. / GSM : {{ $data->phone_number }} p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Pays : {{ $data->country }} E-mail : {{ $data->mailbox }}p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <h3 style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Personnes à contacter en cas d’urgence</h3>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Nom – Adresse : {{ $data->parent_1 }}</p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Lien de parenté : {{ $data->parental_link }}tél. / GSM : {{ $data->phone_number }}</p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">E-mail : {{ $data->email }} </p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Nom – Adresse : {{ $data->parent_2 }}</p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Lien de parenté : {{ $data->parental_link }}tél. / GSM : {{ $data->phone_number }}</p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">E-mail : {{ $data->email }} </p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <h3 style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Médecin traitant</h3>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Nom : {{ $data->medecins }}</p>
    <p style="padding-top: 5pt;padding-left: 47pt;text-indent: 0pt;text-align: left;"> tél. / GSM : {{ $data->number_phone_medecins }} </p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <h3 style="padding-top: 8pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Informations confidentielles concernant la santé du participant</h3>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Le participant peut-il prendre part aux activités proposées ? (sport, excursions, jeux, natation…)</p>
    <p style="padding-top: 5pt;padding-left: 47pt;text-indent: 0pt;text-align: left"> </p> {{ $data->can_participate }}
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="padding-left: 44pt;text-indent: 0pt;line-height: 150%;text-align: justify;">Y a-t-il des données médicales spécifiques importantes à connaître pour le bon déroulement de l’activité/ du camp ? (ex. : problèmes cardiaques, épilepsie, asthme, diabète, mal des transports, rhumatisme, somnambulisme, affections cutanées, handicap moteur ou mental…) Indiquez la fréquence, la gravité et les actions à mettre en œuvre pour les éviter et/ou y réagir.</p>
    <p style="padding-left: 47pt;text-indent: 0pt;line-height: 10pt;text-align: left"> </p> {{ $data->additionnal_infos }}
    <p style="padding-top: 5pt;padding-left: 47pt;text-indent: 0pt;text-align: left"> </p>
    <p style="padding-top: 5pt;padding-left: 47pt;text-indent: 0pt;text-align: left"> </p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Le participant est-il en ordre de vaccination contre le tétanos ? Oui - Non</p>
    $data-> {{ $data->email }}
    <p style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Le participant est-il allergique à certaines substances, aliments ou médicaments ? Oui - Non</p>
    <p style="text-indent: 0pt;text-align: left;"><br></p>
    <p style="padding-left: 44pt;text-indent: 0pt;text-align: left;">Si oui, lesquels ?</p> {{ $data->allergies }}
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left"> </p>
    <p style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;text-align: left"> </p>
    <p style="text-indent: 0pt;text-align: left"><br></p>
    <p style="text-indent: 0pt;text-align: left"><br></p>
    <p style="padding-left: 44pt;text-indent: 0pt;line-height: 150%;text-align: left;">Le participant doit-il prendre des médicaments ? Si oui lesquels : En quelle quantité ?</p>{{ $data->quantity_medecins }}
    <p style="padding-left: 44pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Quand ?</p>{{ $data->quantity_medecins }}
    <p style="text-indent: 0pt;text-align: left"><br></p>
</body>

</html>