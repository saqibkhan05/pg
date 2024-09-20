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
                    <h4 class="card-title mb-0 flex-grow-1"><b>Room List</b></h4>

                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-borderless align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Room Name</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Room Type</th>
                                    <th scope="col">Occupancy</th>
                                    <th scope="col">Guest</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $key => $room)
                                    <tr>
                                        <td class="fw-medium">{{$key + 1}}</td>
                                        <td>{{$room->room_name}}</td>
                                        <td>{{$room->images_count}}</td>
                                        <td>{{$room->catogory}}</td>
                                        <td>{{$room->occupancy}}</td>
                                        <td></td>
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
                                                        <a class="dropdown-item"
                                                            href="{{route('admin.room.show_bed', ['id' => $room->id])}}">View</a>
                                                        <a class="dropdown-item" href="">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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
@endsection