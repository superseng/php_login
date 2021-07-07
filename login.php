<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />


 <title>登陆</title>

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

       
    </style>

 <script>
//  function init(){
//     if(myform.username.value=="")
//     {
//         alert("请输入用户名");
//         //将光标移动到文本框中
//         myform.username.focus();
//         return false;
//     }
//     if (myform.userpwd.value=="")
//     {
//         alert("请输入密码");
//         myform.userpwd.focus();
//         return false;
//     }
//     if (myform.code.value=="")
//     {
//         alert("请输入验证码");
//         myform.code.focus();
//         return false;
//     }
// }
function r()
{
var username=document.getElementById("username");
var pass=document.getElementById("password");
if(username.value=="")
{
alert("请输入用户名");
username.focus();
return ;
}
else if(pass.value=="")
{
alert("请输入用户名");
username.focus();
return ;
}
else if(pass.value=="")
{
alert("请输入密码");
return;
}
else if((pass.value=="123456")&&(username.value=="123456"))
{
frm.submit();
}
else
{
alert("登录失败，请检查用户名和bai密码是否有误！");
return;
}
return true;
}
</script>

</head>
<body>
<form action="index.html" method="post" class="form-signin" onsubmit="return r();" name="myform" >

    <h2 class="form-signin-heading">用户登录</h2>
    <div >
        <span >用户名:</span>
        <span><input type="text" name="username" id="username" class="form-control" placeholder="请输入用户名(123456)" /></span>
        <br>
    
        <span >密&#12288码:</span>
         <span><input type="password" name="userpwd" id="userpwd" class="form-control" placeholder="请输入密码(123456)" ></span>
        <br>
        <!-- <span><button class="button">立即登陆</button></span> -->
        <span><button class="btn btn-lg btn-primary btn-block" onclick="r();">立即登陆</button></span>
        <br>

    </div>
 
    <span><input  type = "hidden" name = "hidden"  value = "hidden"  /></span>
</form>
</body>
</html>


    