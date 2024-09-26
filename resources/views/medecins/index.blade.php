@extends('layouts.appChef')

@section('content')
    <div class="container">
        <h1 class="mb-4">Liste des Médecins</h1>

        <!-- Barre de recherche avec filtres individuels -->
        <form action="{{ route('medecins.index') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-3 mb-2">
                    <input type="text" name="id_m" class="form-control" placeholder="ID" value="{{ request('id_m') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="Nom_m" class="form-control" placeholder="Nom" value="{{ request('Nom_m') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="Prenom_m" class="form-control" placeholder="Prénom" value="{{ request('Prenom_m') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="specialite" class="form-control" placeholder="Spécialité" value="{{ request('specialite') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="CIN_m" class="form-control" placeholder="CIN" value="{{ request('CIN_m') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="Email_m" class="form-control" placeholder="Email" value="{{ request('Email_m') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="Telephone" class="form-control" placeholder="Téléphone" value="{{ request('Telephone') }}">
                </div>
                <div class="col-md-12 mb-2">
                    <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
                </div>
            </div>
        </form>

        <a href="{{ route('medecins.create') }}" class="btn btn-success mb-3">Ajouter un Médecin</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Spécialité</th>
                        <th>CIN</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th width="400px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medecins as $medecin)
                    <tr>
                        <td>{{ $medecin->id_m }}</td>
                        <td>{{ $medecin->Nom_m }}</td>
                        <td>{{ $medecin->Prenom_m }}</td>
                        <td>{{ $medecin->specialite }}</td>
                        <td>{{ $medecin->CIN_m }}</td>
                        <td>{{ $medecin->Email_m }}</td>
                        <td>{{ $medecin->Telephone }}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-info" href="{{ route('medecins.show', $medecin->id_m) }}">Voir</a>
                                <a href="{{ route('medecins.edit', $medecin->id_m) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('medecins.destroy', $medecin->id_m) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce médecin ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

