<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Learning</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/Application/Admin/View/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/Application/Admin/View/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/Application/Admin/View/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link rel="shortcut icon" href="/Application/Admin/View/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">
<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="<?php echo U('Index/index');?>">

				<img src="/Application/Admin/View/media/image/logo.png" alt="logo" style="height: 20px;width: auto;" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/Application/Admin/View/media/image/menu-toggler.png" alt="" />

				</a>

				<!-- END RESPONSIVE MENU TOGGLER -->

				<!-- BEGIN TOP NAVIGATION MENU -->

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>你有 14 条未处理事件</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								用户权限申请 

								<span><span class="label label-success">今天</span></span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bolt"></i></span>

								用户账号异常 

								<span><span class="label label-warning">5 天内</span></span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bolt"></i></span>

								用户账号异常 

								<span><span class="label label-info">5 天内</span></span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								用户账号异常 

								<span><span class="label label-important">1 天内</span></span>

								</a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>你有 12 条新消息</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="/Application/Admin/View/media/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">张三</span>

								<span><span class="label label-info">1 天内</span></span>

								</span>

								<span class="message">

								你好，我想当管理员！

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="">查看全部消息 <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>网站系统监测</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">用户流量</span>

								<span class="percent">22%</span>

								</span>

								<span class="progress progress-success progress-striped active">

								<span style="width: 22%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">数据库负载</span>

								<span class="percent">40%</span>

								</span>

								<span class="progress progress-info progress-striped active">

								<span style="width: 40%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">服务器负载</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-warning progress-striped active">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">网络信号</span>

								<span class="percent">82%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 82%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">监测所有信息 <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/Application/Admin/View/img/admin2.jpg" />

						<span class="username">岑老师</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="<?php echo U('Index/index');?>"><i class="icon-user"></i> 网站信息</a></li>

							<li><a href="<?php echo U('Daily/index');?>"><i class="icon-calendar"></i> 日常安排</a></li>

							<li><a href="<?php echo U('Message/index');?>"><i class="icon-envelope"></i> 站内消息(3)</a></li>

							<li class="divider"></li>

							<li><a href="<?php echo U('Lock/index');?>"><i class="icon-lock"></i> 账号锁定</a></li>

							<li><a href="<?php echo U('Login/loginOut');?>"><i class="icon-key"></i> 退出</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start active ">

					<a href="<?php echo U('Index/index');?>">

					<i class="icon-home"></i> 

					<span class="title">后台首页</span>

					<span class="selected"></span>

					</a>

				</li>

				<li>

					<a class="active" href="javascript:;">

					<i class="icon-user"></i> 

					<span class="title">管理中心</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							用户管理

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="<?php echo U('Manage/index');?>">学生</a></li>

								<li><a href="<?php echo U('Manage/teacher');?>">教师</a></li>

								<!-- <li><a href="<?php echo U('Manage/admin');?>">管理员</a></li> -->

							</ul>

						</li>

<!-- 						<li>

							<a href="javascript:;">

							群组管理

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="">话题管理</a></li>

								<li><a href="">讨论组管理</a></li>

							</ul>

						</li> -->

						<!-- <li>

							<a href="javascript:;">

							资源管理

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="<?php echo U('Resource/index');?>">心得感悟</a></li>

								<li><a href="#">学习资料</a></li>

								<li><a href="<?php echo U('Resource/read');?>">学习工具</a></li>

							</ul>

						</li> -->

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-comment"></i> 

					<span class="title">消息中心</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">
						<li>

							<a href="javascript:;">

							站内信箱

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="<?php echo U('Message/index');?>">查看信件</a></li>

								<li><a href="<?php echo U('Message/write');?>">发送信件</a></li>

							</ul>

						</li>

						<li>

							<a href="javascript:;">

							平台消息

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="">消息管理</a></li>

								<li><a href="">消息发布</a></li>

							</ul>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">四部曲研究</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="<?php echo U('Video/index');?>">

							研究介绍</a>

						</li>
<!-- 
						<li >

							<a href="#">

							教学资源</a>

						</li> -->

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">四部曲实践</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="<?php echo U('Daily/index');?>">

							开放实验</a>

						</li>

						<li >

							<a href="<?php echo U('Daily/index2');?>">

							科技创新</a>

						</li>

						<li >

							<a href="<?php echo U('Daily/index3');?>">

							学科竞赛</a>

						</li>

						<li >

							<a href="<?php echo U('Daily/index4');?>">

							成果获取</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-hospital"></i> 

					<span class="title">实践成果</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="<?php echo U('Daily/index');?>">

							成果展示</a>

						</li>

						<li >

							<a href="<?php echo U('Daily/index');?>">

							作品展示</a>

						</li>

					</ul>

				</li>

				<!-- <li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">荣誉风采</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="#">

							学子风采</a>

						</li>

						<li >

							<a href="#">

							荣誉室</a>

						</li>

					</ul>

				</li> -->

				<li class="last ">

					<a href="<?php echo U('About/index');?>">

					<i class="icon-bar-chart"></i> 

					<span class="title">关于网站</span>

					</a>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>后台管理</h3>

				</div>

				<div class="modal-body">

					&nbsp;

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->        

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->
<script type="text/javascript">
	window.onload=function () {
		var path = "";
        var style_color = getCookie('style_color');
        $('#style_color').attr("href", path+"/Application/Admin/View/media/css/" + style_color + ".css");
        var layoutOption = getCookie('layout');
        var headerOption = getCookie('header');
        var sidebarOption = getCookie('sidebar');
        var footerOption = getCookie('footer');

        if (sidebarOption == "fixed" && headerOption == "default") {
            alert('固定侧栏时，默认的流动标题不支持，继续用默认样式。');
            $('.sidebar-option').val("default");
            sidebarOption = 'default';
        }

        if (layoutOption === "boxed") {
            $("body").addClass("page-boxed");

            // set header
            $('.header > .navbar-inner > .container-fluid').removeClass("container-fluid").addClass("container");
            var cont = $('.header').after('<div class="container"></div>');

            // set content
            $('.page-container').appendTo('body > .container');

            // set footer
            if (footerOption === 'fixed' || sidebarOption === 'default') {
                $('.footer').html('<div class="container">'+$('.footer').html()+'</div>');
            } else {
                $('.footer').appendTo('body > .container');
            }
        }

        //header
        if (headerOption === 'fixed') {
            $("body").addClass("page-header-fixed");
            $(".header").removeClass("navbar-static-top").addClass("navbar-fixed-top");
        } else {
            $("body").removeClass("page-header-fixed");
            $(".header").removeClass("navbar-fixed-top").addClass("navbar-static-top");
        }

        //sidebar
        if (sidebarOption === 'fixed') {
            $("body").addClass("page-sidebar-fixed");
        } else {
            $("body").removeClass("page-sidebar-fixed");
        }

        //footer
        if (footerOption === 'fixed') {
            $("body").addClass("page-footer-fixed");
        } else {
            $("body").removeClass("page-footer-fixed");
        }
    }
	function setCookie(name,value){
		var Days = 30;
		var exp = new Date();
		exp.setTime(exp.getTime() + Days*24*60*60*1000);
		document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
	}
	function getCookie(cookieName){
		var cookieValue = document.cookie;
		var cookieStartAt = cookieValue.indexOf(""+cookieName+"=");
		if(cookieStartAt==-1){
			cookieStartAt = cookieValue.indexOf(cookieName+"=");
		}
		if(cookieStartAt==-1){
			cookieValue = null;
		}
		else{
			cookieStartAt = cookieValue.indexOf("=",cookieStartAt)+1;
			cookieEndAt = cookieValue.indexOf(";",cookieStartAt);
			if(cookieEndAt==-1)
			{
				cookieEndAt = cookieValue.length;
			}
			cookieValue = unescape(cookieValue.substring(cookieStartAt,cookieEndAt));//解码latin-1
		}
		return cookieValue;
	}

	function setLayout(obj){
		var value = obj.value;
		setCookie("layout",value);
	}
	function setHeader(obj){
		var value = obj.value;
		setCookie("header",value);
	}
	function setSidebar(obj){
		var value = obj.value;
		setCookie("sidebar",value);
	}
	function setFooter(obj){
		var value = obj.value;
		setCookie("footer",value);
	}
	function setColor(obj){
		setCookie("style_color",obj);
	}
