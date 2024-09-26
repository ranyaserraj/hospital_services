@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills bg-primary text-white rounded p-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link text-white active bg-secondary" id="v-pills-patients-tab" data-toggle="pill" href="#v-pills-patients" role="tab" aria-controls="v-pills-patients" aria-selected="true">Patients</a>
                <a class="nav-link text-white" id="v-pills-rendezvous-tab" href="{{ route('appointments.index') }}">Rendez-vous</a>
                <a class="nav-link text-white" id="v-pills-factures-tab" href="{{ route('factures.index') }}">Factures</a>
                <a class="nav-link text-white" id="v-pills-rapports-tab" href="{{ route('hospitalization-reports.index') }}">Rapports</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-patients" role="tabpanel" aria-labelledby="v-pills-patients-tab">
                    <h2 class="page-title">Liste des Patients</h2>

                    <!-- Formulaire de recherche -->
                    <form action="{{ route('patients.index') }}" method="GET" class="search-form">
                        <div class="form-row">
                            @foreach (['nom' => 'Nom', 'prenom' => 'Prénom', 'adresse' => 'Adresse', 'date_naissance' => 'Date de Naissance', 'telephone' => 'Téléphone', 'email' => 'Email'] as $field => $label)
                                <div class="form-group col-md-3">
                                    <label for="{{ $field }}">{{ $label }}</label>
                                    <input type="{{ $field === 'date_naissance' ? 'date' : 'text' }}" id="{{ $field }}" name="{{ $field }}" class="form-control" value="{{ request()->input($field) }}">
                                </div>
                            @endforeach
                            <div class="form-group col-md-2">
                                <label for="sexe">Sexe</label>
                                <select id="sexe" name="sexe" class="form-control">
                                    <option value="">Tous</option>
                                    <option value="M" {{ request()->input('sexe') == 'M' ? 'selected' : '' }}>Homme</option>
                                    <option value="F" {{ request()->input('sexe') == 'F' ? 'selected' : '' }}>Femme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Rechercher</button>
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Ajouter un Patient</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    @foreach (['ID', 'Nom', 'Prénom', 'Adresse', 'Date de Naissance', 'Sexe', 'Téléphone', 'Email', 'Age', 'Situation Familiale', 'ID Assurance', 'Actions'] as $header)
                                        <th>{{ $header }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->id_p }}</td>
                                        <td>{{ $patient->Nom_p }}</td>
                                        <td>{{ $patient->Prenom_p }}</td>
                                        <td>{{ $patient->Adresse_p }}</td>
                                        <td>{{ $patient->Date_Naissance_p }}</td>
                                        <td>{{ $patient->Sexe_p }}</td>
                                        <td>{{ $patient->Telephone_p }}</td>
                                        <td>{{ $patient->Email_p }}</td>
                                        <td>
                                            @php
                                                $birthDate = \Carbon\Carbon::parse($patient->Date_Naissance_p);
                                                $age = $birthDate->age;
                                            @endphp
                                            {{ $age }}
                                        </td>
                                        <td>{{ $patient->Situation_Familiale }}</td>
                                        <td>{{ $patient->id_imm_assurance }}</td>
                                        <td>
                                            <a href="{{ route('patients.show', $patient->id_p) }}" class="btn btn-info btn-sm">Voir</a>
                                            <a href="{{ route('patients.edit', $patient->id_p) }}" class="btn btn-warning btn-sm">Modifier</a>
                                            <form action="{{ route('patients.destroy', $patient->id_p) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Autres onglets (Rendez-vous, Factures, Rapports) à compléter -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .container {
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    .page-title {
        color: #2c3e50;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .search-form {
        background-color: #e9ecef; /* Couleur de fond légère pour le formulaire */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .search-form .form-control {
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
    }

    .search-form .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #ffffff;
        font-weight: 600;
        border-radius: 4px;
        padding: 10px 15px;
    }

    .search-form .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .table-responsive {
        margin-top: 20px;
    }

    .table {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .thead-dark {
        background-color: #343a40;
        color: #ffffff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2; /* Couleur d'arrière-plan pour les lignes impaires du tableau */
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: #ffffff;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #212529;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #ffffff;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
@endsection
