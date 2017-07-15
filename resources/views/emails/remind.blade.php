<html>

<head
<title></title>
</head>

<body>
{{csrf_field()}}
<h3>{{$name}}, Lets take one day at a time, please try to save  ${{$user_amt_data->amount_per_day}} today.</h3>
<p>Might we remind you that you are just {{$user_amt_data->days_remaining}} days away from reaching your goal of getting that {{$user_amt_data->item}} you've always wanted</p>
<p></p>


<p>Best,</p>
<p>Team Walleee!</p>
</body>

</html>

