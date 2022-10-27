@extends('layouts.backend.app')

@push('content')
<div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td>Application Id</td>
                <td>{{ $farmer->application_id }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $farmer->email }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $farmer->name }}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{ $farmer->phone_number }}</td>
            </tr>
            <tr>
                <td>LGA</td>
                <td>{{ $farmer->lga }}</td>
            </tr>
            <tr>
                <td>Volume Sold</td>
                <td>{{ $farmer->volume_sold }}</td>
            </tr>
            <tr>
                <td>Amount Due</td>
                <td>{{ $farmer->amount_due }}</td>
            </tr>
            <tr>
                <td>Price Per Kg</td>
                <td>{{ $farmer->price_per_kg }}</td>
            </tr>
            <tr>
                <td>Bank Name</td>
                <td>{{ $farmer->bank->name }}</td>
            </tr>
            <tr>
                <td>Account Name</td>
                <td>{{ $farmer->account_name }}</td>
            </tr>
            <tr>
                <td>Partner</td>
                <td>{{ $farmer->partner->name }}</td>
            </tr>
            <tr>
                <td>Account Number</td>
                <td>{{ $farmer->account_number }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $farmer->status }}</td>
            </tr>
            <tr>
                <td>Authorized By</td>
                <td>{{ ($farmer->authorized_by_id != 0) ? \App\User::find($farmer->authorized_by_id)->name : 'N/A' }}</td>
            </tr>
            <tr>
                <td>Approved By</td>
                <td>{{ ($farmer->approved_by_id != 0) ? \App\User::find($farmer->approved_by_id)->name : 'N/A' }}</td>
            </tr>
        </table>

        <h5 class="page-header">Application Status</h5>

        <form action="{{route('farmers.update',$farmer->id)}}" method="post">
            @csrf
            @method('PATCh')
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    @foreach(array('pending','approved','rejected') as $value)
                        <option value="{{$value}}" {{ ($value == $farmer->status) ? 'selected' : '' }}>{{ ucwords($value) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Authorized By</label>
                <select name="authorized_by" class="form-control" id="">
                    @foreach(\App\User::orderBy('name')->get() as $value)
                        <option value="{{$value->id}}" {{ ($value->id == $farmer->authorized_by_id) ? 'selected' : '' }}>{{ ucwords($value->name) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update" name="" id="">
            </div>
        </form>
    </div>
</div>
@endpush
