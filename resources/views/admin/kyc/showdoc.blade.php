@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><b>Customer List</b></h4>

                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-borderless align-middle table-nowrap mb-0">
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
                                                <span class="badge bg-primary">Uploaded</span>
                                            @else
                                                <span class="badge bg-danger">Not Uploaded</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status)
                                                <span class="badge bg-success">Verifed</span>
                                            @else
                                                <span class="badge bg-danger">Not Verifed</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ Route('admin.kyc.showdoc', ['id' => $item->id]) }}" type="button"
                                                class="btn btn-primary waves-effect waves-light">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->

            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1"><b>{{ $item->name }}</b></h4>
                            </div>
                            <div class="text-center card-body">
                                <img style="width:80%" src="{{ $item->image_url }}" alt="">
                                <div class="text-center mt-4">
                                    <a href="{{ Route('admin.kyc.acceptdoc', ['id' => $item->id]) }}" type="button"
                                        class="btn btn-primary waves-effect waves-light">Accepted</a>
                                    <a href="{{ Route('admin.kyc.rejectdoc', ['id' => $item->id]) }}" type="button"
                                        class="btn btn-danger waves-effect waves-light">Rejected</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection