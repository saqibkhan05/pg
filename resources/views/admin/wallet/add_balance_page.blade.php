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
                            <h4 class="card-title mb-0 flex-grow-1"><b>Wallet Add Balance</b></h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{Route('admin.wallet.add_balance', ['id' => $id]) }}" method="post">
                                        @csrf
                                        <div>
                                            <label for="basiInput" class="form-label">Amount</label>
                                            <input type="number" step="0.01" class="form-control" name="amount">
                                        </div>
                                        <!-- Base Buttons -->
                                        <button type="submit"
                                            class="mt-4 btn btn-primary waves-effect waves-light">Add</button>
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