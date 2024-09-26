@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/rapport.css') }}">

<div class="container">
    <h1>Create Hospitalization Report for {{ $patient->Nom_p }} {{ $patient->Prenom_p }}</h1>
    <form action="{{ route('hospitalization-reports.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ $patient->id_p }}">
        
        <div class="form-container">
            <div class="form-column">
                <div>
                    <label for="hospitalization_start">Hospitalization Start Date:</label>
                    <input type="date" id="hospitalization_start" name="hospitalization_start" required>
                </div>
                <div>
                    <label for="hospitalization_end">Hospitalization End Date:</label>
                    <input type="date" id="hospitalization_end" name="hospitalization_end" required>
                </div>
                <div>
                    <label for="reason">Reason for Hospitalization:</label>
                    <textarea id="reason" name="reason" required></textarea>
                </div>
                <div>
                    <label for="history">Medical History:</label>
                    <textarea id="history" name="history" required></textarea>
                </div>
                <div>
                    <label for="operation_date">Operation Date:</label>
                    <input type="date" id="operation_date" name="operation_date">
                </div>
                <div>
                    <label for="intervention_title">Intervention Title:</label>
                    <input type="text" id="intervention_title" name="intervention_title">
                </div>
                <div>
                    <label for="progress">Progress:</label>
                    <textarea id="progress" name="progress"></textarea>
                </div>
                <div>
                    <label for="discharge_decision">Discharge Decision:</label>
                    <textarea id="discharge_decision" name="discharge_decision" required></textarea>
                </div>
                <div>
                    <label for="discharge_date">Discharge Date:</label>
                    <input type="date" id="discharge_date" name="discharge_date" required>
                </div>
                <div>
                    <label for="rehabilitation">Rehabilitation:</label>
                    <textarea id="rehabilitation" name="rehabilitation"></textarea>
                </div>
                <div>
                    <label for="treatment">Treatment:</label>
                    <textarea id="treatment" name="treatment"></textarea>
                </div>
                <div>
                    <label for="follow_up_date">Follow-up Date:</label>
                    <input type="date" id="follow_up_date" name="follow_up_date">
                </div>
            </div>
        </div>
        
        <div class="form-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
