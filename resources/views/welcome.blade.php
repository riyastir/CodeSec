@extends('layouts.app')

@section('content')
<main>
	<div class="main-wrapper">
    <div class="container-fluid">
    <div style="height: 100vh">
				<!-- Material input -->
<div class="md-form input-group">
	<span class="input-group-btn">
	<input type="text" id="search" class="form-control col-md-10">
    <label for="search">Search</label>
	</span>
	<button class="btn btn-primary btn-sm"><i class="fa fa-search mr-1"></i> Search</button>
</div>
<hr>
	<div class="row text-left">
				@foreach($data as $d)
                <!--Grid column-->
                <div class="col-lg-3 col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="/photos/profile_1.png" class="card-img-top" alt="sample">
                            <a>
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Button-->
                       
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">{{$d->name}}</h4>
                            <h5 class="card-title">{{$d->unique_code}}</h5>
                            <hr>
                            <!--Text-->
                            <p class="font-small grey-dark-text mb-0">
							<h6>Age - {{$d->age}}</h6>
							<h6>Missing From - {{$d->missing_from}}</h6>
							<h6>Missing Since - {{date('d-M-Y', 			  strtotime($d->missing_date))}}</h6>
							<a href="/detail/{{$d->unique_code}}">Click Here for More Info</a>
							</p>
                        </div>
                        <!--/.Card content-->
                        <!-- Card footer -->
                        <div class="mdb-color lighten-3 text-center">
                            <ul class="list-unstyled list-inline font-small mt-3">
                                <li class="list-inline-item pr-2 white-text">
                                    <i class="fa fa-clock-o pr-1"></i>{{date('d-M-Y', 			  strtotime($d->created_at))}}</li>
                                <li class="list-inline-item pr-2">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-comments-o pr-1"></i></a>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-facebook pr-1"> </i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="white-text">
                                        <i class="fa fa-twitter pr-1"> </i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Card footer -->
                    </div>
                    <!--/.Card-->

                </div>
				@endforeach
                <!--Grid column-->
                
                <!--Grid column-->

            </div>
	
    </div>
    </div>
    </div>
    <!-- /Start your project here-->
	</main>
@endsection
