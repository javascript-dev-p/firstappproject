
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نمایش کاربران</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>

            .searchhe{
                width: 250px;
                height: 30px;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin-top: 50px !important;
                margin-bottom: 20px !important;
                direction: rtl;
                position: relative;
                margin: 0 auto;

            }

            .inputcs{
                width: 250px;
                height: 30px;
                text-align: center;
                font-family: tahoma;
                font-size: 14px;
                color: rgba(108, 122, 137, 1);
                background-color: rgba(242, 241, 239, 1);
                outline: none;
                border: 1px solid rgba(108, 122, 137, 1);
                border-radius: 20px;
                
            }

            .imgcs{
                position: absolute;
                right: 8px;
                height: 20px;
                color: #fff;
                background-color: transparent;
                cursor: pointer;
            }

            h3{
                color: rgba(108, 122, 137, 1);
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: tahoma;
                margin-top: 50px !important;
                border: 1px solid rgba(108, 122, 137, 1);
                border-radius: 10px;
                width: 250px;
                height: 40px;
                margin: 0 auto;
                margin-bottom: 10px !important;
                line-height: 28px;
                background-color: rgba(242, 241, 239, 1);
                
            }
            
        

        #list-item2{
            background-color: rgba(108, 122, 137, 1);
            color: #fff;
            height: 70px;
        }

        .cardsen{
            width: 1050px;
            height: 100%;
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
            align-items: center;
            margin: 0 auto;
            flex-wrap: wrap;
            padding: 0;
            margin-top: 50px !important;

        }

        .cardhe{
            width: 245px;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            background-color: rgba(108, 122, 137, 1);
            padding: 0;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;

        }

        .cardid{
            width: 45px;
            height: 45px;
            background-color: rgb(242, 241, 239, 1);
            line-height: 25px;
            text-align: center;
            border: 1px solid rgba(108, 122, 137, 1);
            padding: 2px;
            border-radius: 100%;
            font-family: tahoma;
            font-size: 9px;
            font-weight: bold;
            color: rgba(108, 122, 137, 1);
            
        }

        .cardin{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(242, 241, 239, 1);
            width: 243px;
            height: 100%;
            padding: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border: 1px solid rgba(108, 122, 137, 1);
        }

        .indiv{
            
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            margin-left: 15px !important;
            margin-top: 10px;
        }

        .cardinp{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            direction: rtl;

        }

        .cardinp p{
            font-family: tahoma;
            font-weight: 300px;
            margin: 3px;
            color: rgba(108, 122, 137, 1);
            width: 204px;
            height: 30px;
            text-align: center;
            padding: 1px;
        }

        .ast{
            text-decoration: none;
            color: rgba(219, 10, 91, 1) !important;
        }

        .datess{
            direction: ltr !important;
        }

        .errors{
            width: 660px;
            height: 50px;
            font-family: tahoma;
            font-size: 14px;
            background-color: rgba(144, 198, 149, 1);
            color: rgba(30, 130, 76, 1);
            border: 1px solid rgba(144, 198, 149, 1);
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
            color: rgba(30, 130, 76, 1);
            font-size: 17px;
            cursor: pointer;
        }

        #p1{
            font-size: 12.5px;
        }

        #p2{
            font-size: 11.5px;
        }

        #p3{
            font-size: 11.9px;
        }

        #p4{
            font-size: 11px;
        }

        #p5{
            font-size: 11.5px;
        }
    </style>

</head>
<body>

    <div class="menu">
        <ul id="list">
            <a class="tdecor" href="{{ route('users.create') }}"><li class="list-item">افزودن کاربر</li></a>
            <a class="tdecor" href="{{ route('users.index') }}"><li id="list-item2" class="list-item"> نمایش کاربران</li></a>
            <a class="tdecor" href="{{ route('users.photoshow') }}"><li class="list-item"> تصاویر کاربران</li></a>
            <a class="tdecor" href="{{ route('users.create') }}"><li class="list-item">ویدیوهای کاربران</li></a>
            <a class="tdecor" href="{{ route('posts.index') }}"><li class="list-item">نمایش پست ها</li></a>
            <a class="tdecor" href="{{ route('posts.create') }}"><li class="list-item">ایجاد پست</li></a>
        </ul>
    </div>

    <div>
        {{ Auth :: user() -> name }}
        <a href="{{ url('/logout') }}">Logout</a>
    </div>

    @if(Session :: has('deleted_user_msg'))
        <div id="error" class="errors">
            <div id="closeerr" class="close">&times;</div>
            <strong style="margin-left: 15px !important; margin-top: 10px !important;">Success!</strong>{{ session('deleted_user_msg') }}
        </div>
    @endif

    <div class="searchhe">
        
        <img id="searchi" class="imgcs" src="{{ asset('photo/search.png') }}" alt="">

        <input id="searchin" class="inputcs" type="text" placeholder="جستجو....">
        
    </div>

    <div class="divh3">
        <h3>نمایش کاربران</h3>
    </div>

    <div id="cardsen1" class="cardsen">
        @if($users)
            @foreach($users as $user)
                <div id="indiv1" class="indiv">
                    <div class="cardhe">

                        <div class="cardid">
                            <p>{{ $user->id }}</p>
                        </div>

                    </div>

                    <div class="cardin">
                        <img src="{{ $user->photo ? asset($user->photo->path) : asset('photo/noimage.png') }}" width="245px" height="220px">

                        <div class="cardinp">
                            <p id="p1">نام : <a class="ast" href="{{ route('users.edit', $user -> id) }}" id="aname">  {{ $user -> name }}</a></p>
                            <p id="p2">ایمیل :   {{ $user -> email }}</p>
                            <p id="p3">نقش :   {{ $user -> role ? $user -> role -> name : "کاربر نقشی ندارد" }}</p>
                            <p id="p4">وضعیت :   {{ $user -> is_active == 1 ? "فعال" : "غیرفعال" }}</p>
                            <p id="p5" class="datess">{{ $user -> created_at ? $user -> created_at->diffForHumans() : "" }} : ساخت</p>
                            <p id="p5" class="datess">{{ $user -> updated_at ?  $user -> updated_at-> diffForHumans() : "" }} : به روز رسانی</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>

    <script type="text/javascript">

        document.getElementById("closeerr").onclick = function(){
            document.getElementById("error").style.display = "none";
            
        }

    </script>


</body>
</html>
