@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hospitalization Report Details</h1>

    <div>
        <h3>Patient</h3>
        <p>{{ $hospitalizationReport->patient->Nom_p }} {{ $hospitalizationReport->patient->Prenom_p }}</p>
    </div>
    <div>
        <h3>Hospitalization Start</h3>
        <p>{{ $hospitalizationReport->hospitalization_start->format('d-m-Y') }}</p>
    </div>
    <div>
        <h3>Hospitalization End</h3>
        <p>{{ $hospitalizationReport->hospitalization_end->format('d-m-Y') }}</p>
    </div>
    <div>
        <h3>Reason for Hospitalization</h3>
        <p>{{ $hospitalizationReport->reason }}</p>
    </div>
    <div>
        <h3>Medical History</h3>
        <p>{{ $hospitalizationReport->history }}</p>
    </div>
    <div>
        <h3>Operation Date</h3>
        <p>{{ $hospitalizationReport->operation_date ? $hospitalizationReport->operation_date->format('d-m-Y') : 'N/A' }}</p>
    </div>
    <div>
        <h3>Intervention Title</h3>
        <p>{{ $hospitalizationReport->intervention_title }}</p>
    </div>
    <div>
        <h3>Progress</h3>
        <p>{{ $hospitalizationReport->progress }}</p>
    </div>
    <div>
        <h3>Discharge Decision</h3>
        <p>{{ $hospitalizationReport->discharge_decision }}</p>
    </div>
    <div>
        <h3>Discharge Date</h3>
        <p>{{ $hospitalizationReport->discharge_date->format('d-m-Y') }}</p>
    </div>
    <div>
        <h3>Rehabilitation Instructions</h3>
        <p>{{ $hospitalizationReport->rehabilitation }}</p>
    </div>
    <div>
        <h3>Treatment</h3>
        <p>{{ $hospitalizationReport->treatment }}</p>
    </div>
    <div>
        <h3>Follow-up Date</h3>
        <p>{{ $hospitalizationReport->follow_up_date ? $hospitalizationReport->follow_up_date->format('d-m-Y') : 'N/A' }}</p>
    </div>

    <a href="{{ route('hospitalization-reports.edit', $hospitalizationReport->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('hospitalization-reports.destroy', $hospitalizationReport->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
