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
                                 $update = Session::get('update');
                                 if ($update) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$update.'</span>';
                                    Session::get('update',null);
                                 }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_work as $key => $edit)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-work/'.$edit->work_id)}}" method="post">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{$edit->work_name}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="work_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="5" class="form-control" id="exampleInputPassword1"  name="work_desc">{{$edit->work_desc}}</textarea>
                                </div>
                                <button type="submit" name="update_work" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection