@extends('admin.layouts.master')
@section('css')
@endsection
@section('title' , 'Create An Invoice')
@section('page-header')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="my-auto">
			<div class="d-flex">
				<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Create</span>
			</div>
		</div>
		<div class="d-flex my-xl-auto right-content">
			<div class="pr-1 mb-3 mb-xl-0">
				<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
			</div>
			<div class="pr-1 mb-3 mb-xl-0">
				<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
			</div>
			<div class="pr-1 mb-3 mb-xl-0">
				<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
			</div>
			<div class="mb-3 mb-xl-0">
				<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary">14 Aug 2019</button>
					<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
						<a class="dropdown-item" href="#">2015</a>
						<a class="dropdown-item" href="#">2016</a>
						<a class="dropdown-item" href="#">2017</a>
						<a class="dropdown-item" href="#">2018</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb -->

@endsection
@section('content')
	<!-- row -->
	<div class="table-responsive">
		<table class="table" id="invoice_details">
			<form action="">
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="supplier">supplier name</label>
							<select name="supplier" class="form-control supplier" id="supplier">
								<option></option>
								@foreach($supplier as $supplier)
									<option value="{{$supplier->id}}">{{$supplier->name}}</option>
								@endforeach
							</select>

						</div>
					</div>

					<thead>
					<tr>
						<th></th>
						<th>رقم الفاتورة</th>
						<th>الخامة</th>
						<th>سعر المتر</th>
						<th>الكمية</th>
						<th>السعر الجزئي</th>
					</tr>
					</thead>
					<tbody id="bdy">
					<tr class="cloning_row" id="0">

						<td><button type="button" class="btn btn-danger btn-sm d-none"><i class="fa fa-minus"></i> </button>
						</td>
					<td><input type="text" name="product_name[]"
										class="form-control product_name" id="product_name"></td>
					<td>
						<select name="material[]" class="form-control material" id="material">
							<option ></option>
							<option>material 1</option>
							<option>material 2</option>
							<option>material 3</option>
							</select>
						</td>
					<td><input type="number" name="unit_price[]"
										class="form-control unit_price" id="unit_price"></td>
					<td><input type="number" step="0.1" name="quantity[]"
										 class="form-control quantity" id="quantity"></td>
					<td><input type="number" step="0.1" name="partial_price[]"
										 class="form-control partial_price" id="partial_price" readonly value="0"></td>
					<tr>

					</tbody>
					<tfoot>
					<tr>
						<td colspan="5">
							<button type="button" class="btn btn-primary btn-add" id="btn-add">أضافة جدبد</button>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="2">sub_total</td>
						<td colspan="1"><input type="number" name="sub_total" id="sub_total" class="sub_total form-control" readonly></td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="2">discount</td>
						<td>
							<div class="input-group mb-3">
								<select name="discount_type" class="form-control discount_type" id="discount_type">
									<option value="fixed">SD</option>
									<option value="percentage">percentage</option>
								</select>
								<div class="input-group-append">
									<input type="number" step="0.1" class="discount_value" id="discount_value" name="discount_value">
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="2">vat_total</td>
						<td colspan="1"><input type="number" name="vat_total" id="vat_total" class="vat_total form-control" readonly></td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td colspan="2">total</td>
						<td colspan="1"><input type="number" name="total" id="total" class="total form-control" readonly></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Save</button></td>
					</tr>
					</tfoot>


		</table>
	</div>

	</div>
	</form>

@endsection

