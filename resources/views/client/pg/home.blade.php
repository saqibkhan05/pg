@extends('client.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('customer.c_search')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <input type="text" class="form-control" id="basiInput"
                                                placeholder="Location" name="location">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select mb-3" aria-label="Default select example">
                                            <option value="basic">Basic</option>
                                            <option value="2">Premium </option>
                                            <option value="3">Luxury </option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select mb-3" aria-label="Default select example">
                                            <option value="1">Single bed Occupancy </option>
                                            <option value="1">Double bed Occupancy </option>
                                            <option value="1">triple bed Occupancy </option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($data as $pg)
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h2 class="d-flex align-items-center"><i class="ri-building-4-line m-2"></i>
                                    <b>{{$pg['name']}}</b></h2>
                                <p class="d-flex align-items-center"><i
                                        class="ri-map-pin-line m-2"></i><b>{{$pg['address']}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($pg['rooms'] as $room)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <h4><b>{{$room['room_name']}}</b></h4>
                                        <p><b>{{$room['catogory']}} | {{ $room['occupancy'] }} occupancy | {{$pg['type']}}</b>
                                        </p>
                                        <img width="100%" src="{{$room['images'][0]['file_path']}}" alt="">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{route('customer.show', ['id' => $room['id']])}}"
                                        class="btn btn-primary waves-effect waves-light">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
            @endforeach

        </div>
    </div>
</div>
@endsection