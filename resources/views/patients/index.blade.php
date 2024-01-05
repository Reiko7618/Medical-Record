<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>sign up</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <body class="antialiased">
        <h1>sign up</h1>
        <form action="/patients" method="POST">
            @csrf
            <div class="name">
                <input type="text" name="name" placeholder="氏名">
            </div>
            
            <div class="number">
                <input type="text" name="nember" placeholder="カルテ番号">
            </div>
            
            <div class="gender">
                <input type="radio" name="gender" value="male" checked="checked"> 男
                <input type="radio" name="gender" value="female" > 女
            </div>
            
            <div class="birthday">
                <input type="date" name="birthday" placeholder="生年月日">
            </div>
            
            <div class="address">
                <input type="text" name="address" placeholder="住所">
            </div>
            <input type="submit" value="登録">
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        
    </body>
</html>
