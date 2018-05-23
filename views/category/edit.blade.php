@extends('admin.admin_home')
@section('title','Sửa danh mục sản phẩm')
@section('content')
<div class="row">
    <div class="col-sm-6">
    	<h4 class="card-title">Sửa danh mục</h4>
		{!! Form::open(array('url' => 'dashboard/category'.$category->id.'/edit', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
			{{ csrf_field() }}
		  <div class="form-group">
		    <label>Tên danh mục</label>
		    {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'name']); !!}
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