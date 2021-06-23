@extends('layouts.home')
@section('content')
@section('title','Trang Chu')
<section>
    <!-- container Start-->
    <div class="container" style="padding:0px 20px;">
    <a href="{{url('/login')}}" role="button" class="btn btn-success btn-xs">Đăng Nhập</a>
    <a href="{{url('/register')}}" role="button" class="btn btn-success btn-xs">Đăng Kí</a>
    </div>
</section>
@endsection

@push('script')
<script>

</script>

@endpush