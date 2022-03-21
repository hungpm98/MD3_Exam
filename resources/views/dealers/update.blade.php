@extends('master');
@section ('content')

<form method="post">
    @csrf
    <div class="container">
        <h3>Thêm mới đại lý phân phối</h3>
    <div class="form-row">
    <div class="col">
      <label for="exampleFormControlInput1">Mã số đại lý</label>
      <input  name="code" type="number" class="form-control" value = "{{$dealers->code}}" >
      <label for="exampleFormControlInput1">Tên đại lý</label>
        <input name="name" type="text" class="form-control" value="{{$dealers->name}}">
    </div>
    {{-- <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div> --}}
    <div class="col">
        <label for="exampleFormControlTextarea1">Địa chỉ</label>
        <textarea name="address" class="form-control"  rows="4" >{{$dealers->address}}</textarea>
      </div>
    </div>
    {{-- <div class="form-row">
      <div class="col">
        <label for="exampleFormControlInput1">Tên đại lý</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" >
      </div>
    </div> --}}

    <div class="form-row">
        <div class="col">
          <label for="exampleFormControlInput1">Điện thoại</label>
          <input   name="phone" type="text" class="form-control" value="{{$dealers->phone}}" >
        </div>

        <div class="col">
            <label for="exampleFormControlInput1">Tên người quản lý</label>
            <input  name="managerName" type="text" class="form-control" value="{{$dealers->managerName}}"  >
          </div>
      </div>


      <div class="form-row">
        <div class="col">
          <label for="exampleFormControlInput1">Email</label>
          <input name="email" type="email" class="form-control" value="{{$dealers->email}}" >
        </div>

        <div class="col">
            <label for="exampleFormControlInput1">Trạng thái</label>
           <select  class="form-control" name="status_id" id="">
            @foreach($status as $statu)
            <option {{$dealers->status_id == $statu->id ? 'selected' : ''}} value="{{$statu->id}}">{{$statu->name}}</option>
            @endforeach
           </select>
          </div>
      </div>



    {{-- <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> --}}
    <div class="form-row mt-3">
        <div class="col-10"></div>
        <div class="col-2">
            <button class="btn btn-primary">Cập nhật</button>
        </div>
    </div>


</div>



  </form>


@endsection
