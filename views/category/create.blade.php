@extends('admin.admin_home')
@section('title','Thêm danh mục sản phẩm')
@section('content')
<div class="row">
    <div class="col-sm-6">
    	<h4 class="card-title">Thêm danh mục mới </h4>
		{!! Form::open(array('url' => 'dashboard/category', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
			{{ csrf_field() }}
		  <div class="form-group">
		    <label>Tên danh mục</label>
		    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name']); !!}
		  </div>

		  <div class="form-group">
		    <label>Tên danh mục</label>
		    {!! Form::select('parent_id',$parent_categories, '', ['class' => 'form-control']); !!}
		  </div>
		  
		  {!! Form::button('Thêm', ['type' => 'submit', 'class' => 'btn btn-success']); !!}
		{!! Form::close() !!}
    </div>	
</div>
@stop