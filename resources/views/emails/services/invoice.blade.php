<x-mail::message>
# {{$type}} Invoice

Hello {{$transaction->user->first_name}}.<br/>
Your payment for {{$type}} <b>{{$transaction->ref}}</b> was successful.<br/>
Amount: <b> ₦ {{number_format(abs($transaction->amount), 2)}}</b>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
