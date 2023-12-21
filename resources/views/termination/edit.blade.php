@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Termination</h2>

        <form action="{{ route('termination.update', encryptor('encrypt',$termination->id)) }}" method="POST">
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
            {{-- <div class="form-group col-md-8">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div> --}}
            <div class="form-group col-md-8">
                <label for="reason">Reason</label>
                <textarea class="form-control"  id="reason" name="reason">
                </textarea>
            </div>
             <div class="form-group col-md-8">
                <label for="notice_date">Notice Date</label>
                <input type="date" class="form-control" id="notice_date" name="notice_date" required>
            </div>
             <div class="form-group col-md-8">
                <label for="termination_date">Termination Date</label>
                <input type="date" class="form-control" id="termination_date" name="termination_date" required>
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
