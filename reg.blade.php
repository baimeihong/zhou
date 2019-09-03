<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<style>
    #btn{
        width: 5%;
        transition: width 2s;
    }
    #btn:hover{
        width: 10%;
    }
</style>
<body>
<form class="form-horizontal" method="post" action="/regDo">
    {{csrf_field()}}
    <div class="col-sm-10">
        <h2 >欢迎注册QQ</h2>
        <h4>每一天 乐在沟通 <span style="margin-left: 40px"><a href="#">免费靓号</a></span></h4>
    </div>
    <div class="form-group" style="padding-top:100px ">
        <div class="col-sm-2">
            <input type="text" class="form-control" id="inputEmail3" placeholder="昵称" name="nikename">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pwd">
        </div>
    </div>
    <div class="form-group">
         <span>
                <select class="form-control" style="width: 8%;float: left">
                      <option>+86</option>
                      <option>+852</option>
                      <option>+853</option>
                      <option>+886</option>
                </select>
            </span>
        <div class="col-sm-1">
            <input type="tel" class="form-control" id="inputPassword3" placeholder="手机号" style="float: left" name="tel">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="btn">注册</button>
    </div>
</form>
</body>
</html>
