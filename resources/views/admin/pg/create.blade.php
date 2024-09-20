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
                            <a href="{{route('admin.pg.home')}}" class="btn btn-sm btn-danger">
                                Back Home</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.pg.store') }}" method="post">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Name</label>
                                    <input type="test" class="form-control" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4  mt-1">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Address</label>
                                    <input type="test" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label class="form-label">Location</label>
                                    <input type="test" class="form-control" name="location">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label class="form-label">Pincode</label>
                                    <input type="test" class="form-control" name="pincode">
                                </div>
                            </div>

                        </div>

                        <div class="row gy-4 mt-1">
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Type</label>
                                    <select class="form-select mb-3" name="type">
                                        <option value="boys">Boys</option>
                                        <option value="girls">Girls</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <hr width="50%">
                        <h5><b>Aminities</b></h5>
                        <div class="row mt-3">
                            @foreach ($amenities as $amenity)
                                <div class="col-md-3">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="formCheck2" checked=""
                                            name="amenity[]" value="{{$amenity->id}}">
                                        <label class="form-check-label" for="formCheck2">
                                            {{$amenity->name}} | Cost : {{$amenity->cost}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr width="50%">
                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-3">Create</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection