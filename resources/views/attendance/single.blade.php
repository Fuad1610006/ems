@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Attendance</h1>
         <h4>Date: {{$attendance->date}}</h4> 
               
     <div class="card p-4">
        <form action="{{ route('attendance.update', encryptor('encrypt',$attendance->id)) }}" method="PUT">
            @csrf
            <div class="row g-3">
                <div class="col-md-6 my-2">
                    <label for=""><strong>Employee</strong><i class="text-danger">*</i> </label>
                    <input type="text" id="" class="form-control" value="{{ old('employee_id',$attendance->employee?->name_en)}}" readonly>
                </div>

                <div class="col-md-6 my-2">
                    <label><strong>Status</strong></label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if(old('status',$attendance->status)==1) selected @endif>Present</option>
                        <option value="0" @if(old('status',$attendance->status)==0) selected @endif>Absent</option>
                    </select>
                </div> 
                <div class="col-md-6 mt-0">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        </form>
       </div>
    </div>
@endsection
