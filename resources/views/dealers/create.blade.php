@extends('master');
@section ('content')

<form method="post">
    @csrf
    <div class="container">
        <h3>Thêm mới đại lý phân phối</h3>
    <div class="form-row">
    <div class="col">
      <label for="exampleFormControlInput1">Mã số đại lý</label>
      <input  name="code" type="number" class="form-control"  >
      <p>{{$errors->has('code')?$errors->first('code'):""}}</p>
      <label for="exampleFormControlInput1">Tên đại lý</label>
        <input name="name" type="text" class="form-control" >
        <p>{{$errors->has('name')?$errors->first('name'):""}}</p>
    </div>

    <div class="col">
        <label for="exampleFormControlTextarea1">Địa chỉ</label>
        <textarea name="address" class="form-control"  rows="4"></textarea>
        <p>{{$errors->has('address')?$errors->first('address'):""}}</p>
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
          <input   name="phone" type="text" class="form-control" >
          <p>{{$errors->has('phone')?$errors->first('phone'):""}}</p>
        </div>

        <div class="col">
            <label for="exampleFormControlInput1">Tên người quản lý</label>
            <input  name="managerName" type="text" class="form-control"  >
            <p>{{$errors->has('managerName')?$errors->first('managerName'):""}}</p>
          </div>
      </div>


      <div class="form-row">
        <div class="col">
          <label for="exampleFormControlInput1">Email</label>
          <input name="email" type="email" class="form-control"  >
          <p>{{$errors->has('email')?$errors->first('email'):""}}</p>
        </div>

        <div class="col">
            <label for="exampleFormControlInput1">Trạng thái</label>
           <select  class="form-control" name="status_id" id="">
            @foreach($status as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
            @endforeach
           </select>
          </div>
      </div>



    {{-- <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> --}}
    <div class="form-row mt-3">
        <div class="col-11"></div>
        <div class="col-1">
            <button class="btn btn-primary">Thêm</button>
        </div>
    </div>


</div>



  </form>


@endsection
