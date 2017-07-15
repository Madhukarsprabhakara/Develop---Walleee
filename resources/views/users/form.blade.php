
<form method="POST" action="/users/store" >
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<!--{{csrf_field()}}-->
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Your name">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  
  </div>
  <div class="form-group">
    <label for="exampleInputitem1">What are you saving for?</label>
    <!-- scrolling images-->
    <div>
<input type="checkbox" name='item' value="TV" id="thing1"/><label for="thing1"></label> 
<input type="checkbox" name='item' value="BIKE" id="thing2"/><label for="thing2"></label> 
<input type="checkbox" name='item' value="PHONE" id="thing3"/><label for="thing3"></label> 
<input type="checkbox" name='item' value="VACATION" id="thing4"/><label for="thing4"></label> 
    </div>
    <!--ends here-->
<!--    <input name="item" type="text" class="form-control" id="exampleInputitem1" placeholder="Item"> -->
   
  </div>
 <div class="form-group">
    <label for="exampleInputSave1">How much do you want to save?</label>
    <input name="amount" type="text" class="form-control" id="exampleInputSave1" placeholder="Amount">
  </div>
  <div class="form-group">
    <label for="exampleInputCal1">By when?</label>
    <input name="byWhen" type="date" class="form-control" id="exampleInputCal1" placeholder="Date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>