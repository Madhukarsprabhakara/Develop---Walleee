@component('mail::message')
# Hello {{$user->name}},
{{csrf_field()}}

A warm welcome from everyone at  Walleee.


WALLEEE is a unique marketplace where people could save money toward buying different products. 
We built this marketplace in order to help people buy products using their own money rather than relying on credit which adds up to the financial stress people are in already.

What do I gain by saving up on Walleee?

There is a huge benefit in using our platform: You avoid all the stress that comes with using credit cards. No transaction fees, no hidden charges, no interest payments!
Isn't this good enugh for you to start?

And we will also help you in achieving your goals by constantly reminding you of different ways to reach your goals.

What is the advantage?

1. By organically saving and purchasing, you avoid all the hidden costs that are associated with credit cards, relieving you of all the stress!
2. You won't even realize when you ended up saving huge amounts and thus self financing the purchase.

Look who is supporting us in "Say no to credit card" campaign

@component('mail::button', ['url' => 'http://ec2-54-204-208-43.compute-1.amazonaws.com/ourpillars'])
Right here
@endcomponent

Although we would want you to continue,
If you wish to stop supporting us on the campaign, you could by following the link below

@component('mail::button', ['url' => 'http://ec2-54-204-208-43.compute-1.amazonaws.com/campaign-control'])
Campaign
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
