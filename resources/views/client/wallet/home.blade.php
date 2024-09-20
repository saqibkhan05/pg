@extends('client.layouts.app')


@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h5 class="card-title mb-0 flex-grow-1"><b>Wallet</b></h5>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="" class="btn btn-sm btn-primary">
                                        Add Balance</a>
                                </div>
                            </div>
                            <div class="flex-shrink-0" style="margin-left:20px;">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('customer.my_statement')}}" class="btn btn-sm btn-secondary ">
                                        Wallet Transactions</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5><b>Tatal Balance</b></h5>
                                        </td>
                                        <td>
                                            <h5>₹{{$wallet['balance']}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5><b>Security Deposit</b></h5>
                                        </td>
                                        <td>
                                            <h5>₹{{$wallet['min_balance']}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5><b>Spendable  Deposit</b></h5>
                                        </td>
                                        <td>
                                            <h5>₹{{$wallet['balance'] - $wallet['min_balance']}}</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection