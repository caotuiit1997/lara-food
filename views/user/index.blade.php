<?php use App\Category; ?>
@extends('admin.admin_home')
@section('title','Sản phẩm')
@section('content')

	<div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">
                        Danh sách người dùng
                        <a class="btn btn-primary pull-right" href="user/create" title="">Thêm mới</a>
                    </h4>
                    @include('message.success')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Quyền</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($users as $key => $value)
                                <tr>
                                	<td>{{ $key + 1}}</td>
                                    <td>
                                    	<img style="width:200px;" src="{{ url(''.$value->image.'') }}" class="rounded" alt="Product">
                                    </td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->price }}</td>
                                    <td>
                                    	<a class="btn btn-link" href="product/{{ $value->id}}/edit" title="">Sửa</a>
                                    	{{ Form::open(array('url' => 'dashboard/user/' . $value->id)) }}
								            {{ Form::hidden('_method', 'DELETE') }}
								            {{ Form::submit('Xóa', array('class' => 'btn btn-link')) }}
								        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop