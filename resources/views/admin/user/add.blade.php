@extends("admin.layout.main")
@section("content")
    <!-- Main content -->
{{--    <section class="content">--}}
{{--        <!-- Small boxes (Stat box) -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 col-xs-6">--}}
{{--                <!-- small box -->--}}
{{--                欢迎--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


<!-- Content Header (Page header) -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">新增用户</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/admin/users/store" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名</label>
                    <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="用户名">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="密码">
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>

@endsection
