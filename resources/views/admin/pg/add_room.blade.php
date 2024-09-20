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
                    <h4 class="card-title mb-0 flex-grow-1"><b>+ Add Room in {{$pg_name}}</b></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a href="{{route('admin.pg.home')}}" class="btn btn-sm btn-danger">
                                Back Home</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.room.store')}}" method="post" enctype="multipart/form-data">
                        <input type="text" hidden name="p_id" value="{{$id}}">

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Room Name</label>
                                    <input type="test" class="form-control" name="room_name">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Room Type</label>
                                    <select class="form-select mb-3" name="catogory">
                                        <option value="Basic">Basic</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Luxury">luxury</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Occupancy</label>
                                    <select class="form-select mb-3" name="occupancy">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-md-3">
                                <div>
                                    <label class="form-label">Cost of Each Occupancy</label>
                                    <input type="number" class="form-control" name="cost">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">Create</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection