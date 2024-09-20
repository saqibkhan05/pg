@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Update Amenity</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.amenity.update', ['id' => $data->id])}}" method="post"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label class="form-label">Amenity Name</label>
                                            <input type="test" class="form-control" name="name"
                                                value="{{ $data->name }}">
                                        </div>
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <div>
                                            <label class="form-label">Cost of amenity</label>
                                            <input type="number" class="form-control" name="cost"
                                                value="{{ $data->cost }}">
                                        </div>
                                        @error('cost')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">Update
                                    amenity</button>
                            </form>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Update Image</b></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.amenity.update_img', ['id' => $data->id])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div>
                                            <label class="form-label">Image <small>(optional)</small></label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        @error('cost')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    @if (isset($image))
                                        <div class="col-md-6">
                                            <img width="100%" src="{{ $image }}" alt="">
                                        </div>

                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">Update
                                    amenity Image</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Delete Amenity</b></h4>
                        </div>
                        <div class="card-body text-center">
                            <a href="{{route('admin.amenity.destroy', ['id' => $data->id])}}"
                                class="btn btn-danger waves-effect waves-light mt-4">Delete
                                amenity</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection