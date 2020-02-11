@extends('agent.master.header')

@section('content')

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    <button type="submit" class="btn btn-primary btn-user ">
                        Add picture
                    </button>

                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Property Detail</h1>
                        </div>
                        <form class="user" method="post" action="{!! route('property.store') !!}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" name="property_id" value="">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="price" placeholder="Price">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="price_rent" placeholder="Price for Rent">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="address" placeholder="Address ">
                            </div>
                            <div class="form-group">
                                <textarea name="name" class="form-control" rows="8" cols="80" name="description" placeholder="Description"></textarea>
                            </div>

                            <div class="form-group row justify-content-between pr-5 pl-5">
                                <div class="col-sm-3 form-control text-center pt-2 pb-4 row">

                                    <input type="checkbox" name="availability" value="1" id="availability">
                                    <label for="availability">
                                        availability
                                    </label>
                                </div>

                            </div>
                            <div class="form-group row">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="file" class="form-control " id="exampleFirstName" name="thumbnail" placeholder="thumbnail">
                                </div>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control " id="exampleLastName" name="picture" placeholder="picture">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Add Property
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
