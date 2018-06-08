@extends('layouts.admin')
@section('title') Category | PHP0317E @endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Category</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category List</h1>
            </div>
        </div>

        @if(Session::has('success'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert bg-success" role="alert">
                        <svg class="glyph stroked checkmark">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use>
                        </svg>
                        {{ Session::get('success') }}
                        <a href="#" class="pull-right">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Items</div>
                    <a href="{{ url('admin/category/create') }}" class="btn">Create New</a>
                    {!! Form::open(['method' => 'GET', 'url' => 'admin/category']) !!}
                        <input type="text" name="keyword"
                               @if(Request::has('keyword'))
                                value="{{ Request::get('keyword') }}"
                               @endif
                               placeholder="Type your word..." />
                        <input type="submit" value="Search" />
                    {!! Form::close() !!}
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-container">
                                <div class="fixed-table-body">
                                    <table data-toggle="table"
                                           data-show-refresh="true"
                                           data-show-toggle="true"
                                           data-show-columns="true"
                                           data-search="true"
                                           data-select-item-name="toolbar1"
                                           data-pagination="true"
                                           data-sort-name="name"
                                           data-sort-order="desc"
                                           class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="bs-checkbox " style="width: 36px; ">
                                                <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="">
                                                <div class="th-inner sortable">ID</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="">
                                                <div class="th-inner sortable">Category
                                                    <span class="order">
                                                            <span class="caret" style="margin: 10px 5px;"></span>
                                                        </span>
                                                </div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($abc)
                                            @foreach($abc as $item)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox"/>
                                                    </td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE', 'url' => 'admin/category/' . $item->id]) !!}
                                                            <a href="{{ url('admin/category/'.$item->id.'/edit') }}"
                                                               class="btn">Edit</a>
                                                            <button type="submit" class="btn" onclick="return confirm('Are you sure?');">Delete</button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection