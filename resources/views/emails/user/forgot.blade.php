<x-mail::message>
# Reset Password

Hello {{$user->first_name}}

<x-mail::panel>
    <p>
        Passsord Reset Token<br>
    </p>
    <h3>
        <center>{{$user->verifications()->latest()->first()->token}}</center>
    </h3>
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
