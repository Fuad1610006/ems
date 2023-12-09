@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                 <h1 class="mt-4">Attendance</h1>
                <div class="d-flex">
                    <p><b>Edit Attendance</b></p>
                    <p><b>Date: {{$attendance->date}}</b></p>
                </div>
            </div>

    <div class="card-body">
        <form action="{{ route('attendance.update', encryptor('encrypt',$attendance->id)) }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-12 col-lg-6">
                    <label for=""><strong>Employee</strong><i class="text-danger">*</i> </label>

                    <input type="text" id="" class="form-control" value="{{ old('employee_id',$attendance->employee?->name_en)}} name="employee_id" readonly>

                </div>
                <div class="col-12 col-lg-6">
                    <label><strong>Status</strong></label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if(old('status',$attendance->status)==1) selected @endif>Present</option>
                        <option value="0" @if(old('status',$attendance->status)==0) selected @endif>Absent</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
