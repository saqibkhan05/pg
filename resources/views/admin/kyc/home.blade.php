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
                            <h4 class="card-title mb-0 flex-grow-1"><b>Kyc</b></h4>

                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>Verification Pending </h3>
                                        </td>
                                        <td>
                                            <h3>{{$pending}}</h3>
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