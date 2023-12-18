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
                <strong>Employee ID:</strong> {{ $employee->employee_id }} <br>
                <strong>Designation:</strong> {{ $employee->designation?->designation }} <br>
                <strong>Joining Date:</strong> {{ $employee->joining_date }} <br>
                <strong>Pay Date:</strong> {{ $employee->pay_date }} <br>
                <strong>Basic Salary:</strong> {{ $employee->basic_salary }} <br>
                <strong>House Rent:</strong> {{ $employee->house_rent }} <br>
                <strong>Medical Allowance:</strong> {{ $employee->medical_allowance }} <br>
                <strong>Travel Allowance:</strong> {{ $employee->travel_allowance }} <br>
                <strong>Dearness Allowance:</strong> {{ $employee->dearness_allowance }} <br>
                <strong>Overtime Amount:</strong> {{ $employee->overtime_amount }} <br>
                <strong>Leave Deduction:</strong> {{ $employee->leave_deduction }} <br>
                <strong>Provident Fund:</strong> {{ $employee->provident_fund }} <br>
                <strong>Tax:</strong> {{ $employee->tax }} <br>
                <strong>Bonus:</strong> {{ $employee->bonus }} <br>
                <strong>Total:</strong> {{ $employee->total }} <br>
            </div>

          </div>
            
        </div>

        <hr>

       

        <a href="{{ route('employee.index') }}" class="btn btn-primary">Back to List</a>
        <a href="{{ route('promotion.index') }}" class="btn btn-primary">Promote Employee</a>
        <a href="{{ route('termination.index') }}" class="btn btn-primary">Terminate Employee</a>
    </div>
@endsection