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
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a href="{{route('admin.amenity.create')}}" class="btn btn-sm btn-success"><i
                                            class="ri-add-line align-middle me-1"></i>
                                        Add Amenities</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th>Amenity</th>
                                        <th>Cost</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <div>{{$item->name}} </div>
                                            </td>
                                            <td>
                                                <div>₹ {{$item->cost}} </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a
                                                        href="{{ route('admin.amenity.edit', ['id' => $item->id]) }}">Setting</a>
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
</div>
@endsection