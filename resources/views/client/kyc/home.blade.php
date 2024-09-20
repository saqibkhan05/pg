@extends('client.layouts.app')

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
                        <div class="card-header align-items-center">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Kyc Required Documents</b></h4>
                            <p class="mt-2">Please upload only images or PDF documents.( It will take upto 3-5 hours )
                            </p>
                        </div>
                        <div class="card-body">
                            @foreach($kyc as $item)
                                <form action="{{route('customer.upload_my_kyc')}}" method="POST"
                                    enctype="multipart/form-data">

                                    <div class="d-flex justify-content-between  mt-2">
                                        @csrf
                                        <input type="text" value="{{ $item->id }}" name="id" hidden>
                                        <b>{{$item->name}}</b>

                                        @if ($item->docs)
                                            @if ($item->status)
                                                <div class="alert alert-success" role="alert">
                                                    <strong> verified</strong>
                                                </div>
                                            @else
                                                <div class="alert alert-secondary " role="alert">
                                                    <strong>Verification in progress</strong>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex justify-content-around">
                                                <div class="input-group">
                                                    <input type="file" class="form-control" name="docs">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Upload</button>
                                                </div>
                                            </div>

                                        @endif
                                    </div>

                                </form>
                            @endforeach
                            @error('docs')
                                <hr>
                                <div class="text-center">
                                    <h5><b>{{ $message }}</b></h5>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection