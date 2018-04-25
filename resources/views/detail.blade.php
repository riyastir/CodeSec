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
           
<div class="jumbotron p-5 text-center text-md-left author-box">
                <!-- Name -->
                <h3 class="h3-responsive text-center font-weight-bold dark-grey-text">Case #</h3>
                <hr>
                <div class="row">
                    <!-- Avatar -->
                    <div class="col-12 col-md-2 mb-md-0 mb-4">
                        <img src="/photos/profile_1.png" class="img-fluid rounded-circle z-depth-2 avatar">
                    </div>
                    <!-- Author Data -->
                    <div class="col-12 col-md-10">
                        <h5 class="font-weight-bold dark-grey-text mb-3">
                            <strong>Name</strong>
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
						<h5>Gender				:</h4>
						<h5>Age					:</h4>
						<h5>Missing From		:</h4>
						<h5>Date of Missing		:</h4>
						<h5>District			:</h4>
						<h5>Police Station		:</h4>
						<h5>Height				:</h4>
						<h5>Complexion			:</h4>
						<h5>Scar				:</h4>
						<h5>Mole				:</h4>
						<h5>Tatto				:</h4>
						<h5>Face				:</h4>
						<h5>Lower Dress			:</h4>
						<h5>Lower Dress Color	:</h4>
						<h5>Upper Dress			:</h4>
						<h5>Upper Dress Color	:</h4>
						<h5>Contact Number		:</h4>
						<h5>Notes				:</h4>
						<h5>Status				:</h4>
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
            
            <!-- Card -->

          </div>
        </div>
      </div>
    </main>
@endsection
