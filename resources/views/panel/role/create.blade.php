@extends('layouts.backend.app')

@push('content')
    <div class="col-md-12">
        <form action="{{route('role.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" required placeholder="Name" value="{{old('name')}}" name="name" id="">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create" name="" id="">
            </div>
        </form>
    </div>
@endpush
