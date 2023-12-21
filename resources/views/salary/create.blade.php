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
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                          <label for="finishdate">Year</label>
                          <select name="s_year" class="form-control" id="s_year">
                              <option value="">Select Year</option>
                              @for($i=2023; $i<=date('Y')+1; $i++)
                                  <option value="{{$i}}">{{$i}}</option>
                              @endfor
                          </select>
                      </div>
                  </div>

                  <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                          <label for="startdate">Month</label>
                          <select name="s_month" class="form-control" id="s_month">
                              <option value="">Select Month</option>                                        
                              @for($i=1; $i<=12; $i++)
                                  <option value="{{date('m', strtotime('2020-'.$i.'-01'))}}">{{date('F', strtotime('2020-'.$i.'-01'))}}</option>
                              @endfor
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                          <label for="startdate">Department</label>
                          <select name="department_id" class="form-control" id="department_id">
                              <option value="">Select Department</option>                                        
                              @foreach ($department as $dpt)
                                <option value="{{$dpt->id}}">{{$dpt->department}}</option>
                              @endforeach()
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                          <label for="startdate">Bonus</label>
                          <input type="radio" name="bonus" value="0"> No 
                          <input type="radio" name="bonus" value="1"> yes
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">
                          <button type="button" class="btn btn-primary" onclick="getload()">Get List</button>
                      </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="pay_date">Pay Date</label>
                    <input type="date" class="form-control" id="pay_date" name="pay_date" required>
                  </div>

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
                            <th scope="col">{{__('Salary')}}</th>
                      </tr>
                    </thead>
                    <tbody id="empsal">
                            
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

@push('scripts')
    <script>
        function getload(){
            let department_id=$('#department_id').val();
            let s_year=$('#s_year').val();
            let s_month=$('#s_month').val();
            let bonus=$('input[name="bonus"]:checked').val();
            $.ajax({
              autoFocus: true,
              url: "{{route('get_salary')}}",
              method: 'GET',
              dataType: 'json',
              data: { department_id: department_id,s_year:s_year,s_month:s_month,bonus:bonus },
              success: function(res) {
                console.log(res);
                  $('#empsal').html(res);
              },
              error: function(e) {
                  console.log(e);
              }
          });
        }
    </script>
@endpush