</script>
<div id="color-panel" class="color-panel hidden-phone">

	<div class="color-mode-icons icon-color"></div>

	<div class="color-mode-icons icon-color-close"></div>

	<div class="color-mode">

		<p>主题颜色</p>
			<!-- <input type="hidden" name="" id="color" value="<?php echo ($bd_style["color"]); ?>">
			<input type="hidden" name="" id="layout" value="<?php echo ($bd_style["layout"]); ?>">
			<input type="hidden" name="" id="header" value="<?php echo ($bd_style["header"]); ?>">
			<input type="hidden" name="" id="sidebar" value="<?php echo ($bd_style["sidebar"]); ?>">
			<input type="hidden" name="" id="footer" value="<?php echo ($bd_style["footer"]); ?>">
			<input type="hidden" name="" id="style_color" value="<?php echo ($bd_style["style_color"]); ?>"> -->

		<ul class="inline">

			<li class="color-black current color-default" data-style="default" onclick="setColor('default')"></li>

			<li class="color-blue" data-style="blue" onclick="setColor('blue')"></li>

			<li class="color-brown" data-style="brown" onclick="setColor('brown')"></li>

			<li class="color-purple" data-style="purple" onclick="setColor('purple')"></li>

			<li class="color-grey" data-style="grey" onclick="setColor('grey')"></li>

			<li class="color-white color-light" data-style="light" onclick="setColor('light')"></li>

		</ul>

		<label>

			<span>页面布局</span>

			<select class="layout-option m-wrap small" onchange="setLayout(this)">

				<?php if( 'fluid' == $_COOKIE['layout']): ?><option value="fluid" selected>流动</option></a>
					<option value="boxed">固定</option></a>
				<?php else: ?>
					<option value="fluid">流动</option>
					<option value="boxed" selected>固定</option><?php endif; ?>

			</select>

		</label>

		<label>

			<span>标头导航</span>

			<select class="header-option m-wrap small" onchange="setHeader(this)">

				<?php if( 'fixed' == $_COOKIE['header']): ?><option value="fixed" selected>固定</option>
					<option value="default">流动</option>
				<?php else: ?>
					<option value="fixed">固定</option>
					<option value="default" selected>流动</option><?php endif; ?>

			</select>

		</label>

		<label>

			<span>侧栏导航</span>

			<select class="sidebar-option m-wrap small" onchange="setSidebar(this)">

				<?php if( 'default' == $_COOKIE['sidebar']): ?><option value="default" selected>流动</option>
					<option value="fixed">固定</option>
				<?php else: ?>
					<option value="default">流动</option>
					<option value="fixed" selected>固定</option><?php endif; ?>


			</select>

		</label>

		<label>

			<span>底部导航</span>

			<select class="footer-option m-wrap small" onchange="setFooter(this)">

				<?php if( 'default' == $_COOKIE['footer']): ?><option value="default" selected>流动</option>
					<option value="fixed">固定</option>
				<?php else: ?>
					<option value="default">流动</option>
					<option value="fixed" selected>固定</option><?php endif; ?>

			</select>

		</label>

	</div>

</div>
<!-- END BEGIN STYLE CUSTOMIZER -->

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							&nbsp;

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="<?php echo U('Index/index');?>">后台首页</a> 

								<i class="icon-angle-right"></i>

							</li>
