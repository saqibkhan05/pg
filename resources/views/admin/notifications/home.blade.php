@extends('admin.layouts.app')

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>BookingQuery</b></h4>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="text-muted">
                                            <th scope="col">TimeStamp</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">PG name</th>
                                            <th scope="col">Room No</th>
                                            <th scope="col">Bed. No</th>
                                            <th scope="col">Setting</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $item)

                                            <tr>
                                                <td>{{$item->created_at->format('d-M-Y H:i:s')}}</td>
                                                <td>{{$item->customer->name}}</td>
                                                <td>{{$item->bed->pgroom->pg->name}}</td>
                                                <td>{{$item->bed->pgroom->room_name}}</td>
                                                <td>{{$item->bed->id}}</td>
                                                <td><a href="{{route('admin.customer.show', ['id' => $item->customer->id])}}"
                                                        class="btn btn-primary btn-sm waves-effect waves-light">Accept</a>
                                                    <a href=""
                                                        class="btn btn-danger btn-sm waves-effect waves-light">Reject</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection