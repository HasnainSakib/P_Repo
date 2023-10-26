
@extends('Frontend.index')
@section('main')
<table class="table" style="color: black">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First_Name</th>
        <th scope="col">Last_Name</th>
        <th scope="col">Address</th>
        <th scope="col">E_mail</th>
        <th scope="col">Eikhane edit/delete koren</th>
        
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach ($home as $home)
      <td>{{ $home->id }}</td>
      <td>{{ $home->F_Name }}</td>
      <td>{{ $home->L_Name }}</td>
      <td>{{ $home->Address }}</td>
      <td>{{ $home->E_mail }}</td>

      <td>
     <a class="btn btn-warning btn-sm"  href="{{route ('edit') }}" > Update  </a>
      <a class="btn btn-danger btn-sm"  href="#" > Delete  </a>
     </td>

    </tr>

      @endforeach


    </tbody>
  </table>
  @endsection