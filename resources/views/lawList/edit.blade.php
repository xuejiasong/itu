@extends('layouts.root')


@section('content')
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/copy.css') }}" crossorigin="anonymous">
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i>添加人员</h1>
        <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">添加人员</a></li>
    </ul>
</div>
<!-- table start -->
<div class="row">
    <div class="col-md-12">
        <!-- img file start-->
        <div class="card">
            <div class="card-header">
                <h5>图片录入</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="title">
                            <div class="title-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">违章图片</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file" id="lawImg" name="lawImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <div class="title-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">人脸照片</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file" id="faceImg" name="faceImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title">
                            <div class="title-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">抓拍图片</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file" id="take" name="takeImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--img file end-->
            <!--code info start-->
            <div class="card-header">
                <h5>身份信息</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name" class="control-label">姓名</label>
                        <input class="form-control" type="text" placeholder="请输入姓名" name="name" id="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone" class="control-label">手机号码</label>
                        <input class="form-control" type="text" placeholder="请输入手机号码" name="phone" id="phone">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="code" class="control-label">身份证号码</label>
                        <input class="form-control" type="text" placeholder="请输入身份证号码" name="code" id="code">
                    </div>
                </div>
            </div>
            <!--code info end-->
            <!--law info start-->
            <div class="card-header">
                <h5>违法信息</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="lawDate" class="control-label">违法时间</label>
                        <div class='input-group date' id='lawDate'>
                            <input type='text' class="form-control" name="lawDate" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="place" class="control-label">违法地点</label>
                        <input class="form-control" type="text" placeholder="请输入违法地点" name="place" id="place">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="code" class="control-label">违法类型</label>

                        <select class="form-control" name="type" id="type">
                            <option>请选择</option>
                            <option value="0">行人违法</option>
                            <option value="1">电动车违法</option>
                        </select>

                    </div>
                </div>
            </div>
            <!-- law info end-->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="button"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>保存</button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>取消</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Google analytics script-->
<script type="text/javascript">
    $('#lawDate').datepicker({
        format: "yyyy-mm-dd",
        language: "zh-CN",
        autoclose: true,
        todayHighlight: true,
    });
    $("#lawImg").fileinput({
        theme: 'fas',
        uploadUrl: '#',
        language: "zh",
        showUpload: false,
        showRemove: false,
    }).on('filepreupload', function (event, data, previewId, index) {
        alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    });
    $("#faceImg").fileinput({
        theme: 'fas',
        uploadUrl: '#',
        language: "zh",
    }).on('filepreupload', function (event, data, previewId, index) {
        alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    });
    $("#take").fileinput({
        theme: 'fas',
        uploadUrl: '#',
        language: "zh",
    }).on('filepreupload', function (event, data, previewId, index) {
        alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    });
</script>
@stop