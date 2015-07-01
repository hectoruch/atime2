<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="google-site-verification" content="TCxecwJkTSMSRYEYhRHf5pc-BjBCWlFeturIYBYz8z8" />
<link rel="SHORTCUT ICON" href="img/ico-robyt.png"> 
<link rel="stylesheet" href="css/normalize.min.css"> 
<link rel="stylesheet" type="text/css" href="css/robyt.min.css"/>
<link rel="stylesheet" type="text/css" href="css/web.css"/>
<link rel="stylesheet" href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<script src="js/modernizr-2.8.3.min.js"></script>
<title>Tutorial</title>
</head>
<body>
<?php include 'include/menu.php';?>
<section class="kolbig">
  <article class="kol-75 anular">
   		<h1 class="text-center text-underline">how does it work</h1>
   		<h3 class="text-center options-tutorial">
   			<b><a href="tutorial.php">css</a></b>
   			<b><a href="tutorialjs.php">js</a></b>
   			<b class="tuto-selected"><a href="tutorialblock.php">blocks</a></b>
   		</h3>
   </article>
   <article class="kol-75 anular things-css">
   		<h4>menu bubbles</h4>
         <p>
        menu by clicking bubbles appear with different options
        </p>
        <nav class="menu-circulos"> <input type="checkbox" href="#" class="menu-circulos-open" name="menu-circulos-open" id="menu-circulos-open"> <label class="menu-circulos-open-button" for="menu-circulos-open"> <span class="circulos circulo-1"></span> <span class="circulos circulo-2"></span> <span class="circulos circulo-3"></span> </label> <a href="#" id="enlace0" class="menu-circulos-item"> Inicio </a> <a href="#" id="enlace1" class="menu-circulos-item"> Inicio 2 </a> <a href="#" id="enlace2" class="menu-circulos-item"> Inicio 3 </a> <a href="#" id="enlace3" class="menu-circulos-item"> Inicio 4 </a> </nav>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"> <defs> <filter id="shadowed-goo"> <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur> <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7" result="goo"></feColorMatrix> <feGaussianBlur in="goo" stdDeviation="3" result="shadow"></feGaussianBlur> <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 -0.2" result="shadow"></feColorMatrix> <feOffset in="shadow" dx="1" dy="1" result="shadow"></feOffset> <feComposite in2="shadow" in="goo" result="goo"></feComposite> <feComposite in2="goo" in="SourceGraphic" result="mix"></feComposite> </filter> <filter id="goo"> <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur> <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7" result="goo"></feColorMatrix> <feComposite in2="goo" in="SourceGraphic" result="mix"></feComposite> </filter> </defs></svg>
        <div class="code-tutorial">
        <div><span>&lt;nav class=&quot;menu-circulos&quot;&gt;</span></div>
        <div><span>&lt;input type=&quot;checkbox&quot; href=&quot;#&quot; class=&quot;menu-circulos-open&quot; name=&quot;menu-circulos-open&quot; id=&quot;menu-circulos-open&quot;&gt;</span></div>
        <div><span>&lt;label class=&quot;menu-circulos-open-button&quot; for=&quot;menu-circulos-open&quot;&gt;</span></div> 
        <div><span>&lt;span class=&quot;circulos circulo-1&quot;&gt;&lt;/span&gt;</span></div> 
        <div><span>&lt;span class=&quot;circulos circulo-2&quot;&gt;&lt;/span&gt;</span></div>  
        <div><span>&lt;span class=&quot;circulos circulo-3&quot;&gt;&lt;/span&gt;</span></div> 
        <div><span>&lt;/label&gt;</span></div> 
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace0&quot; class=&quot;menu-circulos-item&quot;&gt; Inicio &lt;/a&gt; </span></div>
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace1&quot; class=&quot;menu-circulos-item&quot;&gt; Inicio 2 &lt;/a&gt;</span></div> 
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace2&quot; class=&quot;menu-circulos-item&quot;&gt; Inicio 3 &lt;/a&gt; </span></div>
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace3&quot; class=&quot;menu-circulos-item&quot;&gt; Inicio 4 &lt;/a&gt;</span></div>
        <div><span>&lt;/nav&gt;</span></div> 
        <div><span>&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; version=&quot;1.1&quot;&gt; &lt;defs&gt; &lt;filter id=&quot;shadowed-goo&quot;&gt; &lt;feGaussianBlur in=&quot;SourceGraphic&quot; result=&quot;blur&quot; stdDeviation=&quot;10&quot;&gt;&lt;/feGaussianBlur&gt; &lt;feColorMatrix in=&quot;blur&quot; mode=&quot;matrix&quot; values=&quot;1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7&quot; result=&quot;goo&quot;&gt;&lt;/feColorMatrix&gt; &lt;feGaussianBlur in=&quot;goo&quot; stdDeviation=&quot;3&quot; result=&quot;shadow&quot;&gt;&lt;/feGaussianBlur&gt; &lt;feColorMatrix in=&quot;shadow&quot; mode=&quot;matrix&quot; values=&quot;0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 -0.2&quot; result=&quot;shadow&quot;&gt;&lt;/feColorMatrix&gt; &lt;feOffset in=&quot;shadow&quot; dx=&quot;1&quot; dy=&quot;1&quot; result=&quot;shadow&quot;&gt;&lt;/feOffset&gt; &lt;feComposite in2=&quot;shadow&quot; in=&quot;goo&quot; result=&quot;goo&quot;&gt;&lt;/feComposite&gt; &lt;feComposite in2=&quot;goo&quot; in=&quot;SourceGraphic&quot; result=&quot;mix&quot;&gt;&lt;/feComposite&gt; &lt;/filter&gt; &lt;filter id=&quot;goo&quot;&gt; &lt;feGaussianBlur in=&quot;SourceGraphic&quot; result=&quot;blur&quot; stdDeviation=&quot;10&quot;&gt;&lt;/feGaussianBlur&gt; &lt;feColorMatrix in=&quot;blur&quot; mode=&quot;matrix&quot; values=&quot;1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7&quot; result=&quot;goo&quot;&gt;&lt;/feColorMatrix&gt; &lt;feComposite in2=&quot;goo&quot; in=&quot;SourceGraphic&quot; result=&quot;mix&quot;&gt;&lt;/feComposite&gt; &lt;/filter&gt; &lt;/defs&gt;&lt;/svg&gt;</span></div>
        </div>
        <h4>Image cool effects</h4>
        <div class="kolbig">
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-1"><img class="d" id="img0" src="img/1.jpg"><figcaption><h2>Effect <span>#1</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-2"><img class="d" id="img0" src="img/2.jpg"><figcaption><h2>Effect <span>#2</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-3"><img class="d" id="img0" src="img/3.jpg"><figcaption><h2>Effect <span>#3</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-4"><img class="d" id="img0" src="img/4.jpg"><figcaption><h2>Effect <span>#4</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-5"><img class="d" id="img0" src="img/5.jpg"><figcaption><h2>Effect <span>#5</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
        <div class="kol-3 kol-image-effect ui-droppable"><figure class="effect-6"><img class="d" id="img0" src="img/6.jpg"><figcaption><h2>Effect <span>#6</span></h2><p>Comon dance every boody!</p><a href="#">View +</a></figcaption></figure></div>
		</div>
        <div class="code-tutorial">
        </div>
        <h4>Three images</h4>
        <article class="kol_elements_list" contenteditable="true"><ul><li><div class="image_elements_list"><a class="image_enlace" href="#"><img alt="" id="img0" src="img/7.jpg"></a><a href="#" id="enlace0" class="referencia_element_list">lorem</a></div><p class="definicion_element_list"><span>lorem ipsum lorem ipsum</span></p></li><li><div class="image_elements_list"><a class="image_enlace" href="#"><img alt="" id="img1" src="img/8.jpg"></a><a href="#" id="enlace1" class="referencia_element_list">lorem</a></div><p class="definicion_element_list"><span>lorem ipsum lorem ipsum</span></p></li><li><div class="image_elements_list"><a class="image_enlace" href="#"><img alt="" id="img2" src="img/9.jpg"></a><a href="#" id="enlace2" class="referencia_element_list">lorem</a></div><p class="definicion_element_list"><span>lorem ipsum lorem ipsum</span></p></li></ul></article>
        <div class="code-tutorial">
		<div><span>&lt;article class=&quot;kol_elements_list&quot;&gt;</span></div>
        <div><span>&lt;ul&gt;</span><span>&lt;li&gt;</span></div>
        <div><span>&lt;div class=&quot;image_elements_list&quot;&gt;</span></div>
        <div><span>&lt;a class=&quot;image_enlace&quot; href=&quot;#&quot;&gt;&lt;img alt=&quot;&quot; id=&quot;img0&quot; src=&quot;img/7.jpg&quot;&gt;&lt;/a&gt;</span></div>
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace0&quot; class=&quot;referencia_element_list&quot;&gt;lorem&lt;/a&gt;&lt;/div&gt;&lt;p class=&quot;definicion_element_list&quot;&gt;&lt;span&gt;lorem ipsum lorem ipsum&lt;/span&gt;&lt;/p&gt;</span></div>
        <div><span>&lt;/li&gt;</span></div>
        <div><span>&lt;li&gt;</span></div>
        <div><span>&lt;div class=&quot;image_elements_list&quot;&gt;</span></div>
        <div><span>&lt;a class=&quot;image_enlace&quot; href=&quot;#&quot;&gt;&lt;img alt=&quot;&quot; id=&quot;img0&quot; src=&quot;img/7.jpg&quot;&gt;&lt;/a&gt;</span></div>
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace0&quot; class=&quot;referencia_element_list&quot;&gt;lorem&lt;/a&gt;&lt;/div&gt;&lt;p class=&quot;definicion_element_list&quot;&gt;&lt;span&gt;lorem ipsum lorem ipsum&lt;/span&gt;&lt;/p&gt;</span></div>
        <div><span>&lt;/li&gt;</span></div>
        <div><span>&lt;li&gt;</span></div>
        <div><span>&lt;div class=&quot;image_elements_list&quot;&gt;</span></div>
        <div><span>&lt;a class=&quot;image_enlace&quot; href=&quot;#&quot;&gt;&lt;img alt=&quot;&quot; id=&quot;img0&quot; src=&quot;img/7.jpg&quot;&gt;&lt;/a&gt;</span></div>
        <div><span>&lt;a href=&quot;#&quot; id=&quot;enlace0&quot; class=&quot;referencia_element_list&quot;&gt;lorem&lt;/a&gt;&lt;/div&gt;&lt;p class=&quot;definicion_element_list&quot;&gt;&lt;span&gt;lorem ipsum lorem ipsum&lt;/span&gt;&lt;/p&gt;</span></div>
        <div><span>&lt;/li&gt;</span></div>
		<div><span>&lt;/ul&gt;</span></div>
        <div><span>&lt;/article&gt;</span></div>
        </div>
        <h4>User appointment</h4>
        <section class="kol-66 anular cita-con-foto ui-droppable"> <header class="anular text-center"> <div class="imagen-circular-cita"> <img id="img0" src="img/flowers.jpg" height="85" width="85" alt=""> </div> <div class="autor-cita"> <h3>Jhon Raid</h3> <a href="#">@raidweb</a> </div> </header> <p class="texto-cita text-center"> lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsu. </p> <em class="fecha-cita text-center">2 hours ago</em> </section>
        <div class="code-tutorial">
        <div><span>&lt;section class=&quot;kol-66 anular cita-con-foto ui-droppable&quot;&gt;</span></div>
        <div><span>&lt;header class=&quot;anular text-center&quot;&gt;</span></div>
        <div><span>&lt;div class=&quot;imagen-circular-cita&quot;&gt;</span></div>
        <div><span>&lt;img id=&quot;img0&quot; src=&quot;img/flowers.jpg&quot; height=&quot;85&quot; width=&quot;85&quot; alt=&quot;&quot;&gt; &lt;/div&gt;</span></div> 
        <div><span>&lt;div class=&quot;autor-cita&quot;&gt;</span></div> 
        <div><span>&lt;h3&gt;Jhon Raid&lt;/h3&gt;</span></div> 
        <div><span>&lt;a href=&quot;#&quot;&gt;@raidweb&lt;/a&gt;</span></div> 
        <div><span>&lt;/div&gt;</span></div> 
        <div><span>&lt;/header&gt;</span></div> 
        <div><span>&lt;p class=&quot;texto-cita text-center&quot;&gt; lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsu. &lt;/p&gt;</span></div>
        <div><span>&lt;em class=&quot;fecha-cita text-center&quot;&gt;2 hours ago&lt;/em&gt; </span></div>
        <div><span>&lt;/section&gt;</span></div>
        </div>
        <h4>Image with text</h4>
        <section class="kolbig imagen-izq-texto-der gris infoapp"><aside class="kol-2 imagen-texto"><img id="img1" src="img/5.jpg"></aside><header><h3>Image title</h3></header><article class="kol-2"><p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p></article></section>
   </article>
</section>
<?php include 'include/footer.php';?>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/cta.js"></script>
<script src="js/web.js"></script>
<script async type="text/javascript" src="js/widgets.js"></script>
</body>
</html>
