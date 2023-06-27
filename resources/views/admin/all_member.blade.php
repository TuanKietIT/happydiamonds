@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div style="font-weight: bold;font-size: 25px; color:#FFCC33" class="panel-heading">
       Danh Sách Thành Viên
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
            <th>Tên thành viên</th>
            <th>Hình ảnh</th>
            <th>Tên công ty</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th style="width:100px; margin-right: 10px">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_member as $key => $member)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$member->member_name}}</td>
            <td><img src="public/upload/member/{{$member->member_image}}" height="100px" width="100px" alt=""></td>
            <td>{{$member->member_company}}</td>
            <td>0{{$member->member_phone}}</td>
            <td>{{$member->member_email}}</td>
            <td>
              <a href="{{URL::to('/edit-member/'.$member->member_id)}}" class="active" ui-toggle-class="">
                <i style="font-size:30px; margin-left:10px"class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này?')" href="{{URL::to('/delete-member/'.$member->member_id)}}" title="">
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