@extends('layouts.backend.app')

@push('content')
    <div class="col-sm-12">
        <form action="{{route('partners.update',$partner->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" value="{{ $partner->name }}" class="form-control" required name="name" placeholder="Name" id="">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" required class="form-control" id="" style="resize: none">{{ $partner->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="">Image (optional)</label>
                <input type="file" name="image" id="">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Create" name="" id="">
            </div>
        </form>
    </div>
@endpush
