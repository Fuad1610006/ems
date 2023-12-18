@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">
		Payslip
		<div class="btn-group btn-group-sm float-end">
			<button class="btn btn-white" onClick="print_page()"><i class="fa fa-print fa-lg"></i> Print</button>
		</div>
	</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pay Slip print</li>
    </ol>
			

	<div class="row" id="pay_print">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h4 class="payslip-title">Payslip for the month of </h4>
					<div class="row">
						<div class="col-6 m-b-20">
							<img src="assets/img/logo2.png" style="width:80px" class="inv-logo" alt="">
							<ul class="list-unstyled mb-0">
								<li>Dreamguy's Technologies</li>
								<li>3864 Quiet Valley Lane,</li>
								<li>Sherman Oaks, CA, 91403</li>
							</ul>
						</div>
						<div class="col-6 m-b-20">
							<div class="invoice-details">
								<h3 class="text-uppercase">Payslip #</h3>
								<ul class="list-unstyled">
									<li>Salary Month: <span> </span></li>
								</ul>
							</div>
							<ul class="list-unstyled">
								<li><h5 class="mb-0"><strong>Name</strong></h5></li>
								<li><span>designation</span></li>
								<li>Contact: </li>
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Earnings</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Basic Salary</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>House Rent Allowance</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Medical Allowance</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Bonus</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Total Earnings:</strong> <span class="float-right"><strong> </strong></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Deductions</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Provident Fund</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Tax</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Leave deduction</strong> <span class="float-right"> </span></td>
										</tr>
										<tr>
											<td><strong>Total Deductions:</strong> <span class="float-right"><strong> </strong></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12">
							<div>
								<h4 class="m-b-10"></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Net Salary</strong></td>
											<td><strong class="text-end"> </strong> </td>
										</tr>
										<tr>
											<td><strong>(In Word): 
												</strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

       
@endsection
