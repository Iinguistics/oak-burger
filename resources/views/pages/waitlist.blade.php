@extends('layouts.app')



@section('content')
<div id="waitlist-page">
  <div class="content-box">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mb-3">Get on the list</h1>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="phoneInput">Phone Number</label>
            <input name="phone" type="text" class="form-control" id="phoneInput" placeholder="916-555-5555">
          </div>
          <div class="form-group">
            <label for="guests">Party Size</label>
            <select class="form-control" id="guests" name="party">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5+</option>
            </select>
          </div>
          <div class="form-group">
            <label for="date" class="mr-1">Select a date</label>
            <input type="date" name="date"  id="date"/>
          </div>
          <label for="time" class="mr-1">Select a time </label>
          <input type="time" name="time" id="time" min="11:00" max="20:00" required /> <br />
         <input type="submit" class="btn btn-outline-primary mt-3" />
        </form>
      </div>
      <div class="col-md-6 mt-3">
        <p>Please note: This is not a reservation. You will be added to the current waitlist. You may have a short 
          wait once you arrive while we prepare your table. 
        </p>
        <p> 
          If you are on the waitlist and have to wait longer than 10 minutes your meal is on us!        
        </p>
      </div>
    </div>
  </div>

</div>
  
@endsection