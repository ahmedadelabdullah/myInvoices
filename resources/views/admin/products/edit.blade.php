@extends('admin.layouts.master')
@section('css')
@endsection
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
				<div class="row">

                    <form class="form-control" style="height: 500px" action="{{route('admin.products.update',['product'=>$product])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">name</label>
                                <input type="text" class="form-control" id="inputCity" name="name" required
                                value="{{$product->name}}">

                                {{$errors->first('name')}}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">price</label>
                                <input type="text" class="form-control" id="inputCity" name="stoked" required value="{{$product->stoked}}">
                                {{$errors->first('stoked')}}
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">meterage</label>
                                <input type="text" class="form-control" id="inputCity" name="meterage" required value="{{$product->meterage}}">
                                {{$errors->first('meterage')}}
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity">colors</label>
                                <input type="text" class="form-control" id="inputCity" name="colors" required value="{{$product->colors}}">
                                {{$errors->first('colors')}}
                            </div>

                            <div class="form-group col-md-12">

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
