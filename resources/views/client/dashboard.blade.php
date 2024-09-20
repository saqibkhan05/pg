@extends('client.layouts.app')

@session('title')
    Login page
@endsession

@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>User Details</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="" class="btn btn-sm btn-primary">
                                        Edit Details</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="ps-0" scope="row">Full Name :</th>
                                            <td class="text-muted">{{$user_details->name}}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Mobile :</th>
                                            <td class="text-muted">{{$user_details->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">E-mail :</th>
                                            <td class="text-muted">{{$user_details->email}}</td>
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Number verification :</th>
                                            @if ($user_details->otp_verified)
                                                <td class="text-muted"><button class="btn btn-sm btn-success"><i
                                                            class="ri-checkbox-circle-line align-middle me-1"></i>
                                                        Verified </button></td>
                                            @else
                                                <td class="text-muted"><span class="btn btn-sm btn-danger"> No </span></td>
                                            @endif
                                            <!-- <td class="text-muted">{{$user_details->otp_verified ? ' Verified ' : " NO "}}</td> -->
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Kyc verification :</th>
                                            @if ($user_details->kyc_verified)
                                                <td class="text-muted"><button class="btn btn-sm btn-success"><i
                                                            class="ri-checkbox-circle-line align-middle me-1"></i>
                                                        Verified </button></td>
                                            @else
                                                <td class="text-muted"><span class="btn btn-sm btn-danger"> No </span> </td>
                                            @endif
                                            <!-- <td class="text-muted">{{$user_details->kyc_verified ? " Verified " : " NO "}}</td> -->
                                        </tr>
                                        <tr>
                                            <th class="ps-0" scope="row">Status :</th>
                                            @if ($user_details->status)
                                                <td class="text-muted"><button class="btn btn-sm btn-success"><i
                                                            class="ri-checkbox-circle-line align-middle me-1"></i>
                                                        Verified </button></td>
                                            @else
                                                <td class="text-muted"><span class="btn btn-sm btn-danger"> No </span></td>
                                            @endif
                                            <!-- <td class="text-muted">{{$user_details->status ? " Verified " : " NO "}}</td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>

</div>
@endsection