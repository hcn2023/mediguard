@extends('layouts.app')

@section('title', 'Dosage List')

@section('content')
    <h2 class="text-center mt-4 mb-4 text-success">Dosage List</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Medication Name</th>
                <th>Dosage</th>
                <th>Schedule</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosages as $dosage)
                <tr>
                    <td>{{ $dosage->id }}</td>
                    <td>{{ $dosage->medication_name }}</td>
                    <td>{{ $dosage->dosage }}</td>
                    <td>{{ $dosage->schedule }}</td>
                    <td>{{ $dosage->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
