@component('mail::message')
# Hello {{$name}},
{{csrf_field()}}

Extremely pleased to see you plan your purchases at Walleee.


At Walleee, Our only goal is to ensure that we make it worthwhile for you to plan your purchases on our platform.  
Below is a summary of what you chose and how close you are to your products





@foreach ($UserCartEntries as $UserCartEntry)

@component('mail::table')
| Product       | No of days to go         | Amount set aside by you so far  |
| ------------- |:-------------:| --------:|
|{{$UserCartEntry->product_name}}     | {{$UserCartEntry->days_remaining}}     | {{$UserCartEntry->amount_saved}}      |
  
@endcomponent


@endforeach


Access our simple yet fun leaderboard here?
@component('mail::button', ['url' => $leaderboard])
Leaderboard
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
