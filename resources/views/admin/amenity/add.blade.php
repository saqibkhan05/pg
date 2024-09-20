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
                            <h4 class="card-title mb-0 flex-grow-1"><b>Amenities</b></h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.amenity.store')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label class="form-label">Amenity Name</label>
                                            <input type="test" class="form-control" name="name">
                                        </div>
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <div>
                                            <label class="form-label">Cost of amenity</label>
                                            <input type="number" class="form-control" name="cost" value="0">
                                        </div>
                                        @error('cost')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>

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
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">Create
                                    amenity</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection