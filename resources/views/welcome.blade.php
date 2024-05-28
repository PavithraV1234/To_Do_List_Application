<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My To Do List</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color:#1F2937;
           
            height: 90px;
        }
        .navbar a {
            float: right;
            
            color: #f2f2f2;
            text-align: center;
            padding: 30px 30px 30px 30px;
            text-decoration: none;
            font-size: 20px;
            
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .content{
           
            
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10px;
  align-content: center;
  align-items: center;
  text-align: center;
        }
    </style>
</head>
<body>

<div class="navbar">
    @if (Route::has('login'))
               <B> <div >
                    @auth
                        <a href="{{ route('dashboard') }}" >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div></B>
            @endif
</div>
<div class="content">
<b><h1 style="font-size: 60px; font-family: 'Brush Script MT'; color:#1F2937;">MY TO-DO LIST</h1></b>
<b><h2 style="font-size: 60px; font-family: 'Brush Script MT'; color:#1F2937;">Welcome</h2></b>
<pre style="font-size: 30px; font-family:'Times New Roman', Times, serif; color:#1F2937;">Organize, Categorize and Manage
your tasks here!!</pre>
</div>

    </body>
</html>
