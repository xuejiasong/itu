@extends('layouts.root');

@section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-tachometer" aria-hidden="true"></i>人员管理</h1>
        <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">人员列表</a></li>
    </ul>
</div>
<!-- search -->
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-header">
                <h5>快速查询</h5>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="name" class="control-label">姓名</label>
                            <input class="form-control" type="text" placeholder="请输入姓名" name="name" id="name">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="phone" class="control-label">手机号码</label>
                            <input class="form-control" type="text" placeholder="请输入手机号码" name="phone"
                            id="phone">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="state" class="control-label">处理状态</label>
                            <select class="form-control" name="state" id="state">
                                <option>请选择</option>
                                <option value="0">未处理</option>
                                <option value="1">已处理</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-md-3'>
                            <div class="form-group">
                                <label>选择开始时间：</label>
                                <!--指定 date标记-->
                                <div class='input-group date' id='startDate'>
                                    <input type='text' class="form-control" placeholder="选择开始时间" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-3'>
                            <div class="form-group">
                                <label>选择结束时间：</label>
                                <!--指定 date标记-->
                                <div class='input-group date' id='endDate'>
                                    <input type='text' class="form-control" placeholder="选择结束时间"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="type" class="control-label">违法类型</label>
                            <select class="form-control" name="type" id="type">
                                <option>请选择</option>
                                <option value="0">行人违法</option>
                                <option value="1">电动车违法</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 align-self-end">
                            <button class="btn btn-primary" type="button"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>查询</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- search end-->
        <!-- table start-->
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-title">人员列表
                    <div class="btn-group  pull-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info" type="button">批量操作</button>
                        <div class="btn-group" role="group">
                            <button class="btn btn-info dropdown-toggle " id="btnGroupDrop1" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                              href="#">发短信</a><a class="dropdown-item" href="#">删除</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="input-control">
                            </th>
                            <th>姓名</th>
                            <th>手机号码</th>
                            <th>违法类型</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('lawList.show') }}">查看</a>
                                <a class="btn btn-success" href="{{ route('lawList.edit') }}">编辑</a>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="input-control">
                            </td>
                            <td>马克</td>
                            <td>13770418225</td>
                            <td>行人</td>
                            <td>已处理</td>
                            <td>
                                <button class="btn btn-primary" type="button">查看</button>
                                <button class="btn btn-success" type="button">编辑</button>
                                <button class="btn btn-warning" type="button">发短信</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--table end-->
</div>
   <script type="text/javascript">
      $('#startDate').datepicker({
        format: "yyyy-mm-dd",
        language: "zh-CN",
        autoclose: true,
        todayHighlight: true,
      });
      $('#endDate').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });
    </script>

@stop
