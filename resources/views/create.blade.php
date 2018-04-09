@extends('default')

@section('title', 'New Post')

@section('content')
<form action="{{ url('/posts') }}" method="post">
    <form action="{{ url('/posts') }}" method="post">
        <div id="app">
                <create-tag></create-tag>
        </div>
        <p>
            <span style="color:red; font-weight:bold">*</span><input type="text" name="skype" value="{{ old('skype') }}" placeholder="enter skypeID">
        </p>
        <p>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="enter name">
        </p>
        <p>
            <input type="radio" name="sex" value="male" checked="checked">男
            <input type="radio" name="sex" id="female">女
        </p>
        <p>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="enter title">
        </p>
        <p>
            <span style="color:red; font-weight:bold">*</span><textarea name="body" rows="8" cols="40" value="{{ old('body') }}" placeholder="enter comment"></textarea>
        </p>
        <p>
            <span style="color:red; font-weight:bold">*</span><input type="password" name="password" placeholder="enter password">
        </p>
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection