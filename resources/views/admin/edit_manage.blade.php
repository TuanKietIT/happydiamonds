@extends('admin_layout')
@section('admin_content')

<div class="form-w3layouts">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header style="font-weight: bold;font-size: 25px;color: #FFCC33" class="panel-heading">
                            Thêm bài viết
                        </header>
                        <div class="panel-body">
                             <?php
                                 $message1 = Session::get('message1');
                                 if ($message1) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$message1.'</span>';
                                    Session::get('message1',null);
                                 }
                            ?>
                            <div class="position-center">
                                 @foreach($edit_manage as $key =>$managed)
                                <form role="form" action="{{URL::to('/update-manage/'.$managed->manage_id)}}" method="post" id="formDemo" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ Tên</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="manage_name" value="{{$managed->manage_name}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Chức vụ</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="manage_local" value="{{$managed->manage_local}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Công Ty</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="manage_company" value="{{$managed->manage_company}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input name="manage_image" type="file" id="exampleInputFile" value="{{$managed->manage_image}}">
                                    <p class="help-block"></p>
                                    <img src="{{URL::to('public/upload/member/'.$managed->manage_image)}}" width="100" height="100" >
                                </div>
                                
                                <button type="submit" name="Add-User" class="btn btn-info">Cập nhật bài viết</button>
                            </form>
                            @endforeach
                            </div>
                          
                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection