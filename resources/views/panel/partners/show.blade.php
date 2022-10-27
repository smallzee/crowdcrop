@extends('layouts.backend.app')


@push('content')
    <div class="col-sm-12">
        <div class="profile profile-transparent">
            <div class="profile-image">
                <img src="{{asset('assets/images/'.$partner->image)}}">
            </div>
            <div class="profile-info">
                <h4 style="color: #000;">{{$partner->name}}</h4>
                <span style="color: #000;">{{ $partner->description }}</span>
            </div>
        </div>

        <div class="tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Create New Agents</a></li>
                <li><a href="#tab-second" role="tab" data-toggle="tab">All Agents</a></li>
                <li><a href="#tab-third" role="tab" data-toggle="tab">All Farmers</a></li>
            </ul>
            <div class="panel-body tab-content">
                <div class="tab-pane active" id="tab-first">
                    <form action="{{route('partners-agent.store')}}" method="post">
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
                            <input type="submit" class="btn btn-primary" value="Create" name="" id="">
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="tab-second">
                    <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                </div>
                <div class="tab-pane" id="tab-third">
                    <p>Vestibulum cursus augue sed leo tempor, at aliquam orci dictum. Sed mattis metus id velit aliquet, et interdum nulla porta. Etiam euismod pellentesque purus, in fermentum eros venenatis ut. Praesent vitae nibh ac augue gravida lacinia non a ipsum. Aenean vestibulum eu turpis eu posuere. Sed eget lacus lacinia, mollis urna et, interdum dui. Donec sed diam ut metus imperdiet malesuada. Maecenas tincidunt ultricies ipsum, lobortis pretium dolor sodales ut. Donec nec fringilla nulla. In mattis sapien lorem, nec tincidunt elit scelerisque tempus.</p>
                </div>
            </div>
        </div>
    </div>
@endpush
