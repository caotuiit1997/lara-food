@extends('admin.admin_home')
@section('title','Product')
@section('content')
<div class="row">
    <div class="col-sm-6">
    	<h4 class="card-title">Sửa sản phẩm</h4>

		{!! Form::open(array('url' => 'dashboard/product/'.$product->id, 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tên sản phẩm</label>
		    {!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'name']); !!}
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Giá</label>
		    {!! Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'price']); !!}
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Hình ảnh</label>
		    <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
		    {!! Form::text('description', $product->description, ['class' => 'form-control', 'placeholder' => 'price']); !!}
		  </div>
		  <div class="form-group">
		  	<label>Danh mục</label>
		  	{!! Form::select('category_id',$parent_categories, '', ['class' => 'form-control']); !!}
		  </div>
		  {!! Form::button('Sửa', ['type' => 'submit', 'class' => 'btn btn-success']); !!}
		{!! Form::close() !!}
    </div>
    <div class="col-sm-6">
    	<img  src="{{ url(''.$product->image.'') }}" style="width:500px; height:500px; margin: 0 auto" id="output" src="" alt="Product image here!">
    </div>
</div>
@stop
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
