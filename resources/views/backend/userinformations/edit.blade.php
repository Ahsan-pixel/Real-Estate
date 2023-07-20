@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit user</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">user Edit Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('userinformations.update', $user->id) }}"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="phone_no">Phone No</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+92</span>
                                    <input type="text" class="form-control" placeholder="3352968699" id="phone_no"
                                           name="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="phone_no">Whatsapp</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+92</span>
                                    <input type="text" class="form-control" placeholder="3352968699" id="phone_no"
                                           name="whatsapp" value="{{$user->whatsapp}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" autocomplete="off"
                                   placeholder="Email" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="gender">Select language</label>
                            <select class="js-example-basic-single w-100" name="gender" id="gender">
                                <option value="en" {{$user->language == 'en' ? 'selected' : ''}}>en</option>
                                <option value="ar" {{$user->language == 'ar' ? 'selected' : ''}}>ar</option>
                                <option value="ru" {{$user->language == 'ru' ? 'selected' : ''}}>ru</option>
                            </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="email">real_estate_type</label>
                            <input type="number" class="form-control" id="email" autocomplete="off"
                                   placeholder="real_estate_type" name="real_estate_type" value="{{$user->real_estate_type}}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email">citizenship_eligible</label>
                            <input type="number" class="form-control" id="number" autocomplete="off"
                                   placeholder="citizenship_eligible" name="citizenship_eligible" value="{{$user->citizenship_eligible}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="number">first_hand_project</label>
                            <input type="number" class="form-control" id="number" autocomplete="off"
                                   placeholder="first_hand_project" name="first_hand_project" value="{{$user->first_hand_project}}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="number">city</label>
                            <input type="text" class="form-control" id="number" autocomplete="off"
                                   placeholder="city" name="city" value="{{$user->city}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="number">method</label>
                            <input type="number" class="form-control" id="method" autocomplete="off"
                                   placeholder="method" name="method" value="{{$user->method}}">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="number">minimum_investment</label>
                            <input type="number" class="form-control" id="number" autocomplete="off"
                                   placeholder="minimum_investment" name="minimum_investment" value="{{$user->minimum_investment}}">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="number">maximum_investment</label>
                            <input type="number" class="form-control" id="number" autocomplete="off"
                                   placeholder="maximum_investment" name="maximum_investment" value="{{$user->maximum_investment}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
