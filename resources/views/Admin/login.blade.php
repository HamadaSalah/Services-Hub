
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="container">
    <header>Login Form</header>
    @if(session()->has('error'))
        <div class="alert alert-danger" style="background: #bd4343;padding: 20px;color: #FFF;font-family: cursive;">
            {{ session('error') }}
        </div>
    @endif

    <form  method="post" action="{{route('admin.login')}}" class="form login">
        @csrf
        <div class="input-field">
            <input id="login__username" type="text" name="email" class="form__input"
                   required>
            <label>Email or Username</label>
        </div>
        <div class="input-field">
            <input id="login__password" type="password" name="password" class="pswrd"
                    required>
             <span class="show">SHOW</span>
            <label>Password</label>
        </div>
        <div class="button">
            <div class="inner"></div>
            <button>LOGIN</button>
        </div>
    </form>

<script>
    var input = document.querySelector('.pswrd');
    var show = document.querySelector('.show');
    show.addEventListener('click', active);
    function active(){
        if(input.type === "password"){
            input.type = "text";
            show.style.color = "#1DA1F2";
            show.textContent = "HIDE";
        }else{
            input.type = "password";
            show.textContent = "SHOW";
            show.style.color = "#111";
        }
    }
</script>

</body>
</html>
