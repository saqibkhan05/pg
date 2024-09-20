@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Clear Wallet</b></h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{Route('admin.wallet.clear_wallet', ['id' => $id]) }}" method="post">
                                        @csrf
                                        <div class="mt-2">
                                            <label for="basiInput" class="form-label">Balance have to withdrawal </label>
                                            <input type="number" step="0.01" class="form-control" name="b_amount"
                                                value="{{$wallet->balance}}">
                                        </div>
                                        <div class="mt-2">
                                            <label for="basiInput" class="form-label">Set Security Deposit to</label>
                                            <input type="number" step="0.01" class="form-control" name="s_amount"
                                                value="{{$wallet->min_balance}}">
                                        </div>
                                        <!-- Base Buttons -->
                                        <button type="submit"
                                            class="mt-4 btn btn-danger waves-effect waves-light">Clear</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection