@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/styles.css')}}">

@section('content')
    <div class="menu">
        <ul id="list">
            <a class="tdecor" href="{{Auth :: check() ? route('users.create') : url('/login')}}"><li class="list-item">افزودن کاربر</li></a>
            <a class="tdecor" href="{{Auth :: check() ? route('users.index') : url('/login')}}"><li class="list-item"> نمایش کاربران</li></a>
            <a class="tdecor" href="{{Auth :: check() ? route('users.photoshow') : url('/login')}}"><li class="list-item"> تصاویر کاربران</li></a>
            <a class="tdecor" href="{{Auth :: check() ? route('users.create') : url('/login')}}"><li class="list-item">ویدیوهای کاربران</li></a>
            <a class="tdecor" href="{{Auth :: check() ? route('posts.index') : url('/login')}}"><li class="list-item">نمایش پست ها</li></a>
            <a class="tdecor" href="{{Auth :: check() ? route('posts.create') : url('/login')}}"><li class="list-item">ایجاد پست</li></a>
        </ul>
    </div>
@endsection