=
							<li><a href="<?php echo U('About/index');?>">关于网站</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid" id="sortable_portlets">

					<div class="span4 column sortable">

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box grey">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>视频学习</div>

								<div class="actions">

									<a href="#" class="btn yellow mini"><i class="icon-pencil"></i> 修改</a>

									<a href="#" class="btn green mini"><i class="icon-plus"></i> 添加</a>

								</div>

							</div>

							<div class="portlet-body">

								<div>

									学习视频等学编程到百度传课，互联网从业者自学必备网站，名师主讲，快速掌握技巧百度传课，中国网络课程平台，集合百度优势资源，连接亿万师生

								</div>

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>听力练习</div>

								<div class="actions">

									<a href="#" class="btn yellow mini"><i class="icon-pencil"></i> 修改</a>

									<a href="#" class="btn green mini"><i class="icon-plus"></i> 添加</a>

								</div>

							</div>

							<div class="portlet-body">

								练听力在线外教一对一。每天25分钟，30天见证你的英语奇迹!立即注册，免费体验!学英语，到 51Talk，真人外教，个性化定制，随时随地轻松练口语!练听力

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box green">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>阅读短文</div>

								<div class="actions">

									<a href="#" class="btn yellow mini"><i class="icon-pencil"></i> 修改</a>

									<a href="#" class="btn green mini"><i class="icon-plus"></i> 添加</a>

								</div>

							</div>

							<div class="portlet-body">

								英语阅读,英语阅读理解,英语文章.... 英语美文欣赏 美丽英文诵读 新概念优美英文背诵短文50篇 英语阅读|英语阅读理解 英语小短文 英语故事 查泰莱夫人的情人 英语散文

							</div>

						</div>

						<!-- END Portlet PORTLET-->

					</div>

					<div class="span4 column sortable">

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box red">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>课程定制</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

								</div>

								<div class="actions">

									<a href="#" class="btn blue mini"><i class="icon-pencil"></i> 修改</a>

								</div>

							</div>

							<div class="portlet-body">

								全程名师定制课程 每组限招6-8人 18天18晚(含2天自修)+16课时专家密训 赠送天全程督学班 中公分校 详询分校 立即报名 线上支付,安全快捷全程

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class="portlet box green">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>日程自由安排</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

								</div>

								<div class="actions">

									<a href="#" class="btn blue mini"><i class="icon-pencil"></i> 修改</a>

								</div>

							</div>

							<div class="portlet-body">

								一款功能超强大的插件,它可以自由管理自己的日程安排,有3种模式,分别为日,周,月,这样的话管理起来就非常清晰,如果想要保存数据,那就要配合后台程序了                  

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box red">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>真题写作</div>

								<div class="actions">

									<a href="#" class="btn yellow mini"><i class="icon-pencil"></i> 修改</a>

									<a href="#" class="btn green mini"><i class="icon-plus"></i> 添加</a>

								</div>

							</div>

							<div class="portlet-body">

								自考365英语写作自考试题栏目,提供英语写作自考试题、试卷以及历年真题,查询更多的自考专业试题请登陆自考365历年试题频道。

							</div>

						</div>

						<!-- END Portlet PORTLET-->

					</div>

					<div class="span4 column sortable">

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box yellow">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>能力自测</div>

								<div class="actions">

									<a href="#" class="btn blue mini"><i class="icon-pencil"></i> 修改</a>

									<div class="btn-group">

										<a class="btn mini green" href="#" data-toggle="dropdown">

										<i class="icon-user"></i> 用户

										<i class="icon-angle-down"></i>

										</a>

										<ul class="dropdown-menu pull-right">

											<li><a href="#"><i class="icon-pencil"></i> 修改</a></li>

											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>

											<li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>

											<li class="divider"></li>

											<li><a href="#"><i class="i"></i> Make admin</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="portlet-body">

								能力测试,素质测试,个人能力测试题大全... 100意志力自测 55从意外所得看你的创业能力 41无意举止流露本性 39脚步与事业成败 33电话剧照 302015最新测试:测试下你的能力值。

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box red">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>学者交流</div>

								<div class="actions">

									<a href="#" class="btn blue mini"><i class="icon-pencil"></i> 修改</a>

									<div class="btn-group">

										<a class="btn mini green" href="#" data-toggle="dropdown">

										<i class="icon-user"></i> 用户

										<i class="icon-angle-down"></i>

										</a>

										<ul class="dropdown-menu pull-right">

											<li><a href="#"><i class="icon-pencil"></i> 修改</a></li>

											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>

											<li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>

											<li class="divider"></li>

											<li><a href="#"><i class="i"></i> Make admin</a></li>

										</ul>

									</div>

								</div>

							</div>

							<div class="portlet-body">

								“学者圈”主要面向有学习研究需求的用户,帮助他们按学者跟踪科研情报,及时获取关注学者的最新研究动态,“学者圈”帮助用户快速建立学者关系网,实时跟踪学者动态。

							</div>

						</div>

						<!-- END Portlet PORTLET-->

						<!-- BEGIN Portlet PORTLET-->

						<div class=" portlet box yellow">

							<div class="portlet-title">

								<div class="caption"><i class="icon-reorder"></i>开心辞典</div>

								<div class="actions">

									<a href="#" class="btn yellow mini"><i class="icon-pencil"></i> 修改</a>

									<a href="#" class="btn green mini"><i class="icon-plus"></i> 添加</a>

								</div>

							</div>

							<div class="portlet-body">

								一类专门给大家平时备忘事物用的软件,它让你随手记下好友或者客户生日提醒、工作提醒、生活备忘、学习计划、创意灵感,另外还可以让备忘录像给你提示信息。

							</div>

						</div>

						<!-- END Portlet PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER--> 

		</div>

		<!-- END PAGE -->

	</div>

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.Collect from <a href="http://www.mycodes.net/153/" title="网站模板" target="_blank">网站模板</a> - More Templates <a href="http://www.mycodes.net/" title="源码之家" target="_blank">源码之家</a>

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/Application/Admin/View/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/Application/Admin/View/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/Application/Admin/View/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/Application/Admin/View/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/Application/Admin/View/media/js/excanvas.min.js"></script>

	<script src="/Application/Admin/View/media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/Application/Admin/View/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/Application/Admin/View/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/Application/Admin/View/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/Application/Admin/View/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/Application/Admin/View/media/js/app.js"></script>   

	<script src="/Application/Admin/View/media/js/portlet-draggable.js"></script> 

	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {       

		   // initiate layout and plugins

		   Application.init();

		   PortletDraggable.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>