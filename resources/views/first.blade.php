<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     <style>
        * {
    margin: 0;
    padding: 0;
    outline: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            padding-right: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 450px;
        }
        h2 {
            text-align: center;
            color: #333;
            padding: 8px;
        }
        .input-field {
            width: 100%;
            padding: 13px;
            margin: 10px 0;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .input-field:hover {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.6);
        }
        .btn {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background-color:rgb(72, 153, 75);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: Georgia;
            font-size:18px;
        }
        .btn:hover {
            background-color:rgb(8, 73, 11);
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            text-decoration: none;
            color: #007BFF;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        
        .sing-up {
            text-align: center;
            margin-top: 10px;
        }
        .sing-up a {
            text-decoration: none;
            color: #0f7a3c;
        }
        .sing-up a:hover {
            color: #17cc62;
            /* text-decoration: underline; */
        }
    </style>
    </head>
    <body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form>
            <input type="text" class="input-field" placeholder="البريد الإلكتروني" required>
            <input type="password" class="input-field" placeholder="كلمة المرور" required>
            <button type="submit" class="btn">دخول</button>
        </form>
        <div class="forgot-password">
            <a href="#">نسيت كلمة المرور؟</a>
            <div class="sing-up ">
                <a href="#">sing up</a>
        </div>
    </div>
    </body>
</html>
