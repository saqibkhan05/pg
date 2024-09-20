@extends('admin.layouts.app')

@session('title')
    Login page
@endsession

@section('body')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <h2><b>All Queries</b></h2>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-bordered table-hover table-nowrap align-middle mb-0 table-sm">
                                <thead class="table-light">
                                    <tr>
                                        <th style="color: black;">Name</th>
                                        <th style="color: black;">Email</th>
                                        <th style="color: black;">Phone number</th>
                                        <th style="color: black;">created_at</th>
                                    </tr>
                                </thead>
                                <tbody style="color: black;">
                                    @foreach ($queries as $query)
                                        <tr>
                                            <td>{{ $query['name'] }}</td>
                                            <td>{{ $query['email'] }}</td>
                                            <td>{{ $query['phone_number'] }}</td>
                                            <td>{{ $query['created_at'] }}</td>
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
@endsection
