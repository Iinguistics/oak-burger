@extends('layouts.app')



@section('content')
<div id="about-page">
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
            <label for="date">Select a date</label>
            <input type="date" name="date"  id="date"/>
          </div>
          <label for="time">Select a time </label>
          <input type="time" name="time" id="time" min="11:00" max="20:00" required /> <br />
         <input type="submit" class="btn btn-outline-primary mt-3" />
        </form>
      </div>
    </div>
  </div>

</div>
  
@endsection