<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>注册</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #eee;
        }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }

        .code{
        width:80px;
    }
    </style>

 <script>
 function init(){
    if(myform.username.value=="")
    {
        alert("请输入用户名");
        //将光标移动到文本框中
        myform.username.focus();
        return false;
    }
    if (myform.userpwd.value=="")
    {
        alert("请输入密码");
        myform.userpwd.focus();
        return false;
    }
    if (myform.confirm.value=="")
    {
        alert("请再输入一次密码");
        myform.confirm.focus();
        return false;
    }
    if (myform.code.value=="")
    {
        alert("请输入验证码");
        myform.code.focus();
        return false;
    }
}
</script>

</head>
<body>
<div class="container">
<form action="regcheck.php" class="form-signin" method="post" onsubmit="return init();" name="myform" >

        <h2 class="form-signin-heading">请注册</h2>
                                                                       
        <div >

            <span><input type="text" name="username" id="username" class="form-control" placeholder="请输入用户名" /></span>
            <br>
                                                                          
            <span><input type="password" name="userpwd" id="userpwd" class="form-control" placeholder="请输入密码" ></span>
            <br>
                                                                               
            <span><input type="password" name="confirm" id="confirm" class="form-control" placeholder="请确认密码" ></span>
            <br>

            <span><button class="btn btn-lg btn-primary btn-block">注册</button></span>


        </div>
                                                                      
     <span><input  type = "hidden" name = "hidden"  value = "hidden"  /></span>


</form>
</body>
</html>