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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>权限管理</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">主页</a></li>
                        <li class="breadcrumb-item active">权限管理</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">用户权限管理</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="/admin/permissions/create"><button type="button" class="btn btn-primary">增加权限</button></a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>权限ID</th>
                                <th>权限名</th>
                                <th>权限描述</th>
                                <th>操作</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                            <tr>
                                <td>{{$permission->id}}.</td>
                                <td>{{$permission->name}}
                                </td>
                                <td>{{$permission->description}}
                                </td>
{{--                                /permissions/{permission}/delete--}}
                                <td style="text-align: center">
                                    <a href="/admin/roles/{{$permission->id}}/permission"> <button type="button" class="btn btn-primary">编辑权限</button></a>
                                    <a href="/admin/permissions/{{$permission->id}}/delete"> <button type="button" class="btn btn-danger">删除</button></a>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                        Launch Default Modal
                                    </button>
                                </td>

                            </tr>
                            @endforeach

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">管理员用户信息更改</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">保存</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
