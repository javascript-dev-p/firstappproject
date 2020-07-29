
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن کاربر</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>
        h3{
            color: rgba(108, 122, 137, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: tahoma;
            margin-top: 30px !important;
            border: 1px solid rgba(108, 122, 137, 1);
            border-radius: 10px;
            width: 250px;
            height: 40px;
            margin: 0 auto;
            margin-bottom: 10px !important;
            line-height: 28px;
            background-color: rgba(242, 241, 239, 1);
            
        }

        #list-item6{
            background-color: rgba(108, 122, 137, 1);
            color: #fff;
            height: 70px;
        }

        .formstyle{
            
            background: linear-gradient(to top, rgba(242, 241, 239, 1),
            rgba(242, 241, 239, 1));
            width: 350px;
            margin: 0 auto;
            text-align: right;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: tahoma;
            font-size: 14px;
            color: rgba(108, 122, 137, 1);
            font-weight: bold;
            border-radius: 30px;
            padding: 20px;
            border: 1px solid rgba(108, 122, 137, 1);
            
        }

        .elements{
            direction: rtl;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 10px;
            margin-top: 15px;
        }

        .labtext{
            font-family: tahoma;
            margin-left: 5px;
            width: 40px;
            text-align: center;
        }

        .instyle{
            width: 250px;
            height: 25px;
            text-align: center;
            font-family: tahoma;
            font-size: 14px;
            color: rgba(108, 122, 137, 1);
            font-weight: bold;
            background: transparent;
            border: 1px solid rgba(108, 122, 137, 1);
            border-radius: 10px;
            outline: none;
            margin-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .instyle1{
            width: 250px;
            height: 150px;
            text-align: center;
            font-family: tahoma;
            font-size: 14px;
            color: rgba(108, 122, 137, 1);
            font-weight: bold;
            background: transparent;
            border: 1px solid rgba(108, 122, 137, 1);
            border-radius: 10px;
            outline: none;
            margin-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #filein{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .subbtn{
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            background-color: rgba(108, 122, 137, 1);
            outline: none;
            border: none;
            color: #fff;
            font-family: tahoma;
            font-size: 14px;
            text-align: center;
            border-radius: 10px;
            cursor: pointer;
            
        }

        .laform{
            direction: rtl;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            
        }
        
        .filestyle{
            border: 1px solid rgba(108, 122, 137, 1);
            margin-right:-92px;
            height:25px;
            width: 310px;
            outline:none;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 11px;
            border-bottom-right-radius: 11px;
            color: rgba(242, 241, 239, 1);

        }
        

        .filelabstyle{
            text-align:center;
            color:#fff;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            font-size:12px;
            line-height: 20px;
            width: 91px; 
            height:25px; 
            background-color:rgba(108, 122, 137, 1);
            z-index: 2;
            cursor: pointer;
        }

        .errors{
            width: 660px;
            height: 100%;
            font-family: tahoma;
            font-size: 14px;
            background-color: rgba(224, 130, 131, 1);
            color: rgba(207, 0, 15, 1);
            border: 1px solid rgba(224, 130, 131, 1);
            border-radius: 15px;
            margin: 0 auto;
            margin-top: 40px !important;
            position: relative;
            
        }

        .close{
            position: absolute;
            text-align: right;
            top: 1px;
            right: 7px;
            color: rgba(207, 0, 15, 1);
            font-size: 17px;
            cursor: pointer;
        }

        .animte{
            width: 40px;
            height: 10px;
            background-color: rgba(108, 122, 137, 1);
            border-radius: 100%;
            margin-top: 10px;
            margin-left: 400px;
            animation: anime 5s 1s both;
        }

        @keyframes anime{
            0%{
                width : 40px;
            }
            100%{
                width : 552px;
            }
        }

        

    </style>

</head>
<body>

    <div class="menu">
        <ul id="list">
            <a class="tdecor" href="{{ route('users.create') }}"><li class="list-item">افزودن کاربر</li></a>
            <a class="tdecor" href="{{ route('users.index') }}"><li class="list-item"> نمایش کاربران</li></a>
            <a class="tdecor" href="{{ route('users.photoshow') }}"><li class="list-item"> تصاویر کاربران</li></a>
            <a class="tdecor" href="{{ route('users.create') }}"><li class="list-item">ویدیوهای کاربران</li></a>
            <a class="tdecor" href="{{ route('posts.index') }}"><li class="list-item">نمایش پست ها</li></a>
            <a class="tdecor" href="{{ route('posts.create') }}"><li id="list-item6" class="list-item">ایجاد پست</li></a>
        </ul>
    </div>

    @include('includes.formErrors');


    <div>
        <h3 id="head">افزودن پست جدید</h3>
    </div>

    {{--  <form class="formstyle" action="">
        <div class="elements">
            <label class="labtext">نام</label>
            <input class="instyle" type="text">
        </div>

        <div class="elements">
            <label class="labtext">ایمیل</label>
            <input class="instyle" type="text">
        </div>

        <div class="elements">
            <label class="labtext">پسورد</label>
            <input class="instyle" type="password">
        </div>

        <div class="elements">
            <label class="labtext">نقش کاربر</label>
            <input class="instyle" type="text">
        </div>

        <div class="elements">
            <label class="labtext">وضعیت کاربر</label>
            <input class="instyle" type="text">
        </div>

        <div class="elements">
            <label style="z-index: 2; width: 91px; height:25px; background-color:rgba(246, 36, 89, 1);
            text-align:center;
            color:#fff;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            font-size:12px;
            line-height: 20px;"
            
            >انتخاب تصویر</label>
            <input name="file" value="click"  type="file" style="
            border: 1px solid rgba(246, 36, 89, 1);
            margin-right:-92px;
            height:25px;
            width: 310px;
            outline:none;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 11px;
            border-bottom-right-radius: 11px;

            ">
        </div>

        <div class="elements">
            
            <input class="subbtn" type="submit" value="افزودن">
        </div>
    </form>  --}}

    {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'class' => 'formstyle', 'files'=>true]) !!}
        <div class="elements">
            {!! Form::label('title', 'عنوان', ['class' => 'labtext']) !!}
            {!! Form::text('title', null, ['class' => 'instyle']) !!}
        </div> 
        
        <div class="elements">
            {!! Form::label('category_id', 'دسته', ['class' => 'labtext']) !!}
            {!! Form::select('category_id', ['' => 'انتخاب گزینه'] + $categories, null, ['class' => 'instyle']) !!}
        </div>  

        <div class="elements">
            {!! Form::label('body', 'متن', ['class' => 'labtext']) !!}
            {!! Form::textarea('body', null, ['class' => 'instyle1']) !!}
            
        </div> 

        <div class="elements">
            <label name="photo_id" id="la" for="fil" class="filelabstyle">انتخاب تصویر</label>
            <input class="filestyle" id="fil" name="photo_id" type="file"  >
        </div>

        <div class="elements">
            {!! Form::submit('افزودن', ['class' => 'subbtn']) !!}
        </div> 
    
    {!! Form::close() !!}

    <div class="animte">

    </div>
    
    <script type="text/javascript">
        document.getElementById("fil").onchange= function(){
            document.getElementById("fil").style.color= "rgba(108, 122, 137, 1)";
        }

        document.getElementById("closeerr").onclick = function(){
            document.getElementById("error").style.display = "none";
            
        }
    </script>
    
</body>
</html>

