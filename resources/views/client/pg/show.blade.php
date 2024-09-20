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

            <div class="card">
                <div class="card-body">
                    <h2><b>Gallery</b></h2>
                    <div class="row mt-4">
                        @foreach ($room['images'] as $img)
                            <div class="col-md-3">
                                <img width="100%" src="{{$img['file_path']}}" alt="">
                            </div>
                        @endforeach
                    </div>

                    <br><br><br>

                    <h2><b>Beddings</b></h2>
                    <div class="row mt-4">
                        @foreach ($room['beds'] as $bed)
                            <div class="col-md-4 mt-1">
                                <div class="d-flex justify-content-between border p-4">
                                    <h2>{{$bed['cost']}}</h2>
                                    @if (!$bed['status'])
                                        <a href="{{route('customer.bookingquery', ['id' => $bed['id']])}}"
                                            class="btn btn-primary waves-effect waves-light">Book This
                                            Now</a>
                                    @else
                                        <button type="button" class="btn btn-danger waves-effect waves-light" disabled>Not
                                            Available</button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection