@extends('layouts.app')

@section('title', 'Add Dosage')

@section('content')
<div class="container mt-5">
    <h2 class="text-success mb-4">Add Dosage</h2>
    <form action="{{ route('dosages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="medication_name" class="form-label">Medication Name:</label>
            <input type="text" name="medication_name" id="medication_name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="dosage" class="form-label">Dosage:</label>
            <input type="number" name="dosage" id="dosage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="schedule" class="form-label">Schedule:</label>
            <input type="text" name="schedule" id="schedule" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save Dosage</button>
    </form>
</div>
@endsection
