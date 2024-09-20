@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><b>+ Add PG</b></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a href="{{route('pg.home')}}" class="btn btn-sm btn-danger">
                                Back Home</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Name</label>
                                    <input type="test" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4  mt-1">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Address</label>
                                    <input type="test" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label class="form-label">Location</label>
                                    <input type="test" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label class="form-label">Pincode</label>
                                    <input type="test" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="row gy-4 mt-1">
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Type</label>
                                    <select class="form-select mb-3">
                                        <option selected="">Boys</option>
                                        <option value="1">Girls</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-md-4">
                                <label for="">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <br>
                        <hr>

                        <button type="button" class="btn btn-primary waves-effect waves-light mt-3">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection