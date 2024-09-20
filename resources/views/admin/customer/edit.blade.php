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

                        <button type="button" class="btn btn-primary waves-effect waves-light mt-3">Update</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1"><b>Room List</b></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a href="{{route('pg.create')}}" class="btn btn-sm btn-success"><i
                                    class="ri-add-line align-middle me-1"></i>
                                Add Room</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Bedding</th>
                                    <th scope="col">Guest</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium">01</td>
                                    <td>Room 1</td>
                                    <td>Single Bedding</td>
                                    <td>Sonu</td>
                                    <td><span class="badge badge-soft-success">Full</span></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted"><i
                                                            class="ri-settings-4-line align-middle me-1 fs-15"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="{{route('pg.edit')}}">Edit</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-danger"><i
                                                    class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">01</td>
                                    <td>Room 2</td>
                                    <td>Double Bedding</td>
                                    <td>Rupanshu, Nitin</td>
                                    <td><span class="badge badge-soft-success">Full</span></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted"><i
                                                            class="ri-settings-4-line align-middle me-1 fs-15"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="{{route('pg.edit')}}">Edit</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-danger"><i
                                                    class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">01</td>
                                    <td>Room 3</td>
                                    <td>Double Bedding</td>
                                    <td>Kapil, </td>
                                    <td><span class="badge badge-soft-success">Available</span></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted"><i
                                                            class="ri-settings-4-line align-middle me-1 fs-15"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="{{route('pg.edit')}}">Edit</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-danger"><i
                                                    class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="fw-medium">01</td>
                                    <td>Room 4</td>
                                    <td>tripple Bedding</td>
                                    <td>saqib, Puneet</td>
                                    <td><span class="badge badge-soft-success">Available</span></td>
                                    <td>
                                        <div class="hstack gap-3 fs-15">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted"><i
                                                            class="ri-settings-4-line align-middle me-1 fs-15"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="{{route('pg.edit')}}">Edit</a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="link-danger"><i
                                                    class="ri-delete-bin-5-line"></i></a>
                                        </div>
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
@endsection