@extends('layouts.home')
@section('content')

@section('title','Đăng Kí')
<div class="row justify-content-center">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form id="form-register" action="#" onsubmit="return false" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Tên đầy đủ <i class="required">(*)</i> </label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                        <input  type="password" id="password" class="form-control" name="password" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="comfirmpassword" class="col-md-4 col-form-label text-md-right">Lặp lại mật khẩu <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                        <input  type="password" id="comfirmpassword" class="form-control" name="comfirmpassword" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Số Điện Thoại</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Địa Chỉ <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                        <input type="text" id="address" class="form-control" name="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Giới Tính <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                       <select class="form-control" name="gender" id="gender">
                                           <option value="0">Nam</option>
                                           <option value="1">Nữ</option>
                                           <option value="2">Khác</option>
                                       </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right">Năm Sinh <i class="required">(*)</i></label>
                                    <div class="col-md-6">
                                        <input id="dob" class="form-control" name="dob" > 
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

@push('script')
<script type="text/javascript">
  
    $(document).ready(function(){
        
        $("#dob").datepicker({
            changeMonth: true,
            changeYear: true
        });

        $("#form-register").validate(
            {
                rules: {
                    email: "required",
                    fullname: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 10
                    },
                    comfirmpassword: {
                        required: true,
                        minlength: 10,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    gender: "required",
                    dob: "required",
                    address: "required",
                },
                messages: {
                    fullname: {
                        required: "Vui Lòng nhập đầy đủ tên!",
                        minlength: "Tên của bạn tối thiểu từ 2 kí tự!"
                    },
                    password: {
                        required: "Vui lòng điền mật khẩu!",
                        minlength: "Mật khẩu của tối thiểu 10 kí tự!"
                    },
                    comfirmpassword: {
                        required: "Vui lòng nhập lại mật khẩu!",
                        minlength: "Mật khẩu của tối thiểu 10 kí tự!",
                        equalTo: "Mật khẩu của bạn phải trùng nhau!"
                    },
                    email: "Vui Lòng điền địa chỉ email!",
                    gender: "Vui Lòng chọn giới tính!",
                    dob: "Vui Lòng chọn ngày tháng năm sinh!",
                    address: "Vui Lòng nhập địa chỉ!"
                }
            }
        );

        $('#form-register').submit( async function(){

           let object_API = await createUser();
           let URL = '{{url('')}}/dangki';
          
            console.log(object_API);
           
            if(object_API.create_user === 'create_user'){
                // $.ajax({
                //     url: URL,
                //     type: "POST",
                //     data: object_API.object_API,
                //     success: function(res){
                //         console.log(res);
                //     }
                // })
            }
        })
        
        function createUser(){
            return new Promise((resolve, reject) => {
                let array = $('#form-register').serializeArray();
                let object_API = {};
                array.forEach(x => {
                    object_API[x.name] = x.value;
                })
                
                if(array.length > 1 ){
                    resolve({object_API,'create_user':'create_user'})
                }
                reject({'status':404})
            })
        }


    })
       
</script>

<link rel="stylesheet" href="{{ asset('/assets/css/register.css')}}">
@endpush