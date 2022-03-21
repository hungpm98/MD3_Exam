@extends('master')
@section('content')

<div class="container">
<table class="table">
    <thead class="thead-dark">
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">ManagerName</th>
        <th scope="col">Status</th>
        <th scope="col" colspan="7">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($dealers as $dealer)
        <tr>
            <td>{{$dealer->code}}</td>
            <td>{{$dealer->name}}</td>
            <td>{{$dealer->phone}}</td>
            <td>{{$dealer->email}}</td>
            <td>{{$dealer->address}}</td>
            <td>{{$dealer->managerName}}</td>
            <td>{{$dealer->statusName}}</td>
        </tr>

        @endforeach

    </tbody>
  </table>
</div>  
@endsection
