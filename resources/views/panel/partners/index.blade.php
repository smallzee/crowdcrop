@extends('layouts.backend.app')

@push('content')
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-bordered table-sortable ">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $sn =1;
                @endphp
                @foreach($partners as $value)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td><img src="{{asset('assets/images/'.$value->image)}}" style="width: 30px;height: 30px;border-radius: 50%;" alt=""></td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ ($value->status == 1) ? 'Active' : 'In-active' }}</td>
                        <td>{{ $value->updated_at }}</td>
                        <td><a href="{{route('partners.edit',$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $partners->links() }}
        </div>
    </div>
@endpush
