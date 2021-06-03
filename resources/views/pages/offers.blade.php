@extends('layouts.app')



@section('content')
<div id="offers-page">
  <div class="content-box">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mb-3">Get the latest offers</h1>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="phoneInput">Phone Number</label>
                <input name="phone" type="text" class="form-control" id="phoneInput" placeholder="916-555-5555">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstNameInput">First Name</label>
                <input name="firstName" type="text" class="form-control" id="firstNameInput" placeholder="John">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lastNameInput">Last Name</label>
                <input name="lastName" type="text" class="form-control" id="lastNameInput" placeholder="Doe">
              </div>
            </div>
          </div>

         
          
          
          
        
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