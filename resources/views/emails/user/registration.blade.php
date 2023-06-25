<x-mail::message>
# Registration Successful

Hello {{$user->first_name}}<br>


<x-mail::panel>
    <p>
        Complete your registration<br>
    </p>
    <h3>
        <center>{{$user->verifications()->latest()->first()->token}}</center>
    </h3>
</x-mail::panel>
@isset($url[0])
<x-mail::panel>
    <p>
        You were added by the platform<br>
    </p>
    <h4>
        Password : <b>{{$url[0]}}</b><br>
    </h4>
</x-mail::panel>
@endisset


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
