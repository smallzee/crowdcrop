@extends('layouts.backend.app')

@push('content')

    <div class="col-sm-12">
        <form action="{{route('administrative.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" value="{{old("email")}}" required placeholder="Email Address" name="email"  id="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" required name="name" value="{{old("name")}}" placeholder="Full Name" id="">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" required placeholder="Phone Number" value="{{old('phone_number')}}" name="phone_number" id="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" required placeholder="Password" name="password" id="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" required placeholder="Confirm Password" name="password_confirmation" id="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" name="" id="">
            </div>
        </form>
    </div>

@endpush
