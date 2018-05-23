<?php use App\Category; ?>
@extends('admin.admin_home')
@section('title','Danh mục sản phẩm')
@section('content')

	<div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">
                        Danh mục
                        <a class="btn btn-primary pull-right" href="category/create" title="">Thêm mới</a>
                    </h4>
                    @include('message.success')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Danh mục cha</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($categories as $key => $value)
                            	@if($value->parent_id != 0)
                                <tr>
                                	<td>{{ $key + 1}}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{!! Category::getParentCategoryName($value->parent_id) !!}
                                    </td>
                                    <td>
                                    	<a class="btn btn-link" href="category/{{ $value->id}}/edit" title="">Sửa</a>
                                    	{{ Form::open(array('url' => 'dashboard/category/' . $value->id)) }}
								            {{ Form::hidden('_method', 'DELETE') }}
								            {{ Form::submit('Xóa', array('class' => 'btn btn-link')) }}
								        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop