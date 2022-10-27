@extends('layouts.backend.app')

@push('content')
<div class="col-sm-12">
    <form action="{{route('partners.store')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" required name="name" placeholder="Name" id="">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description"  class="form-control" id="" style="resize: none"></textarea>
        </div>

        <div class="form-group">
            <label for="">Image (required)</label>
            <input type="file" name="image" required id="">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Create" name="" id="">
        </div>
    </form>
</div>
@endpush
