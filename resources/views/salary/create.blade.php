@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <section class="section">
      <div class="row">
        <h2 class="my-0">Employee Salary</h2>
          <div class="card">
              <div class="card-body table-responsive">
                <form action="{{ route('salary.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group col-md-3">
                    <label for="pay_date">Pay Date</label>
                    <input type="date" class="form-control" id="pay_date" name="pay_date" required>
                </div>

                 <table class="table table-striped">
                    <thead>
                       <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Basic Salary')}}</th>
                            <th scope="col">{{__('House Rent')}}</th>
                            <th scope="col">{{__('Medical Allowance')}}</th>
                            <th scope="col">{{__('Travel Allowance')}}</th>
                            <th scope="col">{{__('Dearness Allowance')}}</th>
                            <th scope="col">{{__('Overtime Amount')}}</th>
                            <th scope="col">{{__('Bonus')}}</th>
                            <th scope="col">{{__('Tax')}}</th>
                            <th scope="col">{{__('Provident Fund')}}</th>
                            <th scope="col">{{__('Leave Deduction')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                            @forelse($salary as $e)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$e->name_en}}</td>
                                <td>{{$e->basic_salary}}</td>
                                <td>{{$e->house_rent}}</td>
                                <td>{{$e->medical_allowance}}</td>
                                <td>{{$e->travel_allowance}}</td>
                                <td>{{$e->dearness_allowance}}</td>
                                <td>{{$e->overtime_amount}}</td>
                                <td>{{$e->bonus}}</td>
                                <td>{{$e->tax}}</td>
                                <td>{{$e->provident_fund}}</td>
                                <td>{{$e->leave_deduction}}</td>
                                </tr>
                            @empty
                            <tr>
                                <th colspan="12" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                     </tbody>
                  </table>
                <button type="submit" class="btn btn-primary my-2">Save</button>
              </form>
            </div>
         </div>
    </div>
  </section>
</div>
@endsection
