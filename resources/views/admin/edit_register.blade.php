@extends('admin_layout')
@section('admin_content')

<div class="form-w3layouts">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header style="font-weight: bold;font-size: 25px;color: #FFCC33" class="panel-heading">
                            Cập nhật danh mục ngành
                        </header>
                         <?php
                                 $updates = Session::get('updates');
                                 if ($updates) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$updates.'</span>';
                                    Session::get('updates',null);
                                 }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_register as $key => $edit)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-register/'.$edit->register_id)}}" method="post">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ Tên</label>
                                    <input type="text" value="{{$edit->register_name}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Công ty</label>
                                    <textarea style="resize: none" rows="5" class="form-control" id="exampleInputPassword1" name="register_company">{{$edit->register_company}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chức vụ</label>
                                    <input type="text" value="{{$edit->register_local}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_local">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lĩnh vực kinh doanh</label>
                                    <input type="text" value="{{$edit->register_field}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_field">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điện Thoại</label>
                                    <input type="text" value="{{$edit->register_phone}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$edit->register_email}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Người giới thiệu</label>
                                    <input type="text" value="{{$edit->register_presenter}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="register_presenter">
                                </div>


                                <button type="submit" name="update_register" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection