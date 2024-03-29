<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/mov.mztx8.cn/application/login/view/login/index.html";i:1542128292;}*/ ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>管理系统</title>
  <meta name="description" content="管理系统">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/public/static/amz/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/public/static/amz/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/public/static/amz/css/amazeui.min.css" />
  <link rel="stylesheet" href="/public/static/amz/css/admin.css">
  <link rel="stylesheet" href="/public/static/amz/css/app.css">
  
      <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>
  
  
</head>

<body data-type="login">

  
  
  
  
  
            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    // Reveal Login form
                    setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);


                    // Validation and Ajax action
                    $("form#login").validate({
                        rules: {
                            username: {
                                required: true
                            },

                            passwd: {
                                required: true
                            }
                        },

                        messages: {
                            username: {
                                required: '请输入您的账号.'
                            },

                            passwd: {
                                required: '请输入您的密码.'
                            }
                        },

                        // Form Processing via AJAX
                        submitHandler: function(form)
                        {
                            show_loading_bar(70); // Fill progress bar to 70% (just a given value)

                            var opts = {
                                "closeButton": true,
                                "debug": false,
                                "positionClass": "toast-top-full-width",
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            };

                            $.ajax({
                                url: "<?php echo url('login/login/veify'); ?>",
                                method: 'POST',
                                dataType: 'json',
                                data: {
                                    do_login: true,
                                    username: $(form).find('#username').val(),
                                    passwd: $(form).find('#passwd').val(),
                                },
                                success: function(resp)
                                {
                                    if(resp.code=='1')
                                    {
                                        window.location='<?php echo url("index/index/index"); ?>';
                                    }else{
                                        $('#alert').html('<span style="color: #fff">账号密码错误或无权限!</span>')
                                    }

                                }
                            });

                        }
                    });

                    // Set Form focus
                    $("form#login .form-group:has(.form-control):first .form-control").focus();
                });
            </script>
  
  
  
  
  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				管理系统
				
			</div>
		</div>

		<div class="login-font">
			<i id="alert">登录</i>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" method="post" role="form" id="login" >
				<fieldset>
					<div class="am-form-group">
						<input type="text" class="" name="username" id="username" placeholder="账户">
					</div>
					<div class="am-form-group">
						<input type="password" class="" name="passwd" id="passwd" placeholder="密码">
					</div>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  
  
  
  
<!-- Bottom Scripts -->
<script src="/public/static/assets/js/bootstrap.min.js"></script>
<script src="/public/static/assets/js/TweenMax.min.js"></script>
<script src="/public/static/assets/js/resizeable.js"></script>
<script src="/public/static/assets/js/joinable.js"></script>
<script src="/public/static/assets/js/xenon-api.js"></script>
<script src="/public/static/assets/js/xenon-toggles.js"></script>
<script src="/public/static/assets/js/jquery-validate/jquery.validate.min.js"></script>
<script src="/public/static/assets/js/toastr/toastr.min.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="/public/static/assets/js/xenon-custom.js"></script>
  
  
  
</body>

</html>