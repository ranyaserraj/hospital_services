@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Hospitalization Report</h1>

    <form action="{{ route('hospitalization-reports.update', $hospitalizationReport->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Your form fields here -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

