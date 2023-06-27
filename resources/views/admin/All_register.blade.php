@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div style="font-weight: bold;font-size: 25px; color:#FFCC33" class="panel-heading">
       Danh sách thành viên mới
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">              
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Họ tên</th>
            <th>Tên công ty</th>
            <th>Chức vụ</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Người giới thiệu</th>
            <th style="width:200px; margin-right: 50px">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_register as $key => $register)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$register->register_name}}</td>
            <td>{{$register->register_company}}</td>
            <td>{{$register->register_local}}</td>
            <td>0{{$register->register_phone}}</td>
            <td>{{$register->register_email}}</td>
            <td>{{$register->register_presenter}}</td>
            <td>
              <a href="{{URL::to('/edit-register/'.$register->register_id)}}" class="active" ui-toggle-class="">
                <i style="font-size:30px; margin-left:10px"class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này?')" href="{{URL::to('/delete-register/'.$register->register_id)}}" title="">
                 <i style="font-size:30px; margin-left:10px"class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection