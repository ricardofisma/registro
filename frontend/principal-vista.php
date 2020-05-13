<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="ww.ico">
    <link rel="stylesheet" href="css/style.css">
    <!--mathjax-->
<script>
  (function () {
    var script = document.createElement("script");
    script.type = "text/javascript";
    var src = "true";
    if (src === "" || src === "true") src = "https://mathjax.rstudio.com/latest/MathJax.js?config=TeX-MML-AM_CHTML";
    if (location.protocol !== "file:")
      if (/^https?:/.test(src))
        src = src.replace(/^https?:/, '');
    script.src = src;
    document.getElementsByTagName("head")[0].appendChild(script);
  })();
</script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  TeX: {equationNumbers: { autoNumber:"AMS"}},
  "HTML-CSS": { availableFonts: ["Tex"] }
});
</script>





    <style>
        
        body{
            background-image: url(image/bg2.jpeg);
        }
        
        .welcome{
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 10px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }
        
        .welcome img{
            width: 120px;
            height: 120px;
            text-align: center;
        }

        .welcome h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: block;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }
        
    /* */
    h1 {
        color: black;
        font-size: 2em;
        text-align: center;
        # background-color: aliceblue;

    }

    h2 {
        padding: 1%;
        color: brow;
        text-align: left;
        # background-color: grey;
        border: 1px solid white;
        border-spacing: 15px;
        display: block;
        font-size: 1.5em;
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: ;
        margin-right: 0;
    }

    h3 {
        padding: 1%;
        color: black;
        text-align: left;
        font-size: 1.17em;
        border: 1px solid #775323;
        border-spacing: 15px;
        # background-color: aliceblue;
    }


    p {
        font-family: serif;
        text-align: justify;
        text-justify: inter-word;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    p.a {
        word-break: normal;
    }

    p.b {
        word-break: keep-all;
    }

    p.c {
        word-break: break-all;
    }

    td {
        text-align: center;
        vertical-align: middle;
    }


    header h1 {
        background-color: #000000;
        background-image: url(screenshots/w7.jpg);
        background-position: 30% 65%;
        background-repeat: no-repeat;
        text-align: center;
        color: aliceblue;
        padding: 5%;
    }


    body {
        text-align: center;
    }

    .all {
        background: white;
        width: 90%;
        margin-top: 20px;
        margin-left: auto;
        margin: 30px auto;
        # border: 1px solid red;
    }

    header nav {
        background: #999;
        font: bold 30px serif;
        overflow: hidden
    }

    header nav ul {
        list-style: none;
    }

    header nav ul li {
        padding: 1%;
        # border: 1px solid black;
        float: left;
    }

    header nav ul li a {
        text-decoration: none
    }

    .main {
        width: 70%;
        float: left;
        # border: 1px solid red;
        # background: green
    }

    article {
        padding: 10px;
        # border: 1px solid yellow;
        border-radius: 3px;
        background: #5532;
        margin-top: 10px;
        # margin-bottom: 1%;

    }

    aside {
        width: 29.0%;
        # background: yellow;
        # padding: 1%;
        float: right
    }


    blockquote {
        # border: 1px solid black;
        border-radius: 3px;
        background: #5265;
        padding: 6%;
        margin-top: 10px;
        # margin-bottom: 0%;
    }

    footer {
        clear: both;
        border: 1px solid black;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        background: #e253;
    }
    </style>
    
</head>
<body>
   
   <div class="welcome">
       <img src="image/logo_magtimus.png" >
        <h1>Bienvenido, has logrado iniciar sesion</h1>
        <a href="cerrar.php">Cerrar sesion</a>
   </div>
   
<section class="main">

    <article>
        <h2>Primero</h2>
 
        <!--
            <center>
<iframe  width="800" height="500" src="https://www.youtube.com/embed/tWJk0RmZ5uU?start=251" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe src="https://www.xvideos.com/embedframe/46618037" frameborder=0 width=800 height=500 scrolling=no allowfullscreen=allowfullscreen></iframe>
<iframe src="https://www.xvideos.com/embedframe/26754231" frameborder=0 width=800 height=500 scrolling=no allowfullscreen=allowfullscreen></iframe>
</center>
-->


\begin{align*}
\dot{x}^77 & = \sigma(y-x) \\
\dot{y} & = \rho x - y - xz \\
\dot{z} & = -\beta z + xy
\end{align*}


<h2>The Cauchy-Schwarz Inequality</h2>

\[
\left( \sum_{k=1}^n a_k b_k \right)^{\!\!2} \leq
 \left( \sum_{k=1}^n a_k^2 \right) \left( \sum_{k=1}^n b_k^2 \right)
\]

<h2>A Cross Product Formula</h2>

\[
  \mathbf{V}_1 \times \mathbf{V}_2 =
   \begin{vmatrix}
    \mathbf{i} & \mathbf{j} & \mathbf{k} \\
    \frac{\partial X}{\partial u} & \frac{\partial Y}{\partial u} & 0 \\
    \frac{\partial X}{\partial v} & \frac{\partial Y}{\partial v} & 0 \\
   \end{vmatrix}
\]

<h2>The probability of getting \(k\) heads when flipping \(n\) coins is:</h2>

\[P(E) = {n \choose k} p^k (1-p)^{ n-k} \]

<h2>An Identity of Ramanujan</h2>

\[
   \frac{1}{(\sqrt{\phi \sqrt{5}}-\phi) e^{\frac25 \pi}} =
     1+\frac{e^{-2\pi}} {1+\frac{e^{-4\pi}} {1+\frac{e^{-6\pi}}
      {1+\frac{e^{-8\pi}} {1+\ldots} } } }
\]
<h2>A Rogers-Ramanujan Identity</h2>

\[
  1 +  \frac{q^2}{(1-q)}+\frac{q^6}{(1-q)(1-q^2)}+\cdots =
    \prod_{j=0}^{\infty}\frac{1}{(1-q^{5j+2})(1-q^{5j+3})},
     \quad\quad \text{for $|q|<1$}.
\]

<h2>Maxwell's Equations</h2>


\begin{align}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align}


<h3>In-line Mathematics</h3>

Finally, while display equations look good for a page of samples, the
ability to mix math and text in a paragraph is also important.  This
expression \(\sqrt{3x-1}+(1+x)^2\) is an example of an inline equation.  As
you see, MathJax equations can be used this way as well, without unduly
disturbing the spacing between lines.





<table style="width:100%" rules="all">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>

\begin{align}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align}

<table style="width:100%" rules="all">
  <figcaption>Here is the legend for your image<figcaption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <th align="center"><span class="math display">\[f_i=\int_1^2\]</span></th>
  </tr>
  <tr>
    <td>February</td>
    <td>February</td>
    <td><span class="math display">\[f_i=\int_1^2\]</span></td>
  </tr>
</table>




\begin{align}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align}









Here's one using the equation environment:
\begin{equation}\label{ref2}
x+1\over\sqrt{1-x^2}
\end{equation}
and one with equation* environment:
\begin{equation*}
x+1\over\sqrt{1-x^2}
\end{equation*}



This is a forward reference \eqref{ref3} and another \eqref{ref2} for the 
following equation:
$$x+1\over\sqrt{1-x^2}$$
More math:
$$x+1\over\sqrt{1-x^2}$$
Here is a ref inside math: \(\ref{ref3}+1\) and text after it.

\begin{align*} 
x& = y_1-y_2+y_3-y_5+y_8-\dots 
&& \text{by \eqref{ref3}}\notag\\ 
& = y'\circ y^* && \text{(by \eqref{ref3})}\\ 
& = y(0) y' && \text {by Axiom 1.} 
\end{align*} 

Here's a bad ref [\ref{ref3}] to a nonexistent label.



An alignment:
\begin{align}
a&=b\label{ref3}\cr
&=c+d
\end{align}
and a starred one:
\begin{align*}
a&=b\cr
&=c+d
\end{align*}

    </article>


<article>
  <style>
    * {
      padding: 0px;
      margin: 0px;
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
    }
  
  
    .calculadora {
      background-color: #e2e2e2;
      width: fit-content;
      margin: auto;
      margin-top: 35px
    }
  
    .sr {
      padding: 0px 18px 18px 18px;
    }
  
    .sr button {
      width: 100%;
      background-color: #48c;
      color: #fff;
      border: none;
      font-size: 50px;
      padding: 0px
    }
  
    .teclas {
      display: flex;
    }
  
    .pantalla {
      padding: 10px;
    }
  
    .numeros {
      padding: 10px;
    }
  
    .op {
      padding: 10px
    }
  
    #resultado {
      background-color: #666;
      color: #eee;
      padding: 6px;
      font-family: monospace;
      font-size: 20px
    }
  
    .op button {
      display: block;
      border-radius: 10px;
      width: 54px;
      height: 54px;
      padding: 9px 15px;
      background-color: #000;
      color: #fff;
      border: none;
    }
  
    .numeros div {
      text-align: center;
    }
  
    .numeros button {
      border: 0px;
      border-radius: 10px;
      background-color: #139a64;
      transition: all 0.09s
    }
  
    .numeros button:hover {
      box-shadow: 0px 0px 10px #aaa;
    }
  
    button {
      margin: 2px 0px;
      padding: 15px 24px;
      font-size: 19px;
    }
  </style>
  
  <div class="calculadora">
    <div class="pantalla">
      <div id="resultado"></div>
    </div>
    <div class="teclas">
      <div class="numeros">
        <div>
          <button id="n1">1</button>
          <button id="n2">2</button>
          <button id="n3">3</button>
        </div>
        <div>
          <button id="n4">4</button>
          <button id="n5">5</button>
          <button id="n6">6</button>
        </div>
        <div>
          <button id="n7">7</button>
          <button id="n8">8</button>
          <button id="n9">9</button>
        </div>
        <div>
          <button id="n0">0</button>
        </div>
      </div>
      <div class="op">
        <button id="s">+</button>
        <button id="r">-</button>
        <button id="d">÷</button>
        <button id="m">x</button>
      </div>
    </div>
    <div class="sr">
      <button id="sr">=</button>
    </div>
  </div>
  <script>
    document.getElementById("n1").addEventListener("click", n1);
    document.getElementById("n2").addEventListener("click", n2);
    document.getElementById("n3").addEventListener("click", n3);
    document.getElementById("n4").addEventListener("click", n4);
    document.getElementById("n5").addEventListener("click", n5);
    document.getElementById("n6").addEventListener("click", n6);
    document.getElementById("n7").addEventListener("click", n7);
    document.getElementById("n8").addEventListener("click", n8);
    document.getElementById("n9").addEventListener("click", n9);
    document.getElementById("n0").addEventListener("click", n0);
    document.getElementById("s").addEventListener("click", o1);
    document.getElementById("r").addEventListener("click", o2);
    document.getElementById("d").addEventListener("click", o3);
    document.getElementById("m").addEventListener("click", o4);
    document.getElementById("sr").addEventListener("click", showResult);

    function n1() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n1").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n2() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n2").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n3() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n3").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n4() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n4").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n5() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n5").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n6() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n6").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n7() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n7").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n8() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n8").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n9() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n9").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }
    function n0() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("n0").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }

    function o1() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("s").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }

    function o2() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("r").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }

    function o3() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("d").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }

    function o4() {
      let actual = document.getElementById('resultado').innerHTML;
      let sumado = document.getElementById("m").innerHTML;
      document.getElementById('resultado').innerHTML = actual + sumado
    }

    function showResult() {
      let actual = document.getElementById('resultado').innerHTML;
      let suma = actual.indexOf("+");
      let resta = actual.indexOf("-");
      let div = actual.indexOf("÷");
      let mult = actual.indexOf("x");
      if (suma !== -1) {
        arr = actual.split("+", 2);
        res = parseInt(arr[0]) + parseInt(arr[1]);
        document.getElementById("resultado").innerHTML = res;
      } else if (resta !== -1) {
        arr = actual.split("-", 2);
        res = arr[0] - arr[1];
        document.getElementById("resultado").innerHTML = res;

      } else if (div !== -1) {
        arr = actual.split("÷", 2);
        res = arr[0] / arr[1];
        document.getElementById("resultado").innerHTML = res;

      } else if (mult !== -1) {
        arr = actual.split("x", 2);
        res = arr[0] * arr[1];
        document.getElementById("resultado").innerHTML = res;

      }
    }
  </script>

</article>



    </section>
    
    <aside>
        
    <blockquote>
    <h3>Primero</h3>
        <p>Un párrafo, también llamado parágrafo (del griego παράγραφος [parágraphos], y este de παρα, «próximo, semejante», y γραφος, «escritura»), es una unidad comunicativa formada por un conjunto de oraciones secuenciales que trata un mismo tema.</p>
        
    </blockquote>
        
        
        
    <blockquote>
    <h3>Primero</h3>
        <p>Un párrafo, también llamado parágrafo (del griego παράγραφος [parágraphos], y este de παρα, «próximo, semejante», y γραφος, «escritura»), es una unidad comunicativa formada por un conjunto de oraciones secuenciales que trata un mismo tema. §.</p>
        
    </blockquote>
        
    </aside>
    
    







<footer>
    <p>Ricardo Mallqui Baños</p>  
      </footer>

</body>
</html>