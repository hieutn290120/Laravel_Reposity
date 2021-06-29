@extends('layouts.home')
@section('content')
@section('title','Đăng Nhập')
<div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">Đăng Nhập</div>
                <div class="card-body">
                    
                    <form name="form-login" id="form-login"  onsubmit="return false" action="#" method="POST">
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

                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="{{url('/forgot-password')}}">Lấy lại mật khẩu?</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/dangki')}}">Đăng kí</a>
                            </div>
                        </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Đăng Nhập
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection

@push('script')

<script  type="text/javascript">
    $(document).ready(function(){

        $("#form-login").validate(
            {
                rules: {
                    email: "required",
                    password: {
                        required: true,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    password: {
                        required: "Vui lòng điền mật khẩu!",
                        minlength: "Mật khẩu của tối thiểu 10 kí tự!"
                    },
                    email: "Vui Lòng điền địa chỉ email!",
                }
            }
        );


        $('#form-login').submit(async function() {

            let URL = '{{url('')}}/api/dangnhap';
            let object_API = await Login();

            $.ajax({
                url: URL,
                type: "POST",
                data: object_API.object_API,
                    success: function(res){
                       if(res.status === 500 ){
                            alert(res.description)
                        };
                        console.log(res);
                    },
                    error: function(err){
                        console.log(err);
                        //  alert('Đã xảy ra lỗi vui lòng thử lại');
                    }
            })
            
        })

        function Login() {
            return new Promise((resolve,reject) => {
                let array = $('#form-login').serializeArray();
                let object_API = {};
                var flag = true;
                array.forEach(x => {
                        object_API[x.name] = x.value;
                        if(!x.value){
                            flag = false;
                        }
                })
                if(flag){
                        resolve({object_API,'login':'login'})
                }    
                
                reject({'status':404})
            })
        }
    })
</script>

<link rel="stylesheet" href="{{ asset('/assets/css/register.css')}}">
@endpush