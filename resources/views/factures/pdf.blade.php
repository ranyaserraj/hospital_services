<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Facture</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff; /* Couleur bleue pour le titre */
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .table-container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        td {
            background-color: #fff;
        }
        .total {
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Facture</h1>
        <p><strong>Patient :</strong> {{ $appo->nom_patient_ }}</p>
        <p><strong>Doctor :</strong> {{ $appo->nom_medecin_ }}</p>
        <p><strong>Acte :</strong> {{ $appo->nom_acte_ }}</p>
        <p><strong>Spécialité :</strong> Médecine de Cardiologie</p>
        <p class="total"><strong>Prix de l'Acte :</strong> {{ $total }} DH</p>
        <p class="note">
            Cette facture concerne les consultations et les actes effectués en médecine de cardiologie. 
            <br><br>
            <strong>Délai de Paiement :</strong> La facture doit être réglée dans un délai de 30 jours à compter de la date d'émission.
            <br><br>
            <strong>Méthodes de Paiement :</strong> Vous pouvez régler cette facture par virement bancaire, chèque ou espèces. 
            <br><br>
            Pour toute question ou préoccupation concernant cette facture, veuillez nous contacter au numéro suivant : 23456789987.
        </p>
    </div>
</body>
</html>
