<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>四步曲</title>
    <!-- 插件css文件 -->
    <link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/common.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/header.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/bottom.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/Index/unslider.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/Index/index.css" />

</head>
<body>
<!-- 导航栏 -->
<header>
    <div class="hidden-all"></div>
<div class="container-fluid cxx">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 registerBox">
            <div class="relatives">
                <div class="container-fluid reallyBox">
                    <!-- 关闭标识 -->
                    <span class="closeBox"></span>
                    <!-- 注册本体 -->
                    <div class="row">
                        <!-- 左侧 -->
                        <div class="col-xs-12 col-sm-2 col-md-2 boxLeft">
                            <div class="clickButton topButton"><span>注册</span></div>
                            <div class="unclickButton bottomButton"><span>登陆</span></div>
                        </div>
                        <!-- 右侧 -->
                        <div class="col-xs-12 col-sm-10 col-md-10 boxRight">
                            <div class="registerBody">
                                <form action="<?php echo U('Login/resgiter');?>" method="post">
                                    <div class="input-group input-group-lg">
                                       <span class="input-group-addon" id="basic-addon1">&nbsp;&nbsp;账&nbsp;&nbsp;&nbsp;号&nbsp;&nbsp;</span>
                                       <input name="username" type="text" class="form-control" placeholder="账号" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group input-group-lg">
                                       <span class="input-group-addon" id="basic-addon1">&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码&nbsp;&nbsp;</span>
                                       <input name="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group input-group-lg">
                                       <span class="input-group-addon  qrmm" id="basic-addon1">确认密码</span>
                                       <input name="repassword" type="password" class="form-control" placeholder="确认密码" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group input-group-lg forbottom">
                                       <span class="input-group-addon" id="basic-addon1">&nbsp;验&nbsp;证&nbsp;码&nbsp;</span>
                                       <input name="yzm" type="text" class="form-control" placeholder="验证码" aria-describedby="basic-addon1">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg">注&nbsp;册</button>
                                    <span class="gray"><input name="" type="checkbox" checked="checked">我已仔细阅读并接受fourgo注册条款</span>  
                                </form> 
                            </div>
                            <div class="loginBody">
                                <form action="<?php echo U('Login/login');?>" method="post">
                                    <div class="input-group input-group-lg">
                                       <span class="input-group-addon" id="basic-addon1">账号</span>
                                       <input name="username" type="text" class="form-control" placeholder="账号" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group input-group-lg forbottom">
                                       <span class="input-group-addon" id="basic-addon1">密码</span>
                                       <input name="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg">登陆</button>
                                    <span class="gray"><input name="" type="checkbox" checked="checked">下次自动登陆忘记密码</span>

                                    <div class="otherLogin">
                                        <span>其它方式登陆：</span>
                                        <a href=""></a>  
                                        <a href="" class="loginCenter"></a>
                                        <a href=""></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/index');?>"><img src="/Public/Images/logo.png" alt="logo" style="margin-top: -10px;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- 首页 -->
                <li class="dropdown" id="header1"><a href="<?php echo U('Index/index');?>">首页<span class="sr-only">(current)</span></a></li>
                <!-- 四部曲研究 -->
                <li class="dropdown" id="header2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">四步曲研究<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('Study/index');?>">前言</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo U('Study/index#2');?>">内容介绍</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo U('Study/index#3');?>">研究团队</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo U('Study/index#4');?>">理论研究</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo U('Study/index#5');?>">研究活动</a></li>
                    </ul>
                </li>
                <!-- 四部曲实践 -->
                <li class="dropdown" id="header3">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">四步曲实践<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">开放实验</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo U('FourstepsSecond/index');?>">科技创新</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">学科竞赛</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">成果获取</a></li>
                    </ul>
                </li>
                <!-- 组队合作 -->
                <!-- <li><a href="#">组队合作</a></li> -->
                <!-- 实践成果 -->
                <li class="dropdown" id="header4"><a href="<?php echo U('Result/index');?>">实践成果<span class="sr-only">(current)</span></a></li>
                <!-- 风采荣誉 -->
                <li class="dropdown" id="header5"><a href="<?php echo U('Student/index');?>">学子风采<span class="sr-only">(current)</span></a></li>
                <!-- 学习园地 -->
                <!-- <li class="dropdown" id="header6">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">学习园地<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">学习资料</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">学习工具</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">专题工具</a></li>
                    </ul>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(session('?user')): ?><div class="face"><a href="<?php echo U('User/index');?>"><img src="/Public/Images/head/1.jpg" alt=""></a></div>
                <?php else: ?>
                    <li><a class="register">注册</a></li>
                    <li><a class="load">登陆</a></li><?php endif; ?>
            </ul>
            <form class="navbar-form navbar-right" role="search" method="post" action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                    <input type="submit" style="display: none;" id="submit">
                    <label for="submit"><span class="glyphicon glyphicon-search"></span></label>
                </div>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</header>

<div class="content">
    <!-- 焦点图 -->
    <div id="banner" class="banner">
      <ul>
        <li><img src="/Public/Images/Unsilder/01.jpg"></li>
        <li><img src="/Public/Images/Unsilder/02.jpg"></li>
        <li><img src="/Public/Images/Unsilder/03.jpg"></li>
      </ul>
      <a href="javascript:void(0);" class="unslider-arrow prev">
        <img class="arrow" id="al" src="/Public/Images/Unsilder/arrowl.png" alt="prev" width="20" height="35">
      </a>
      <a href="javascript:void(0);" class="unslider-arrow next">
        <img class="arrow" id="ar" src="/Public/Images/Unsilder/arrowr.png" alt="next" width="20" height="37">
      </a>
    </div>
