@extends('layouts.backend.app')

@push('content')

    <div class="col-sm-12">
        <form action="{{route('administrative.update',$user->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" required placeholder="Email Address" name="email" readonly value="{{ $user->email }}" id="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" required name="name" placeholder="Full Name" value="{{ $user->name }}" id="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" required placeholder="Phone Number" name="phone_number" value="{{ $user->phone_number }}" id="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" name="" id="">
            </div>
        </form>
    </div>

@endpush
