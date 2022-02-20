@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ساخت پست جدید</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="">بازگشت</a>
        </div>
    </div>
</div>

@include('layouts.partials.error')
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
@csrf
{{--    @method('POST/')--}}
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان:</strong>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده:</strong>
                <input type="number" name="user_id" class="form-control" placeholder="">
            </div>
{{--            <div class="col-md-6">--}}
{{--                <input name="image" type="file" class="form-control mb-3">--}}
{{--            </div>--}}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </div>

</form>
@endsection
