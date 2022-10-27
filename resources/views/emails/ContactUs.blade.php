@component('mail::message')

<p>Client information are started below!!</p>

<ol>
    <li>Name : {{ $name }}</li>
    <li>Email Address : {{ $email }}</li>
    <li>Phone Number : {{ $phone }}</li>
</ol>

<hr>

<p>{{ $message }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
