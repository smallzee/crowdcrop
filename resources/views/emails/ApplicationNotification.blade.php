@component('mail::message')

<p>Applicant details are stated below</p>

<ol>
    <li>Buyer Email : {{ $buyer_email }}</li>
    <li>Buyer Name : {{ $buyer_name }}</li>
    <li>Farmer Name : {{ $farmer_name }}</li>
    <li>Farmer Phone Number : {{ $phone_number }}</li>
    <li>LGA : {{ $lga }}</li>
    <li>Volume Sold : {{ $volume_sold }}</li>
    <li>Amount Due : {{ $amount_due }}</li>
    <li>Price Per/KG : {{ $price_per_kg }}</li>
    <li>Bank Name : {{ \App\Banks::find($bank_id)->name }}</li>
    <li>Account Number : {{ $account_number }}</li>
    <li>Account Name : {{ $account_name }}</li>
    <li>Application Id : {{ $application_id }}</li>
    <li>Status : {{ $status }}</li>
    <li>Authorized By : {{ (!empty($authorized)) ? $authorized : 'N/A' }}</li>
    <li>Approved By  : {{ (!empty($approved)) ? $approved : 'N/A' }}</li>
    <li>Witness : {{ $witness_name }}</li>
</ol>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
