@component('mail::message')
# Hello {{$user->name}},
{{csrf_field()}}

A warm welcome from everyone at team WALLEEE.


WALLEEE is a unique marketplace where people could save money toward buying different products. 
We built this marketplace in order to help people buy products using their own money rather than relying on credit which adds up to the financial stress people are in already.

What do I gain by saving up on WALLEEE?

We incentivize people for saving up by marking down prices of the products they wish to buy.

What is the advantage?

1. By organically saving and purchasing, you avoid all the hidden costs that are associated with credit cards, relieving you of all the stress!
2. You won't even realize when you ended up saving huge amounts and thus self financing the purchase.

@component('mail::button', ['url' => 'http://www.walleee.com'])
Learn more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