<!--     <div class="font">
        <img src="/Public/Images/Unsilder/font.png" alt="">
    </div> -->
    <!-- 焦点图结束 -->

    <div class="main">
        <div class="one">
            <div class="title">开放实验</div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                  
                  <img src="/Public/Images/Index/kfsy1.jpg" alt="...">
                  <h4 class="font-center">岑岗老师指导学生进行设计</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                  
                  <img src="/Public/Images/Index/kfsy2.jpg" alt="...">
                  <h4 class="font-center">唐伟老师在指导学生进行项目学习</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                  
                  <img src="/Public/Images/Index/kfsy3.jpg" alt="...">
                  <h4 class="font-center">柳杨老师在指导学生进行项目制作</h4>
                </div>
            </div>

        </div>

        <div class="one">
            <div class="title">科技创新</div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                  <img src="/Public/Images/Index/kjcx1.jpg" alt="...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                  <img src="/Public/Images/Index/kjcx2.jpg" alt="...">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                  <img src="/Public/Images/Index/kjcx3.jpg" alt="...">
                </div>
            </div>
        </div>

        <div class="one">
            <div class="title">学科竞赛</div>
        </div>

        <div class="row">
            <div class="col-md-4">
                
                <div class="thumbnail">
                    <a href="<?php echo U('Result/show');?>">
                  <h3 class="font-center">“那年夏天”</h3>
                  <img src="/Public/Images/Index/xkjs2.jpg" alt="...">
                  <div class="indents text-justify info">
                      DV片制作；主要参加人员：龚彪(04教育技术学)、陈洁(05教育技术学)、滕燕(05教育技术学)；指导教师：鲍宗亮、岑岗；成果：作品获2006年省大学生多媒体设计作品大赛一等奖
                  </div></a>
                </div>
                
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                  <h3 class="font-center">“日货风波”</h3>
                  <img src="/Public/Images/Index/xkjs3.jpg" alt="...">
                  <div class="indents text-justify info">
                      DV片制作；主要参加人员：陈茂炜(04教育技术学)、周翔(04教育技术学)、岑益(04教育技术学)；指导老师：林雪芬、覃伟。成果：2007年浙江省大学生多媒体设计竞赛DV组三等奖。
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                  <h3 class="font-center">“走进蒋家滨”</h3>
                  <img src="/Public/Images/Index/xkjs1.jpg" alt="...">
                  <div class="indents text-justify info">
                      DV片制作；主要参加人员：严立刚(03教育技术学)、邵文飞(03教育技术学)、龚彪(04教育技术学) ；指导教师：杨晓艳、岑岗。成果：2005年省大学生多媒体作品设计竞赛二等奖。
                  </div>
                </div>
            </div>
        </div>
        
        <div class="one">
            <div class="title">成果获取</div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                  <h4 class="font-center">“网页设计课程教学的改革尝试”</h4>
                  <img src="/Public/Images/Index/cghq3.jpg" alt="...">
                  <div class="indents text-justify info">
                      项城(03教育技术)、孙晓勇、覃伟. 网页设计课程教学的改革尝试. 全国高校计算机基础教育研究会2006年学术年会论文集，清华大学出版社，2006.7.
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                  <h4 class="font-center">“开放型项目教学的实践”</h4>
                  <img src="/Public/Images/Index/cghq2.jpg" alt="...">
                  <div class="indents text-justify info">
                      岑岗、陈洁(05教育技术).开放型项目教学提高计算机应用能力的实践.全国高校计算机基础教育研究会2008年学术年会论文集，清华大学出版社，2008.7.
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                  <h4 class="font-center">“普通话CAI自主学习系统设计”</h4>
                  <img src="/Public/Images/Index/cghq1.jpg" alt="...">
                  <div class="indents text-justify info">
                      徐  君(05教育技术)、唐伟、赵佰城(05计算机). 普通话CAI自主学习系统设计.全国高校计算机基础教育研究会2008年学术年会论文集,清华大学出版社,2008.11.
                  </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- 尾部 -->
<footer>
    <div class="bottom">
	<div class="bottom_one">
		<div class="bottom_all">
			<ul class="font"><a href="#">关于我们</a><!--
			--><li>如何注册</li><!--
			--><li>如何使用</li><!--
			--><li>忘记密码</li><!--
			--></ul><!--
			--><ul class="font">协议规则<!--
			--><li>常见问题</li><!--
			--><li>常见反馈</li><!--
			--><li>平台规则</li><!--
			--></ul><!--
			--><ul class="font">联系我们<!--
			--><li>电话：13515880979</li><!--
			--><li>邮箱：940781678@qq.com</li><!--
			--><li>地址：浙江科技学院</li><!--
			--></ul><!--
			--><img src="/Public/Images/ewm.jpg" alt="二维码" /><div class="font">&nbsp;扫描关注微信公众平台</div>
			</div>
	</div>
</div>
</footer>
<!--最后引入各项JS文件-->
<script type="text/javascript" src="/Public/JQuery/jquery.js"></script>
<script type="text/javascript" src="/Public/JQuery/bootstrap.js"></script>
<script type="text/javascript" src="/Public/JQuery/unslider.js"></script>
<script type="text/javascript" src="/Public/Js/header.js"></script>
<script type="text/javascript" src="/Public/Js/Index/index.js"></script>
</body>
</html>