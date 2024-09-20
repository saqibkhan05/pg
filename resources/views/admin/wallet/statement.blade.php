@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Wallet Statement</b></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-bordered table-hover table-nowrap align-middle mb-0 table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="color: black;">transaction ID</th>
                                            <th style="color: black;">Date</th>
                                            <th style="color: black;">Type</th>
                                            <th style="color: black;">Description</th>
                                            <th style="color: black;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: black;">
                                        @foreach ($wallet_transactions as $transaction)
                                            @if ($transaction->type == 'debit')
                                                <tr style="background-color: #ff000024;">
                                            @else
                                                <tr>
                                            @endif
                                                <td>STH{{ $transaction->id }}</td>
                                                <td>{{ $transaction->created_at->format('d-M-Y H:i:s') }}</td>
                                                <td>{{ $transaction->type }}</td>
                                                <td>{{ $transaction->description }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection