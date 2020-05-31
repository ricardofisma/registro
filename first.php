<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<head>
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="w.ico">
<style>
body {
  margin: 0;
  margin-top:50px;
  background-color: #f1f1f1;
#  font-family:serif;
}

#navbar {
  background-color: #187c95;
  position: fixed;
# border-radius:5px;
  top: 0;
  width: 100%;
  z-index: 9999;
  transition: top 0.1s;
}

#navbar a {
  float: left;
  display: block;
  text-align: center;
  padding: 15px;
  color:white;
  text-decoration: none;
  font-size: 17px;
}

#navbar div div a {
  display: block;
  text-align: center;
  color:white;
  text-decoration: none;
  min-width:20px;
  font-size: 15px;
}


#navbar a:hover {
  background-color: #ddd;
  color: black;
}


.dropdown {
  float: right;
 # overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: serif;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;
  border-radius:3px;
  background-color: #000;
  min-width: 100px;
  z-index: 1;
}


.dropdown:hover .dropdown-content {
  display: block;
}

/*elimina el borde del frame*/
iframe[seamless] {
    border: none;
    margin:auto;
    width: 100%;
    height:700px;
    border-radius:3px;
}

</style>
<!--
    <link rel="stylesheet" href="katex.min.css"  crossorigin="anonymous">
    <script defer src="katex.min.js"  crossorigin="anonymous"></script>
    <script defer src="auto-render.min.js"  crossorigin="anonymous"  onload="renderMathInElement(document.body);"></script>  
-->  
        

</head>

<body>

<div  id="navbar">
  <a href="principal.php">INICIO</a>
  <a href="Ecuaciones-diferenciales-ordinarias/docs/index.html">TEORÍA</a>
  <a href="text.php">PRÁCTICAS</a>
  <a href="text2.php">NEW</a>

  <div class="dropdown">
    <button class="dropbtn">USURIO 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cerrar.php">Perfil ww www</a>
      <a href="cerrar.php">Mensajes</a>
      <a href="cerrar.php">Cerrar </a>
    </div>
  </div> 
  
  <a href="text2.php">NEW2</a>
  
  <div class="dropdown">
    <button class="dropbtn">EXAMENES 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="#">Examen 1</a>
      <a href="#">Examen 2</a>
      <a href="#">Examen 3</a>
      <a href="#">Examen 6 ww www</a>
      <a href="#">Examen 6</a>
    </div>
  </div> 
  
</div>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>



</body>
</html>
