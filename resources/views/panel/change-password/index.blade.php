@extends('layouts.backend.app')

@push('content')

    <div class="col-sm-12">
        <form action="{{route('change-password.store')}}">
            @csrf
            <div class="form-group">
                <label for="">Old Password</label>
                <input type="password" name="old_password" required placeholder="Old Password" class="form-control" id="">
            </div>

            <div class="form-group">
                <label for="">New Password</label>
                <input type="password" name="new_password" required placeholder="New Password" class="form-control" id="">
            </div>

            <div class="form-group">
                <label for="">Confirm New Password</label>
                <input type="password" name="confirm_new_password" required placeholder="Confirm New Password" class="form-control" id="">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="" value="Change Password" id="">
            </div>
        </form>
    </div>

@endpush
