@extends('layouts.backend')
@section('styles')
    <style>
        .table td img {
            width: 75px;
            height: 75px;
            border-radius: 0%;
        }
    </style>
@endsection
@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">user informations</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('userinformations.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">user</h6>
                    <p class="card-description">All the user are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    WhatsApp
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Language
                                </th>
                                <th>
                                    Real estate
                                </th>
                                <th>
                                    Citizenship Eligible
                                </th>
                                <th>
                                    First hand project
                                </th>
                                <th>
                                    City
                                </th>
                                <th>
                                    Method
                                </th>
                                <th>
                                    Minimum Investment
                                </th>
                                <th>
                                    Maximum Investment
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Updated At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userinformations as $key=> $user)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        {{$user->phone}}
                                    </td>
                                    <td>
                                        {{$user->whatsapp}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->language}}
                                    </td>
                                    <td>
                                        {{$user->real_estate_type}}
                                    </td>
                                    <td>
                                        {{$user->citizenship_eligible}}
                                    </td>
                                    <td>
                                        {{$user->first_hand_project}}
                                    </td>
                                    <td>
                                        {{$user->city}}
                                    </td>
                                    <td>
                                        {{$user->method}}
                                    </td>
                                    <td>
                                        {{$user->minimum_investment}}
                                    </td>
                                    <td>
                                        {{$user->maximum_investment}}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($user->created_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($user->updated_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        <form class="d-inline-block"
                                              action="{{ route('userinformations.destroy',$user->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                            </button>
                                        </form>
                                        <a href="{{ route('userinformations.edit',$user->id) }}"
                                           class="btn btn-warning btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
