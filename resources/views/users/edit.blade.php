@extends('layouts.root')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>更新个人信息</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        
                    </a>
                </div>
                <form method="POST" action="{{ route('users.update', [$user]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">用户名:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="password">新密码:</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">确认密码:</label>
                        <input type="password" name="password_confirmation" class="form-control"
                        value="{{ old('password_confirmation') }}">
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop