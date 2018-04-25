@extends('layouts.app')

@section('content')
<main>
      <div class="main-wrapper">
        <div class="container-fluid">
          <div style="height: 100vh">
		<div class="md-form input-group">
	<span class="input-group-btn">
	<input type="text" id="search" class="form-control col-md-10">
    <label for="search">Search</label>
	</span>
	<button class="btn btn-primary btn-sm"><i class="fa fa-search mr-1"></i> Search</button>
</div>
<hr>
            <!-- Card -->
           @foreach($data as $d)
<div class="jumbotron p-5 text-center text-md-left author-box">
                <!-- Name -->
                <h3 class="h3-responsive text-center font-weight-bold dark-grey-text">Case #: {{$d->unique_code}}</h3>
                <hr>
                <div class="row">
                    <!-- Avatar -->
                    <div class="col-12 col-md-2 mb-md-0 mb-4">
                        <img src="/photos/profile_1.png" class="img-fluid rounded-circle z-depth-2 avatar">
                    </div>
                    <!-- Author Data -->
                    <div class="col-12 col-md-10">
                        <h5 class="font-weight-bold dark-grey-text mb-3">
                            <strong>{{$d->name}}</strong>
                        </h5>
                        <div class="personal-sm pb-3">
                           
                            <a class="pr-2 fb-ic">
                                <i class="fa fa-facebook mr-2"> </i>
                            </a>
                            <a class="pr-2 tw-ic">
                                <i class="fa fa-twitter mr-2"> </i>
                            </a>
                            <a class="pr-2 gplus-ic">
                                <i class="fa fa-google-plus mr-2"> </i>
                            </a>
                        </div>
						<h5>Gender				:@if($d->gender == '1')Male @elseif($d->gender == '2') Female @else Other @endif</h4>
						<h5>Age					: {{$d->age}}</h4>
						<h5>Missing From		: {{$d->missing_from}}</h4>
						<h5>Date of Missing		: {{date('d-M-Y', 			  strtotime($d->missing_date))}}</h4>
						<h5>District			: {{$d->district}}</h4>
						<h5>Police Station		: {{$d->police_station}}</h4>
						<h5>Height				: {{$d->height}}</h4>
						<h5>Complexion			: {{$d->complexion}}</h4>
						<h5>Scar				: {{$d->scar}}</h4>
						<h5>Mole				: {{$d->scar}}</h4>
						<h5>Tatto				: {{$d->tatto}}</h4>
						<h5>Face				: {{$d->face}}</h4>
						<h5>Lower Dress			: {{$d->lower_dress}}</h4>
						<h5>Lower Dress Color	: {{$d->lower_dress_color}}</h4>
						<h5>Upper Dress			: {{$d->upper_dress}}</h4>
						<h5>Upper Dress Color	: {{$d->upper_dress_color}}</h4>
						<h5>Contact Number		: {{$d->contact_number}}</h4>
						<h5>Notes				: {{$d->notes}}</h4>
						<h5>Status				: Missing</h4>
                        <div class="row">

                            <div class="col-12 mt-1">
                                <div class="form-group basic-textarea rounded-corners shadow-textarea">

                                    <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Your message..."></textarea>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Card -->

          </div>
        </div>
      </div>
    </main>
	
@endsection
