@extends('admin.admin_home')
@section('title','Thêm sản phẩm')
@section('content')
<div class="row">
    <div class="col-sm-6">
    	<h4 class="card-title">Thêm sản phẩm mới</h4>
		{!! Form::open(array('url' => 'dashboard/product', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
			{{ csrf_field() }}
		  <div class="form-group">
		    <label>Tên sản phẩm</label>
		    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name']); !!}
		  </div>
		  <div class="form-group">
		    <label>Giá</label>
		    {!! Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'price']); !!}
		  </div>
		  <div class="form-group">
		    <label style="padding: 10px; border: 1px dashed silver" for="img">Thêm hình ảnh (Số hình: <span id="img_number">0</span>/1)</label>
		    <input style="display: none" id="img" type="file" name="image" accept="image/*" onchange="loadFile(event)">
		  </div>
		  <div class="form-group">
		    <label>Mô tả sản phẩm</label>
		    {!! Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'price']); !!}
		  </div>
		  <div class="form-group">
		  	<label>Danh mục</label>
		  	{!! Form::select('category_id',$parent_categories, '', ['class' => 'form-control']); !!}
		  </div>
		  {!! Form::button('Thêm', ['type' => 'submit', 'class' => 'btn btn-success']); !!}
		{!! Form::close() !!}
    </div>
    <div class="col-sm-6">
    	<img style="width:500px; height:500px; margin: 0 auto" id="output" src="" alt="Chưa có hình ảnh!">
    </div>	
</div>
@stop
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    if (output.src) {
    	document.getElementById('img_number').innerHTML = '1';
    }
  };
</script>