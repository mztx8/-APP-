<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/www/wwwroot/mov.mztx8.cn/application/app/view/index/m.html";i:1550541204;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=no">
<meta name="applicable-device" content="pc,mobile">
<title>慢慢看-精彩不断</title>
<link rel="stylesheet" href="/public/static/m/style.css">
<script src="/public/static/m/jquery-2.1.4.min.js"></script>

<script>
window.onload=window.onresize=function(){
    document.documentElement.style.fontSize=20*document.documentElement.clientWidth/375+'px'
};
</script>
<style type="text/css">
<!--
.STYLE1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>

<div class="box">
      <img src="http://mov.mztx8.cn/tb/logo.png" width="100%" border="0" >
  <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="FF5B5C" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="FF5B5C"><iframe src="http://mov.mztx8.cn/shuju" width="100%" height=150 marginheight="0" marginwidth="0" frameborder="0" scrolling="no"></iframe></td>
  </tr>
  <tr>
    <td bgcolor="FF5B5C"><div align="center"><span class="STYLE1">&nbsp;&nbsp;慢慢看</span></div></td>
  </tr>
  <!--
    <tr>
    <td><video width="100%" src="https://cloud.video.taobao.com//play/u/1097399497/p/1/e/6/t/1/219032295049.mp4" controls="controls" autoplay="autoplay" loop="loop" poster="https://img.alicdn.com/imgextra/i3/256126368/O1CN01g4JN3D1wuad8R8I8n_!!256126368.jpg">
视频
</video></td>
  </tr>-->
</table>
<a href="安装下载地址"><img src="http://mov.mztx8.cn/tb/zs.png" width="100%" border="0" ></a></div>
    <script>
    $('.down').click(function(){
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
        if(isAndroid)
        {
            var weixin=is_weixin();
            if(weixin){
                $('.shade_share').css('display','block');
                $('.share_pic').css('display','block');
            }else{
                window.location.href="安装下载地址";  /*这里是分发地址更换
            }
        }else{
            window.location.href="安装下载地址";     /*这里是分发地址更换
        }
    });

//js判断微信浏览器的代码：

function is_weixin(){
    var ua = navigator.userAgent.toLowerCase();
    var qq=ua.match(/MQQBrowser/i)=="mqqbrowser";
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        return true;
    }else if(ua.indexOf('mobile mqqbrowser')>-1){
        return true;
    }
    else if(ua.match(/QQ/i) == "qq"&&qq==false){
        return true;
    }else if (ua.match(/WeiBo/i) == "weibo") {
        return true;
    }else if(ua.match(/Alipay/i)=="alipay"){
        return true;
    }else {
        return false;
    }
}
</script>
</body>
</html>
