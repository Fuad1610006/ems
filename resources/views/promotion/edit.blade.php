@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Promotion</h2>

        <form action="{{ route('promotion.update', encryptor('encrypt',$promotion->id)) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group col-md-8">
                <label for="department_id">Department:</label>
                <select class="form-control" id="department_id" name="department_id" onchange="filterEmployees()" required>
                    <option value="" disabled selected>Select Department</option>
                    @foreach ($department as $d)
                        <option value="{{ $d->id }}">{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="designation_id">Designation:</label>
                <select class="form-control" id="designation_id" name="designation_id" onchange="filterEmployees()" required>
                    <option value="" disabled selected>Select Designation</option>
                    @foreach ($designation as $d)
                        <option value="{{ $d->id }}">{{ $d->designation }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="employee_id">Employee:</label>
                <select class="form-control" id="employee_id" name="employee_id" required>
                    <option value="" disabled selected>Select Employee</option>
                    @foreach ($employee as $e)
                        <option class="employee-option emp-dept-{{ $e->department_id }} emp-desig-{{ $e->designation_id }}" value="{{ $e->id }}">{{ $e->name_en }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="to_department">Promoted To Department:</label>
                <select class="form-control" id="to_department" name="to_department" required>
                    <option value="" disabled selected>Select Department</option>
                    @foreach ($department as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->department }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="to_designation">Promoted To Designation:</label>
                <select class="form-control" id="to_designation" name="to_designation" required>
                    <option value="" disabled selected>Select Designation</option>
                    @foreach ($designation as $desig)
                        <option value="{{ $desig->id }}">{{ $desig->designation }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group col-md-8">
                <label for="notice_date">Notice Date</label>
                <input type="date" class="form-control" id="notice_date" name="notice_date" required>
            </div>
             <div class="form-group col-md-8">
                <label for="promotion_date">promotion Date</label>
                <input type="date" class="form-control" id="promotion_date" name="promotion_date" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function filterEmployees() {
            var selectedDept = $('#department_id').val();
            var selectedDesig = $('#designation_id').val();

            $('.employee-option').hide();
            $('.emp-dept-' + selectedDept + '.emp-desig-' + selectedDesig).show();
        }
    </script>
@endpush