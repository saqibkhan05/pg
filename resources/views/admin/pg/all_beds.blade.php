@extends('admin.layouts.app')

@session('title')
    Create PG
@endsession

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($beds as $key => $bed)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <b>Bed : {{$key + 1}}</b>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table class="table table-borderless align-middle table-nowrap mb-0">

                                        <tbody>
                                            <tr>
                                                <td>Room Base Price : </td>
                                                <td>₹{{$bed->cost}}</td>
                                            </tr>
                                            <tr>
                                                <td>Fixed Electricity Charges: </td>
                                                <td>₹500.00</td>
                                            </tr>
                                            <tr>
                                                <td>Status :</td>
                                                <td>
                                                    @if ($bed->status)
                                                        <span class="badge bg-primary">occupied</span>
                                                    @else
                                                        <span class="badge bg-warning">available</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr width="50%">
                                    @if (!$bed->status)
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Book Now</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection