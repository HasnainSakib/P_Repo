@extends('Frontend.index')

@section('main')

<form action="{{ route ('submit') }}"
method="POST"> 
  @csrf 
<div class="mb-3" style="background-color: rgb(0, 0, 0)">
    <label for="formGroupExampleInput"  class="form-label">First Name</label>
    <input type="text" name="F_name" class="form-control" id="formGroupExampleInput" placeholder="Enter your First Name">
  </div>
  <div class="mb-3" style="background-color: rgb(12, 10, 10)">
    <label for="formGroupExampleInput2" class="form-label">Last Name</label>
    <input type="text" name="L_name" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Last Name">
  </div>

  <div class="mb-3" style="background-color: rgb(4, 2, 2)">
    <label for="formGroupExampleInput" class="form-label">Address</label>
    <input type="text" name="Address" class="form-control" id="formGroupExampleInput" placeholder="Enter Adress">
  </div>
  <div class="mb-3" style="background-color: rgb(0, 0, 0)">
    <label for="formGroupExampleInput2" class="form-label">Email</label>
    <input type="text" name="E_mail" class="form-control" id="formGroupExampleInput2" placeholder="Enter your E-mail">
  </div>



  <button type="submit" href="" class="btn btn-outline-success">Submit</button>

</form>
  @endsection