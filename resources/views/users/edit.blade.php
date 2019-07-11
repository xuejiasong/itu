@extends('layouts.root')

@section('content')

<div class="row">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>

            <div class="card-body">

                <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    @include('shared._errors')
                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input class="form-control" type="text" name="name" id="name-field"
                            value="{{ old('name', $user->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="password-field">密码</label>
                        <input class="form-control" type="password" name="password" id="password-field"
                            value="{{ old('password', $user->password) }}" />
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <textarea name="introduction" id="introduction-field" class="form-control"
                            rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop