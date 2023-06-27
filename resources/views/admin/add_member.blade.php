@extends('admin_layout')
@section('admin_content')

<div class="form-w3layouts">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header style="font-weight: bold;font-size: 25px;color: #FFCC33" class="panel-heading">
                            Thêm Thành Viên
                        </header>
                        <div class="panel-body">
                             <?php
                                 $message_member = Session::get('message_member');
                                 if ($message_member) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$message_member.'</span>';
                                    Session::get('message_member',null);
                                 }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-member')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Thành Viên</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="member_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên công ty</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="member_company">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="member_phone">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="member_email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo công ty</label>
                                    <input name="member_logo" type="file" id="exampleInputFile">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vị trí</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="member_local">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Đia chỉ</label>
                                    <textarea style="resize: none" rows="3" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục" name="member_bookstore"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả Thành Viên</label>
                                   <textarea style="resize: none" rows="8" class="form-control" id="editor3" placeholder="Mô tả danh mục" name="member_content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input name="member_image" type="file" id="exampleInputFile">
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nhóm ngành nghề</label>
                                    <select name="use_work_id" class="form-control m-bot15">
                                        @foreach($work as $key => $cate)
                                        <option value="{{$cate->work_id}}">{{$cate->work_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="Add-User" class="btn btn-info">Thêm Thành Viên</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection