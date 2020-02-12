<?php // 获取头部
	get_header(); ?>

<?php if ( have_posts() ) : ?>

<section id="article">
	
<!-- 左下侧导航栏 -->
<style type="text/css">
    body{
		float: right
    margin: 0; padding: 0;
    width: 100%; height: 100%;
    }
    .main {  
  position: fixed;
   width: 0px;
   overflow: visible;
}
.nav{
display: inline-block;
float: right;
   clear: both;
}
.a{
position: relative;
right: 100px;
padding: 10px 30px 10px 60px;
margin: 10px;
background: #8DC2BC;
x-box-shadow: 0 0 8px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 8px 0 8px -8px rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease-in-out 0.1s;
  -o-transition: all 0.3s ease-in-out 0.1s;
  -ms-transition: all 0.3s ease-in-out 0.1s;
  -moz-transition: all 0.3s ease-in-out 0.1s;
  -webkit-transition: all 0.3s ease-in-out 0.1s;
}
.a:hover{
position: relative;
right: 100%;
margin-right: -32px;
        background-color: rgba(27, 79, 147,0.5); 
  box-shadow: 0 -8px 8px -8px rgba(0, 0, 0, 0.5),
    0 8px 8px -8px rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
}
.span{
  display: inline-block;
     color: #fff;
     font-family: 'Droid Sans', sans-serif;
  font-size: 16px;
     font-weight: bold;
  white-space: nowrap;
}
a:hover #bg1{ background: #539770; }
a:hover #bg2{ background: #D73030; }
a:hover #bg3{ background: #8DC2BC; }
a:hover #bg4{ background: #EDD6B4; }

</style>
</head>
<body>
<div class="main">
<div class="nav">
   <div class="a">
    <a href="#">
    <span class="span" id="bg1">自定义 #1</span>
    </a>
   </div>
</div>
<div class="nav">
   <div class="a">
    <a href="#">
    <span class="span" id="bg2">自定义 #2</span>
    </a>
   </div>
</div>
<div class="nav">
   <div class="a">
    <a href="#">
    <span class="span" id="bg3">自定义 #3</span>
    </a>    
   </div>
</div>
<div class="nav">
   <div class="a">
    <a href="#">
    <span class="span" id="bg4">自定义 #4</span>
    </a>
   </div>
</div>

</div>
</body>
</html>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php // 获取文章展示模版 content.php
			get_template_part('content'); ?>
	<?php endwhile; ?>

</section>

<nav id="pagenavi">
	<?php dpt_pagenavi(); ?>
</nav>

<?php else : ?>

	<h1>404</h1>

<?php endif; ?>


<?php // 获取尾部
	get_sidebar();
	get_footer(); ?>