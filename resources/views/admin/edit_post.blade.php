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
                                 @foreach($edit_post as $key =>$post)
                                <form role="form" action="{{URL::to('/update-post/'.$post->post_id)}}" method="post" id="formDemo" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bài viết</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="post_title" value="{{$post->post_title}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                                    <textarea style="resize: none" rows="3" class="form-control" id="exampleInputEmail1"  placeholder="Mô tả danh mục" name="post_desc" >{{$post->post_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none" rows="8" class="form-control" id="editor2" name="post_content" >{{$post->post_content}}</textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Nội dung</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="post_meta_dest" value="{{$post->post_meta_dest}}">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input name="post_image" type="file" id="exampleInputFile" value="{{$post->post_image}}">
                                    <p class="help-block"></p>
                                    <img src="{{URL::to('public/upload/member/'.$post->post_image)}}" width="100" height="100" >
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