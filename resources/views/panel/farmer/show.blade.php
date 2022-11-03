@extends('layouts.backend.app')

@push('content')

    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-sortable ">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Application Id</th>
                    <th>Buyer Email Address</th>
                    <th>Buyer Name</th>
                    <th>Farmer Name</th>
                    <th>Farmer Phone Number</th>
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
                        <td>{{ $value->buyer_email }}</td>
                        <td>{{ $value->buyer_name }}</td>
                        <td>{{ $value->farmer_name }}</td>
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

            {{ $farmers->links() }}
        </div>
    </div>

@endpush
