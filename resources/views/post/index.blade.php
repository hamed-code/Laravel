@extends('layouts.master')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>تاپ لرن</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> پست جدید </a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>
                {{ $message }}
            </p>
        </div>
    @endif


    <table class="table table-bordered mt-4">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>عملیات</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
{{--            @foreach($results as $result)--}}
            <td>{{ $post->user->name }}</td>
{{--            @endforeach--}}
            <td style="width: 300px">
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">نمایش</a>
                    <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">ویرایش</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    @endsection
