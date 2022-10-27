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

                            <input type="hidden" name="partner" value="{{ $partner->id }}" id="">

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
                    <div class="table-responsive">
                        <table class="table table-bordered table-sortable ">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Email Address</th>
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $sn =1;
                            @endphp
                            @foreach($users as $value)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->phone_number }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td><a href="{{route('partners-agent.edit',$value->id)}}" class="btn btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="tab-third">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sortable ">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Application Id</th>
                                    <th>Email Address</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>LGA</th>
                                    <th>Volume Sold</th>
                                    <th>Amount Due</th>
                                    <th>Price Per Kg</th>
                                    <th>Bank Name</th>
                                    <th>Account Number</th>
                                    <th>Account Name</th>
                                    <th>Authorized By</th>
                                    <th>Approved By</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $sn =1;
                                @endphp
                                @foreach($farmers as $value)
                                    <tr>
                                        <td>{{ $sn++ }}</td>
                                        <td>{{ $value->application_id }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->phone_number }}</td>
                                        <td>{{ $value->lga }}</td>
                                        <td>{{$value->volume_sold}}</td>
                                        <td>{{$value->amount_due}}</td>
                                        <td>{{$value->price_per_kg}}</td>
                                        <td>{{$value->bank->name}}</td>
                                        <td>{{$value->account_number}}</td>
                                        <td>{{$value->account_name}}</td>
                                        <td>{{ ($value->authorized_by_id != 0) ? \App\User::find($value->authorized_by_id)->name : 'N/A' }}</td>
                                        <td>{{ ($value->approved_by_id != 0) ? \App\User::find($value->approved_by_id)->name : 'N/A' }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>{{ $value->updated_at }}</td>
                                        <td><a href="{{route('farmers.edit',$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush
