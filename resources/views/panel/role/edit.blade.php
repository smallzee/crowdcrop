@extends('layouts.backend.app')

@push('content')
    <div class="col-md-12">
        <form action="{{route('role.update',$role->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" required placeholder="Name" value="{{$role->name}}" name="name" id="">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" name="" id="">
            </div>
        </form>
    </div>
@endpush
