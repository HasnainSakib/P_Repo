@extends('Frontend.index')

@section('main')

<form action="{{ route ('update',$home->id) }}"
method="POST"> 
  @csrf 
  @method('put')
<div class="mb-3" style="background-color: white">
    <label for="formGroupExampleInput"  class="form-label">First Name</label>
    <input type="text" name="F_name" value="{{ $home->F_name }}" class="form-control" id="formGroupExampleInput" placeholder="Enter your First Name">
  </div>
  <div class="mb-3" style="background-color: white">
    <label for="formGroupExampleInput2" class="form-label">Last Name</label>
    <input type="text" name="L_name" value="{{ $home->L_name }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Last Name">
  </div>

  <div class="mb-3" style="background-color: white">
    <label for="formGroupExampleInput" class="form-label">Address</label>
    <input type="text" name="Address" value="{{ $home->Address }}"class="form-control" id="formGroupExampleInput" placeholder="Enter Adress">
  </div>
  <div class="mb-3" style="background-color: white">
    <label for="formGroupExampleInput2" class="form-label">Email</label>
    <input type="text" name="E_mail" value="{{ $home->E_mail }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter your E-mail">
  </div>



  <button type="submit" href="" class="btn btn-outline-success">Submit</button>

</form>
  @endsection