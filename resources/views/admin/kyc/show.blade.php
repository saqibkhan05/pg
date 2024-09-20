@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Customer List</b></h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('admin.kyc.create', ['c_id' => $c_id])}}"
                                        class="btn btn-sm btn-secondary"><i class="ri-add-line align-middle me-1"></i>
                                        Add Document</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-bordered table-hover align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Uploaded</th>
                                            <th scope="col">Verifed</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if ($item->docs)
                                                        <span class="badge badge-soft-success">Uploaded</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">Not Uploaded</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->status)
                                                        <span class="badge badge-soft-success">Verifed</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">Not Verifed</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ Route('admin.kyc.showdoc', ['id' => $item->id]) }}"
                                                        type="button"
                                                        class="btn btn-sm btn-outline-primary waves-effect waves-light">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Base Buttons -->
                            <div class="d-flex justify-content-end">
                                <a href="{{route('admin.kyc.kyc_pass', ['c_id' => $c_id])}}"
                                    class="mt-4 btn btn-primary waves-effect waves-light">Verification
                                    Pass</a>
                            </div>

                            @if (session('user_v'))
                                <div class="mt-4 alert alert-success text-center" role="alert">
                                    <strong> Verification Pass </strong>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('admin.customer.show', ['id' => $c_id])}}"
                                        class="mt-4 btn btn-primary waves-effect waves-light">Go to Client Dashboard
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection