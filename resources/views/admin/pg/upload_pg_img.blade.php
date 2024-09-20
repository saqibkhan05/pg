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
                    <h4 class="card-title mb-0 flex-grow-1"><b>+ Add PG Images ({{$pg->name}})</b></h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a href="{{route('admin.pg.home')}}" class="btn btn-sm btn-danger">
                                Back Home</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.pg.update_img', ['id' => $pg->id])}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-3">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection