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
                            <h4 class="card-title mb-0 flex-grow-1"><b>Kyc</b></h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.kyc.store')}}" method="POST">
                                @csrf
                                <input type="text" value="{{$c_id}}" name="client_id" hidden>
                                <div class="col-md-6">
                                    <div>
                                        <label class="form-label">Document Name</label>
                                        <input type="test" class="form-control" name="document">
                                    </div>
                                    @error('document')
                                        {{$message}}
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">Add
                                    Document</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection