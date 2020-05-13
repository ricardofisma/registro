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

    <style>
        
        body{
            background-image: url(image/bg2.jpeg);
        }
        
        .welcome{
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 100px;
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
        border-radius: 3px 3px;
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
        border-radius: 3px 3px;
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
        border-radius: 12px;
        background: #e32;
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
        border-radius: 10px;
        background: yellow;
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



</body>
</html>