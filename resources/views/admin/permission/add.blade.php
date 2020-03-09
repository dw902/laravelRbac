@extends("admin.layout.main")
@section("content")



<!-- Content Header (Page header) -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">新增权限</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/admin/permissions/store" method="post">
            {{csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">权限名称</label>
                    <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="权限名">
                </div>
                <div class="form-group">
                    <label>角色描述</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="必须填入描述"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>

@endsection
