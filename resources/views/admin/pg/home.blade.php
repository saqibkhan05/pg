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
                    <h4 class="card-title mb-0 flex-grow-1"><b>PG List</b></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a href="{{route('admin.pg.create')}}" class="btn btn-sm btn-success"><i
                                    class="ri-add-line align-middle me-1"></i>
                                Add PG</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-borderless align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">PG Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Pincode</th>
                                    <th scope="col">No. Rooms</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pgs as $key => $pg)

                                    <tr>
                                        <td class="fw-medium">{{$key + 1}}</td>
                                        <td>{{$pg->name}}</td>
                                        <td>{{$pg->location}}</td>
                                        <td>{{$pg->pincode}}</td>
                                        <td>{{$pg->rooms_count}}</td>
                                        <td>{{$pg->images_count}}</td>
                                        <td><span class="badge badge-soft-success">Active</span></td>
                                        <td>{{$pg->type}}</td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted"><i
                                                                class="ri-settings-4-line align-middle me-1 fs-15"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                                        <a class="dropdown-item"
                                                            href="{{route('admin.pg.edit', ['id' => $pg->id])}}">Add
                                                            Images</a>
                                                        <a class="dropdown-item"
                                                            href="{{route('admin.pg.edit', ['id' => $pg->id])}}">Edit
                                                            PG</a>
                                                        <a class="dropdown-item"
                                                            href="{{route('admin.room.create', ['id' => $pg->id])}}">Add
                                                            Room</a>
                                                        <a class="dropdown-item"
                                                            href="{{route('admin.room.home', ['id' => $pg->id])}}">Show
                                                            Rooms</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="align-items-center mt-2 row g-3 text-center text-sm-start">
                        <div class="col-sm">
                            <div class="text-muted">Showing<span class="fw-semibold">4</span> of <span
                                    class="fw-semibold">125</span> Results
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul
                                class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">←</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">→</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection