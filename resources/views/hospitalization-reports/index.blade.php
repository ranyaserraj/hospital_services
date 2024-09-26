@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Patients</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('report_id'))
        <a href="{{ route('hospitalization-reports.generatePdf', ['id' => session('report_id')]) }}" class="btn btn-secondary">Télécharger PDF</a>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Ajouter Rapport</th>
                <th>Télécharger PDF</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->Nom_p }}</td>
                    <td>{{ $patient->Prenom_p }}</td>
                    <td>{{ $patient->Adresse_p }}</td>
                    <td>{{ $patient->Date_Naissance_p->format('d-m-Y') }}</td>
                    <td>{{ $patient->Sexe_p }}</td>
                    <td>{{ $patient->Telephone_p }}</td>
                    <td>{{ $patient->Email_p }}</td>
                    <td>
                        <a href="{{ route('hospitalization-reports.create', ['patient_id' => $patient->id_p]) }}" class="btn btn-primary">Ajouter Rapport</a>
                    </td>
                    <td>
                        <a href="{{ route('hospitalization-reports.generatePdf', ['id' => $patient->id_p]) }}" class="btn btn-secondary">Télécharger PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
