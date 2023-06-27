@extends('admin_layout')
@section('admin_content')

<div class="form-w3layouts">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header style="font-weight: bold;font-size: 25px;color: #FFCC33" class="panel-heading">
                            Cập nhật Thành Viên
                        </header>
                        <div class="panel-body">
                             <?php
                                 $message2 = Session::get('message2');
                                 if ($message2) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$message2.'</span>';
                                    Session::get('message2',null);
                                 }
                            ?>
                            <div class="position-center">
                                @foreach($edit_member as $key => $member)
                                <form role="form" action="{{URL::to('/update-member/'.$member->member_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Thành Viên</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$member->member_name}}" name="member_name" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên công ty</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$member->member_company}}" name="member_company">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$member->member_phone}}" name="member_phone">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$member->member_email}}" name="member_email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Vị trí</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$member->member_local}}" name="member_local">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo công ty</label>
                                    <input value="{{$member->member_logo}}" name="member_logo" type="file" id="exampleInputFile">
                                    <img src="{{URL::to('public/upload/logo/'.$member->member_logo)}}" width="100" height="100" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Đia chỉ</label>
                                    <textarea style="resize: none" rows="3" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục" name="member_bookstore">{{$member->member_bookstore}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Thành Viên</label>
                                   <textarea style="resize: none" rows="8" class="form-control" id="editor1" name="member_content">{{$member->member_content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input  name="member_img" type="file" id="exampleInputFile">
                                    <img src="{{URL::to('public/upload/member/'.$member->member_image)}}" width="100" height="100" >

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nhóm ngành nghề</label>
                                    <select name="use_work_id" class="form-control m-bot15">
                                        @foreach($work as $key => $cate)
                                        @if($cate->work_id == $member->work_id)
                                          <option selected value="{{$cate->work_id}}">{{$cate->work_name}}</option>
                                        @else
                                          <option value="{{$cate->work_id}}">{{$cate->work_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="Add-User" class="btn btn-info">Cập nhật Thành Viên</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection