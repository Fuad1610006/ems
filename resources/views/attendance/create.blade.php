@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Attendance</h2>

        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Attendance Date</label>
                            <input type="date"  value="<?= date('Y-m-d') ?>"  name="date" id="" class="form-control">
                        </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Employee</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($employee as $t)
                                    <tr>
                                        <td>{{ $t->name_en }}
                                        <input type="hidden" name="attendance[{{ $t->id }}][employee_id]" value="{{ $t->id }}">
                                        <input type="hidden" name="employee_id" value="{{ $t->id }}">
                                         <input type="hidden" name="attendance[{{ $t->id }}][date]" value="{{ old('date', date('Y-m-d')) }}">
                                        </td>
                                        <td>
                                            <select name="attendance[{{ $t->id }}][status]" class="form-control">
                                                <option value="1">Present</option>
                                                <option value="0">Absent</option>
                                            </select>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
