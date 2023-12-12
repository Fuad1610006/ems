@extends('layouts.app')  

@section('content')
    <div class="container">
        <h2>Employee Information</h2>
        <hr>

        <div class="row">
           
            <div class="col-md-6">
                
                <img class="rounded" src="{{asset('public/uploads/employees/'.$employee->image)}}" alt="Profile" width="225" height="225"> <br>
               <div class="pt-2">
                <strong>Name:</strong> {{ $employee->name_en }} <br>
                <strong>Gender:</strong> {{ $employee->gender }} <br>
                <strong>Employee ID:</strong> {{ $employee->employee_id }} <br>
                <strong>NID ID:</strong> {{ $employee->nid_no }} <br>
                <strong>Department:</strong> {{ $employee->department?->department }} <br>
                <strong>Designation:</strong> {{ $employee->designation?->designation }} <br>
                <strong>Shift:</strong> {{ $employee->shift?->shift }} <br>
                <strong>Email:</strong> {{ $employee->email }} <br>
                <strong>Present Address:</strong> {{ $employee->present_address }} <br>
                <strong>Permanent Address:</strong> {{ $employee->permanent_address }} <br>
                <strong>Date of Birth:</strong> {{ $employee->date_of_birth }} <br>
                <strong>Joining Date:</strong> {{ $employee->joining_date }} <br>
                <strong>Blood Group:</strong> {{ $employee->blood_group }} <br>
               </div>

            </div>
            
        </div>

        <hr>

       

        <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to Employee List</a>
        <a href="{{ route('promotion.index') }}" class="btn btn-primary">Promote Employee</a>
        <a href="{{ route('termination.index') }}" class="btn btn-primary">Terminate Employee</a>
    </div>
@endsection