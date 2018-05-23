@include('layouts.static_header');
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tên tài khoản/ Địa chỉ email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập vào đây">
			    <small id="emailHelp" class="form-text text-muted">Hãy đảm bảo tài khoản/ mật khẩu của bạn là bảo mật tuyệt đối</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Mật khẩu</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập vào đây">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Đăng nhập</button>
			</form>
		</div>
	</div>
</div>