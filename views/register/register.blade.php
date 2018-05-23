@extends('welcome')
@section('title', 'Đăng kí');
@section('content');
<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> ĐĂNG KÝ TÀI KHOẢN</h3>
    {!! Form::open(array('url' => 'register', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
        {{ csrf_field() }}
        {!! Form::text('name', '', ['class' => 'name wow zoomIn', 'placeholder' => 'Tên bạn']); !!}
        {!! Form::email('email', '', ['class' => 'email wow zoomIn', 'placeholder' => 'Địa chỉ e-mail']); !!}
        {!! Form::text('password', '', ['class' => 'from wow zoomIn', 'placeholder' => 'Mật khẩu']); !!}
        {!! Form::text('confirmPassword', '', ['class' => 'from wow zoomIn', 'placeholder' => 'Nhập lại mật khẩu']); !!}
        {!! Form::text('address', '', ['class' => 'from wow zoomIn', 'placeholder' => 'Địa chỉ']); !!}
        {!! Form::text('phone', '', ['class' => 'from wow zoomIn', 'placeholder' => 'Số điện thoại']); !!}
        {!! Form::file('avatar', '', ['class' => 'from wow zoomIn', 'placeholder' => 'ảnh']); !!}
        {!! Form::button('ĐĂNG KÝ', ['type' => 'submit', 'class' => 'booknow wow fadeInUp'])!!}
    {!! Form::close()!!}
    <!-- Button trigger modal -->
    <button type="button" class="booknow wow fadeInUp" data-toggle="modal" data-target="#exampleModal">
      ĐĂNG NHẬP
    </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ĐĂNG NHẬP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="get" accept-charset="utf-8">
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Địa chỉ e-mail" >
                    <br>
                    <input type="password" class="form-control" placeholder="Mật khẩu">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary">Đăng nhập</button>
                  </div>
              </form>
            </div>
          </div>
        </div> <!-- End modal -->
    </div>
</div>
@stop