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
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">角色列表</h3>
        </div>
        <div class="card-body">
            <!-- Minimal style -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- checkbox -->
                    <form action="/admin/users/{{$user->id}}/role" method="POST">
                        {{csrf_field()}}
                    <div class="form-group clearfix">
                        @foreach($roles as $role)
{{--                        <div class="icheck-primary d-inline">--}}
{{--                            <input type="checkbox"  name="permissions[]"--}}
{{--                                   @if ($myPermissions->contains($permission))--}}
{{--                                checked--}}
{{--                                    @endif--}}
{{--                                value="{{$permission->id}}">--}}
{{--                            <label for="checkboxPrimary1">--}}
{{--                                {{$permission->name}}--}}
{{--                            </label>--}}
{{--                        </div>--}}
                            <div class="checkbox icheck-primary d-inline">
                                <label>
                                    <input type="checkbox" name="roles[]"
                                           @if ($myRoles->contains($role))
                                           checked
                                           @endif
                                           value="{{$role->id}}">
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach

{{--                        <div class="icheck-primary d-inline">--}}
{{--                            <input type="checkbox" id="checkboxPrimary3" disabled="">--}}
{{--                            <label for="checkboxPrimary3">--}}
{{--                                Primary checkbox--}}
{{--                            </label>--}}
{{--                        </div>--}}
                    </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                </div>

            </div>

            <!-- Minimal red style -->

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
        </div>
    </div>

@endsection
