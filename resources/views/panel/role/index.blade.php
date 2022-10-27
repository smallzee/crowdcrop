@extends('layouts.backend.app')

@push('content')
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-sortable ">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $sn =1;
                @endphp
                @foreach($roles as $value)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td><a href="{{route('role.edit',$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $roles->links() }}
        </div>
    </div>
@endpush
