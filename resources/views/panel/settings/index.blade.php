@extends('layouts.backend.app')

@push('content')
    <div class="col-sm-12">
        <form action="{{ route('settings.store') }}" method="post">
            @csrf
            <div class="row">
                @foreach($all_key as $key)

                    <h6 class="col-sm-12 " style="font-size: 15px; margin-bottom: 10px; padding-bottom: 10px;">{{ucwords($key)}}</h6>

                    @foreach($all_settings_array[$key] as $settings_key)
                        <div  class="col-sm-4">
                            <div class="form-group">
                                <label for="{{$settings_key['key']}}" >
                                    {{$settings_key['descr']}}
                                </label>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="form-group">
                                <input class="form-control" required name="{{$settings_key['id']}}" type="{{$settings_key['settings_input_type']}}" id="{{$settings_key['id']}}" value="{{$settings_key['value']}}">
                            </div>
                        </div>

                    @endforeach

                @endforeach
            </div>

            <div class="form-group mb-2">
                <input type="submit" class="btn btn-primary" value="Update" id="">
            </div>

        </form>
    </div>
@endpush
