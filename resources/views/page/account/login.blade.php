@extends('layouts.home')
@section('content')
@section('title','Đăng Nhập')
<div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    
                    <form name="form-register" id="form-register" action="#" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                            <div class="col-md-6">
                                <input type="email" id="email" class="form-control" name="email" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                            <div class="col-md-6">
                                <input  type="password" id="password" class="form-control" name="password" >
                            </div>
                        </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                Đăng Kí
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection