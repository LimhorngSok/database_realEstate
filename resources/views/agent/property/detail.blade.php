@extends('agent.master.header')

@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Buying Contract</h1>
              </div>
              <form class="user" method="post" action="">
                @csrf
                <div class="form-group row">
                <input type="hidden" name="property_id" value="">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" placeholder="Buyer's full name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="phone_number" placeholder="Buyer's phone number">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="sec_phone_number" placeholder="Buyer's secondary phone number">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" class="form-control form-control-user" id="exampleInputPassword" name="email" placeholder="Buyer's email">
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="exampleRepeatPassword" name="dob" placeholder="Buyer's date of birth">
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleInputPassword" name="gov_id" placeholder="Buyer's government id">
                    </div>
                  </div>
                  <div class="form-group row justify-content-between pr-5 pl-5">
                    <div class="col-sm-3 form-control   text-center pt-2 pb-4 row">
                      <input type="radio" name="gender" class="" id="" value="male">
                      <label for="male" >Male</label>
                    </div>
                    <div class="col-sm-3 form-control   text-center pt-2 pb-4 row">
                      <input type="radio" name="gender" id="" value="female">
                      <label for="male">Female</label>
                    </div>
                    <div class="col-sm-3 form-control   text-center pt-2 pb-4 row">
                      <input type="radio" name="gender" id="" value="other">
                      <label for="male">Other</label>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Review Contract
                </button>
                <hr>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
@endsection
