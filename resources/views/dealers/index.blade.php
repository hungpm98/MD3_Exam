@extends('master')
@section('content')

<div class="container">
    <a href="{{route('dealers.showFormCreate')}}" class="btn btn-success">Thêm mới</a>
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
        <th scope="col" colspan="7" style="text-align: center">Action</th>
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
            <td><a  onclick="confirm('Are You Sure?')" href="{{route('dealers.delete',$dealer->id)}}">Delete</a></td>
            <td><a href="{{route('dealers.showFormUpdate',$dealer->id)}}">Update</a></td>
        </tr>

        @endforeach

    </tbody>
  </table>
</div>
@endsection
