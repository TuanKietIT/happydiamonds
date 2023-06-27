@extends('admin_layout')
@section('admin_content')

<div class="form-w3layouts">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header style="font-weight: bold;font-size: 25px;color: #FFCC33" class="panel-heading">
                            Thêm danh mục ngành
                        </header>
                        <div class="panel-body">
                            <?php
                                 $messages = Session::get('messages');
                                 if ($messages) {
                                    echo '<span style="padding-left:230px" class="message-text">'.$messages.'</span>';
                                    Session::get('messages',null);
                                 }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-work')}}" method="post">
                                 {{csrf_field()}}   
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="work_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="5" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục" name="work_desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hiển thị</label>
                                    <select name="work_status" class="form-control m-bot15">
                                        <option value="0">Ẩn danh mục</option>
                                        <option value="1">Hiện danh mục</option>
                                    </select>
                                </div>
                                <button type="submit" name="add_work" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>
    </div>
        
</div>
@endsection