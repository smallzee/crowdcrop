@extends('layouts.backend.app')

@push('content')

<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-bordered table-sortable ">
            <thead>
            <tr>
                <th>SN</th>
                <th>Email Address</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $sn =1;
            @endphp
            @foreach($users as $value)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->phone_number }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td><a href="{{route('administrative.edit',$value->id)}}" class="btn btn-primary">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endpush
