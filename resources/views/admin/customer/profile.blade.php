@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg">
                    <img src="admin_assets/images/profile-bg.jpg" alt="" class="profile-wid-img">
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">

                    <div class="col">
                        <div class="p-2">
                            <h1 class="text-white mb-1">{{$customer->name}}</h1>
                            @if (!$customer->status)
                                <div class="hstack text-white-50 gap-1">
                                    <div class="me-2"><i
                                            class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Location
                                    </div>
                                    <div>
                                        <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>PG Name
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if ($customer->status)
                    <a href="{{route('admin.booking.change_room_page', ['c_id' => $customer->id])}}"
                        class=" mt-4 btn btn-secondary waves-effect waves-light">Change Room</a>
                @else
                    <a href="{{route('admin.booking.confirm_booking_page', ['c_id' => $customer->id])}}"
                        class=" mt-4 btn btn-secondary waves-effect waves-light">Create Booking</a>
                @endif

                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="tab-content text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3"><b>Personal Details</b></h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                <td class="text-muted">{{$customer->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Mobile :</th>
                                                                <td class="text-muted">{{$customer->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">E-mail :</th>
                                                                <td class="text-muted">{{$customer->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Joining Signup</th>
                                                                <td class="text-muted">
                                                                    {{$customer->created_at->format('d-M-Y')}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->


                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1"><b>Wallet</b></h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a href="{{Route('admin.wallet.add_balance_page', ['id' => $customer->id]) }}"
                                                            class="btn btn-sm btn-success"><i
                                                                class="ri-add-line align-middle me-1"></i>
                                                            Add Balance</a>
                                                        <a href="{{Route('admin.wallet.set_security_deposit_page', ['id' => $customer->id]) }}"
                                                            class="btn btn-sm btn-primary">
                                                            Security Balance</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                @if (session('recharge_fail'))
                                                    <div class="alert alert-danger text-center" role="alert">
                                                        <strong> failure </strong>
                                                    </div>
                                                @endif
                                                @if (session('recharge_success'))
                                                    <div class="alert alert-success text-center" role="alert">
                                                        <strong>Success</strong>
                                                    </div>
                                                @endif

                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Total Amount :</th>
                                                                <td class="text-muted">
                                                                    ₹{{$customer->wallet->balance}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Security Deposit :</th>
                                                                <td class="text-muted">
                                                                    ₹{{$customer->wallet->min_balance}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Spendable Amount</th>
                                                                <td class="text-muted">
                                                                    ₹{{$customer->wallet->balance - $customer->wallet->min_balance}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{Route('admin.wallet.statement', ['id' => $customer->id]) }}"
                                                        class="m-1 btn btn-sm btn-primary">
                                                        Wallet Statement</a>
                                                    <a href="{{Route('admin.wallet.clear_wallet_page', ['id' => $customer->id]) }}"
                                                        class="m-1 btn btn-sm btn-danger">
                                                        Clear Wallet</a>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                    </div>
                                    <div class="col-xxl-9">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0  me-2">Customer history</h4>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="tab-content text-muted">
                                                            <div class="tab-pane active" id="today" role="tabpanel">
                                                                <div class="profile-timeline">
                                                                    <div class="accordion accordion-flush"
                                                                        id="todayExample">

                                                                        @foreach ($customer->customerLogs as $log)
                                                                            <div class="accordion-item border-0">
                                                                                <div class="accordion-header"
                                                                                    id="headingOne">
                                                                                    <a class="accordion-button p-2 shadow-none"
                                                                                        data-bs-toggle="collapse"
                                                                                        href="#collapseOne"
                                                                                        aria-expanded="true">
                                                                                        <div class="d-flex">
                                                                                            <div class="flex-shrink-0">
                                                                                                <img src="{{asset('admin_assets/images/users/user.jpg')}}"
                                                                                                    alt=""
                                                                                                    class="avatar-xs rounded-circle">
                                                                                            </div>
                                                                                            <div class="flex-grow-1 ms-3">
                                                                                                <h6 class="fs-14 mb-1">
                                                                                                    {{$log->title}}
                                                                                                </h6>
                                                                                                <small
                                                                                                    class="text-muted">{{$log->created_at->format('d-M-Y  H:i:s')}}</small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div id="collapseOne"
                                                                                    class="accordion-collapse collapse show"
                                                                                    aria-labelledby="headingOne"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body ms-2 ps-5">
                                                                                        {{$log->description}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div>
</div>
@endsection