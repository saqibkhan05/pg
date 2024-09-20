@extends('admin.layouts.app')

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
                        <div class="card-body">
                            <h2>{{$user_details->name}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Payment Due</b></h4>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="text-muted">
                                            <th scope="col">Name</th>
                                            <th scope="col" style="width: 20%;">Wallet</th>
                                            <th scope="col">Due</th>
                                            <th scope="col" style="width: 16%;">Status</th>
                                            <th scope="col" style="width: 12%;">Total Due</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Vishal</td>
                                            <td>₹15,000</td>
                                            <td>
                                                <div class="text-body fw-medium">Rent -
                                                    Electricity
                                                    </a>
                                            </td>
                                            <td><span class="badge badge-soft-danger p-2">Over Due</span></td>
                                            <td>
                                                <div class="text-nowrap">₹10,000</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sachin</td>
                                            <td>₹18,000</td>
                                            <td>
                                                <div class="text-body fw-medium">Rent -
                                                    Electricity - Food
                                                    </a>
                                            </td>
                                            <td><span class="badge badge-soft-danger p-2">Over Due</span></td>
                                            <td>
                                                <div class="text-nowrap">₹15,000</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lalit</td>
                                            <td>₹10,000</td>
                                            <td>
                                                <div class="text-body fw-medium">Rent

                                                    </a>
                                            </td>
                                            <td><span class="badge badge-soft-danger p-2">Over Due</span></td>
                                            <td>
                                                <div class="text-nowrap">₹6,000</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>saqib</td>
                                            <td>₹10,000</td>
                                            <td>
                                                <div class="text-body fw-medium">Rent -
                                                    Electricity - Food
                                                    </a>
                                            </td>
                                            <td><span class="badge badge-soft-danger p-2">Over Due</span></td>
                                            <td>
                                                <div class="text-nowrap">₹9,000</div>
                                            </td>
                                        </tr>

                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>

</div>
@endsection