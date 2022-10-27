@component('mail::message')

<p>Applicant details are stated below</p>

<ol>
    <li>Email : {{ $email }}</li>
    <li>Name : {{ $name }}</li>
    <li>Phone Number : {{ $phone_number }}</li>
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
</ol>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
