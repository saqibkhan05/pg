@extends('admin.layouts.app')

@section('body')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><b>Create Booking</b></h4>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <form action="{{route('admin.booking.confirm_booking')}}" method="POST">
                                @csrf
                                <input type="text" value="{{$c_id}}" name="c_id" hidden>
                                <div class="row">

                                    <!-- First Select Field (Category) -->
                                    <div class="col-md-4">
                                        <label class="form-label">PG</label>
                                        <select class="form-select mb-3" name="bedding">
                                            @foreach ($data as $pg)
                                                @foreach ($pg->rooms as $room)
                                                    @foreach ($room->beds as $bed)
                                                        <option value="{{$bed->id}}" {{ $bed->status ? 'disabled' : '' }}>
                                                            {{$pg->name}} | {{$room->room_name}} |
                                                            {{$bed->id}} | {{ $bed->status ? 'Full' : 'Available' }}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Create
                                            Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end card body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection