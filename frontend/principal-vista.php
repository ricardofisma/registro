<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesion iniciada</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="w.ico">
    <link rel="stylesheet" href="css/style.css">
	<!--mathjax-->
	
	<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    TeX: {equationNumbers: { autoNumber:"AMS"}},
    "HTML-CSS": { availableFonts: ["Tex"] },
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
  });
</script>
	<script type="text/javascript" src="MathJax.js"></script>


    
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

    <link rel="stylesheet" type="text/css" href="jsxgraph.css" />
    <script type="text/javascript" src="jsxgraphcore.js"></script>

</head>
<body>


<?php include('first.php'); ?>



<section class="main">

    <article>
    <h1>Primero</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, in nihil omnis illo minima expedita earum totam dicta laborum modi sunt, dolor labore quo minus, maxime hic qui magni molestias.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut necessitatibus, similique quasi dolore quae iusto laboriosam dicta dolorem molestiae pariatur? Vero maiores accusantium, quod magni cumque voluptate illo aut ipsum. 
</p>
\begin{align*}
\dot{x}^77 & = \sigma(y-x) \\
\dot{y} & = \rho x - y - xz \\
\dot{z} & = -\beta z + xy
\end{align*}

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, in nihil omnis illo minima expedita earum totam dicta laborum modi sunt, dolor labore quo minus, maxime hic qui magni molestias.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut necessitatibus, similique quasi dolore quae iusto laboriosam dicta dolorem molestiae pariatur? Vero maiores accusantium, quod magni cumque voluptate illo aut ipsum. 
</p>


<h2>The Cauchy-Schwarz Inequality</h2>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, in nihil omnis illo minima expedita earum totam dicta laborum modi sunt, dolor labore quo minus, maxime hic qui magni molestias.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut necessitatibus, similique quasi dolore quae iusto laboriosam dicta dolorem molestiae pariatur? Vero maiores accusantium, quod magni cumque voluptate illo aut ipsum. 
</p>


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
    \prod_{j=0}^{\infty}\frac{1}{(1-q^{5j+2})(1-q^{5j+3})}
\]
for $|q|<1$
<h2>Maxwell's Equations</h2>


\begin{align}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align}


<h2>In-line Mathematics</h2>

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

\begin{align*}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align*}

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




\begin{align*}
  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t} & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t} & = \vec{\mathbf{0}} \\
  \nabla \cdot \vec{\mathbf{B}} & = 0
\end{align*}









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
Here is a ref inside math: \ref{ref3} and text after it.

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

	<h2>Título</h2>
	\[f_i=\sum_1^2\]

	<script type='text/javascript'>
		JXG.Options.text.useMathJax = true;
		JXG.Options.text.fontSize = 16;
		JXG.Options = JXG.merge(JXG.Options, { showNavigation: false, point: { face: 'o', size: 1, color: '#000000' } });
	</script>











	<h2>Elipse</h2>

	<div id="ww" class="jxgbox" style="width: 90%; height: 380px; display: block; margin: auto;"></div>

	<script type="text/javascript">
		JXG.Options.axis.ticks.majorHeight = 60;
		JXG.Options.axis.ticks.insertTicks = false;
		JXG.Options.axis.ticks.ticksDistance = 100;
		var board = JXG.JSXGraph.initBoard("ww", {
			originX: 50,
			originY: 250,
			unitX: 50,
			unitY: 50,
			axis: true,
			showFullscreen: true,
			zoom: { factorX: 1.25, factorY: 1.25, wheel: true, needshift: true, eps: 0.1 },
			showNavigation: false,
			showCopyright: false,
			defaultAxes: { y: { ticks: { visible: true, majorHeight: 5 } }, x: { ticks: { visible: true, majorHeight: 5 } } },
		});


		f1 = board.create("point", [2, -1], { name: "\\(F_1\\)", fillColor: '#306754', label: { autoPosition: true, offset: [0, -20] } });
		f2 = board.create("point", [8, 3], { name: "\\(F_2\\)", label: { autoPosition: true, offset: [-5, -20] } });
		var l1 = board.create('line', [f1, f2], { strokeColor: 'green', strokewidth: 1 });
		var mp1ww = board.create('midpoint', [f1, f2], { name: "\\(O\\)", label: { autoPosition: true, offset: [10, -10] } });
		var vec = board.create('arrow', [[0, 0], mp1ww], { straightFirst: true, straightLast: true, strokeWidth: 1, dash: 2 });
		var perp1 = board.create('perpendicular', [l1, mp1ww], { highlight: false, strokeColor: 'red', strokewidth: 0 });


		ew = board.create("ellipse", [f1, f2, 9], { strokeColor: '#000000', strokewidth: 2 });



		var b1w = board.create('intersection', [ew, perp1, 0], { name: "\\(B_1\\)", label: { offset: [-15, -20] } });
		var b2w = board.create('intersection', [ew, perp1, 1], { name: "\\(B_2\\)", label: { offset: [5, -20] } });

		var c1w = board.create('intersection', [ew, l1, 0], { name: "\\(V_1\\)", label: { offset: [15, -10] } });
		var c2 = board.create('intersection', [ew, l1, 1], { name: "\\(V_2\\)", label: { offset: [-30, 5] } });



		var s1 = board.create('segment', [b1w, f2], { straightFirst: true, straightLast: true, strokeWidth: 1, dash: 1 });


		var s1 = board.create('segment', [b1w, b2w], { strokeColor: 'green', strokewidth: 1 });

		ewg = board.create("glider", [2, 2, ew], { name: "\\(P\\)", label: { position: "rt", offset: [-20, 20] } });

		c3w = board.create('circle', [mp1ww, function () { return mp1ww.Dist(c1w) * mp1ww.Dist(c1w) / mp1ww.Dist(f1); }], { highlight: false, strokeColor: 'red', strokewidth: 0 });

		var d1 = board.create('intersection', [c3w, l1, 0], { name: "" });
		var d2 = board.create('intersection', [c3w, l1, 1], { name: "" });

		var perp2 = board.create('perpendicular', [l1, d1], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_1\\)', withLabel: true, label: { offset: [-30, 5], position: "lft" } });
		var perp3 = board.create('perpendicular', [l1, d2], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_1\\)', withLabel: true, label: { offset: [10, 10], position: "lft" } });


		var w = board.create("tangent", [ewg], { strokeColor: '#222200', strokewidth: 1 });

		var pol2 = board.create('polygon', [f1, ewg, f2], { hasInnerPoints: true });
		var t = board.create('text', [11, 0.2, function () { return pol2.Perimeter().toFixed(3); }]);
	</script>


	\[\mathcal{E}: y^2=4px\]
	\[\mathcal{L}_1: y=\frac{a^2}{c}\]


	<h2>Hipérbola</h2>

	<div id="hiperbola" class="jxgbox" style="width: 90%; height: 450px; display: block; margin: auto;"></div>

	<script type="text/javascript">
		JXG.Options.axis.ticks.majorHeight = 60;
		JXG.Options.axis.ticks.insertTicks = false;
		JXG.Options.axis.ticks.ticksDistance = 100;
		var board = JXG.JSXGraph.initBoard("hiperbola", {
			originX: 50,
			originY: 250,
			unitX: 50,
			unitY: 50,
			axis: true,
			showFullscreen: true,
			zoom: { factorX: 1.25, factorY: 1.25, wheel: true, needshift: true, eps: 0.1 },
			showNavigation: false,
			showCopyright: false,
			defaultAxes: { y: { ticks: { visible: true, majorHeight: 5 } }, x: { ticks: { visible: true, majorHeight: 5 } } },
		});


		var f1 = board.create("point", [2, -1], { name: "\\(F_1\\)", fillColor: '#306754', label: { autoPosition: true, offset: [0, -20] } });
		var f2 = board.create("point", [8, 3], { name: "\\(F_2\\)", label: { autoPosition: true, offset: [-5, 20] } });

		var l1 = board.create('line', [f1, f2], { strokeColor: 'green', strokewidth: 1 });
		var mp1 = board.create('midpoint', [f1, f2], { name: "\\(O\\)", label: { autoPosition: true, offset: [0, -15] } });
		var vec = board.create('arrow', [[0, 0], mp1], { straightFirst: true, straightLast: true, strokeWidth: 1, dash: 2 });
		var perp1 = board.create('perpendicular', [l1, mp1], { highlight: false, strokeColor: 'red', strokewidth: 0 });


		ew = board.create("hyperbola", [f1, f2, 5.5], { strokeColor: '#000000', strokewidth: 2 });

		ewg = board.create("glider", [10.21, 1, ew], { name: "\\(P\\)", label: { offset: [10, 10] } });
		var w = board.create("tangent", [ewg], { strokeColor: '#222200', strokewidth: 1 });



		var cc1 = board.create('circle', [mp1, f1], { strokeColor: 'red', strokewidth: 1, dash: 1 });
		//
		var b1r = board.create('intersection', [ew, perp1, 0], { name: "\\(B_1\\)", label: { offset: [-15, -20] } });
		var b2r = board.create('intersection', [ew, perp1, 1], { name: "\\(B_2\\)", label: { offset: [5, -20] } });
		//
		var c1r = board.create('intersection', [ew, l1, 0], { name: "\\(V_1\\)", label: { offset: [15, -10] } });
		var c2r = board.create('intersection', [ew, l1, 1], { name: "\\(V_2\\)", label: { offset: [-30, 5] } });

		var perp2 = board.create('perpendicular', [l1, c1r], { highlight: false, strokeColor: 'red', strokewidth: 0 });
		var perp3 = board.create('perpendicular', [l1, c2r], { highlight: false, strokeColor: 'red', strokewidth: 0 });

		var r1 = board.create('intersection', [cc1, perp2, 0], { name: "", label: { offset: [-15, -20] } });
		var r2 = board.create('intersection', [cc1, perp2, 1], { name: "", label: { offset: [5, -20] } });

		var s1 = board.create('intersection', [cc1, perp3, 0], { name: "", label: { offset: [-15, -20] } });
		var s2 = board.create('intersection', [cc1, perp3, 1], { name: "", label: { offset: [5, -20] } });

		var asintota1 = board.create('line', [s2, r1], { strokeColor: 'green', strokewidth: 1, dash: 1 });
		var asintota1 = board.create('line', [s1, r2], { strokeColor: 'green', strokewidth: 1, dash: 1 });


		var segmento1 = board.create('segment', [s1, s2], { strokeColor: 'green', strokewidth: 1 });
		var segmento2 = board.create('segment', [r1, r2], { strokeColor: 'green', strokewidth: 1 });


		var recto1 = board.create('perpendicular', [l1, f1], { highlight: false, strokeColor: 'red', strokewidth: 0 });
		var recto2 = board.create('perpendicular', [l1, f2], { highlight: false, strokeColor: 'red', strokewidth: 0 });

		var recto_s = board.create('segment', [board.create('intersection', [ew, recto1, 0], { name: "" }), board.create('intersection', [ew, recto1, 1], { name: "" })], { strokeColor: 'green', strokewidth: 1 });
		var recto_s = board.create('segment', [board.create('intersection', [ew, recto2, 0], { name: "" }), board.create('intersection', [ew, recto2, 1], { name: "" })], { strokeColor: 'green', strokewidth: 1 });

		var s1 = board.create('segment', [b1r, b2r], { strokeColor: 'green', strokewidth: 1 });
		var s1 = board.create('segment', [b1r, f2], { straightFirst: true, straightLast: true, strokeWidth: 1, dash: 1 });




		var c3 = board.create('circle', [mp1, function () { return mp1.Dist(c1r) * mp1.Dist(c1r) / mp1.Dist(f1); }], { highlight: false, strokeColor: 'red', strokewidth: 0 });

		var d1 = board.create('intersection', [c3, l1, 0], { name: "" });
		var d2 = board.create('intersection', [c3, l1, 1], { name: "" });

		var perp2 = board.create('perpendicular', [l1, d1], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_1\\)', withLabel: true, label: { offset: [-30, 5], position: "lft" } });
		var perp3 = board.create('perpendicular', [l1, d2], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_1\\)', withLabel: true, label: { offset: [10, 10], position: "lft" } });


		var pol2 = board.create('polygon', [f1, ewg, f2], { hasInnerPoints: true });
		var t = board.create('text', [11, 0.2, function () { return pol2.Perimeter().toFixed(3); }]);
	</script>



	<h2>Parábola</h2>

	<div id="wwwww" class="jxgbox" style="width: 90%; height: 450px; display: block; margin: auto;"></div>

	<script type="text/javascript">
		JXG.Options.axis.ticks.majorHeight = 60;
		JXG.Options.axis.ticks.insertTicks = false;
		JXG.Options.axis.ticks.ticksDistance = 100;
		var board = JXG.JSXGraph.initBoard("wwwww", {
			originX: 50,
			originY: 250,
			unitX: 50,
			unitY: 50,
			axis: true,
			showFullscreen: true,
			zoom: { factorX: 1.25, factorY: 1.25, wheel: true, needshift: true, eps: 0.1 },
			showNavigation: false,
			showCopyright: false,
			defaultAxes: { y: { ticks: { visible: true, majorHeight: 5 } }, x: { ticks: { visible: true, majorHeight: 5 } } },
		});


		p1 = board.create("point", [2, 3.5], { name: "", fillColor: '#306754', label: { autoPosition: true, offset: [0, -20] } });
		p2 = board.create("point", [3, -2], { name: "", label: { autoPosition: true, offset: [-5, 20] } });
		f = board.create("point", [4.5, 0], { name: "\\(F\\)", label: { autoPosition: true, offset: [-10, -20] } });

		//p1.setProperty({snapToGrid: true,snapSizeX: 0.5});
		//p2.setProperty({snapToGrid: true,snapSizeX: 0.5});
		//f.setProperty({snapToGrid: true,snapSizeX: 0.5});

		var l1 = board.create('line', [p1, p2], { strokeColor: 'green', strokewidth: 1 });
		var ew = board.create('parabola', [f, l1], { strokeColor: '#000000', strokewidth: 2 });


		ewg = board.create("glider", [6.5, 3.5, ew], { name: "\\(P\\)", label: { offset: [0, 20] } });
		//    ewg.setProperty({snapToGrid: true,snapSizeX: 0.5});
		var w = board.create("tangent", [ewg], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_T\\)', withLabel: true, label: { offset: [10, -10], position: "lft" } });

		var l2 = board.create('perpendicular', [l1, f, 0], { strokeColor: '#256552', strokewidth: 1, name: '\\(\\mathcal{L}_2\\)', withLabel: true, label: { offset: [-30, 5], position: "rt" } });
		var l3 = board.create('perpendicular', [l2, ewg, 0], { highlight: false, strokeColor: '#256552', strokewidth: 0, name: '', withLabel: true, label: { offset: [-30, 5], position: "rt" } });
		var ll = board.create('perpendicular', [l1, ewg, 0], { highlight: false, strokeColor: '#256552', strokewidth: 0, name: '', withLabel: true, label: { offset: [-30, 5], position: "rt" } });
		var lrecto = board.create('perpendicular', [l2, f], { highlight: false, strokeColor: '#256552', strokewidth: 0, name: '\\(\\mathcal{L}_2\\)', withLabel: true, label: { offset: [-30, 5], position: "rt" } });

		var c1 = board.create('intersection', [ew, lrecto, 0], { name: "\\(R_1\\)", label: { offset: [10, 0] } });
		var c2 = board.create('intersection', [ew, lrecto, 1], { name: "\\(R_2\\)", label: { offset: [10, 10] } });



		var recto = board.create('segment', [ewg, board.create('intersection', [l2, l3, 0], { highlight: false, strokeColor: '#256552', strokewidth: 1, name: '\\(R\\)', label: { offset: [-30, 5] } })], { strokeColor: 'green', strokewidth: 1, dash: 1 });
		var recto2 = board.create('segment', [ewg, board.create('intersection', [l1, ll, 0], { highlight: false, strokeColor: '#256552', strokewidth: 1, name: '\\(R_1\\)', label: { offset: [-30, 5] } })], { strokeColor: 'black', strokewidth: 1, dash: 1 });

		//var recto3 = board.create('segment', [ewg,board.create('intersection', [l2, l3, 0],{highlight:false,strokeColor:'#256552',strokewidth:1,name:'\\(R_2ww\\)',label:{offset:[-30, 5]}})],{strokeColor:'black',strokewidth:1,dash:1});

		var recto2 = board.create('segment', [c1, c2], { strokeColor: '#256552', strokewidth: 1, dash: 1 });
		var recto2 = board.create('segment', [ewg, f], { strokeColor: '#256552', strokewidth: 1, dash: 1 });


		var b1 = board.create('intersection', [ew, l2, 0], { name: "\\(V\\)", label: { offset: [-15, -20] } });
		var vec = board.create('arrow', [[0, 0], b1], { straightFirst: true, straightLast: true, strokeWidth: 1, dash: 2 });

		var b2 = board.create('intersection', [w, l2, 0], { name: "\\(S\\)", label: { offset: [-15, -20] } });



		var pol2 = board.create('polygon', [f, ewg, b2], { hasInnerPoints: true, dash: 1 });
//  var t = board.create('text', [11, 0.2, function() { return pol2.Perimeter().toFixed(3); }]);
	


	</script>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe esse ea quod eos vel voluptatum mollitia neque praesentium nulla, voluptate eum hic tempora nisi sint fugit error tenetur quas quaerat.
</p>




<h2>Distribucion normal (Estandarización)</h2>

$$\left(2\pi\sigma^2\right)^{-\frac{1}{2}}\exp\left\{-\frac{1}{2\sigma^2}\left(x-\mu\right)^2\right\}$$

	<div id="new" class="jxgbox" style="width:95%; height:300px;margin: auto;"></div>

	<script>
		JXG.Options.text.useMathJax = true;
		var segArr = [], ptArr = [], bellArr = [];
	
		//var sigma = 2.5;// mu=8;
		
		var bellw = function(x){return 1/(s.Value() * Math.sqrt(2*Math.PI))*Math.exp(-1*Math.pow((x-m.Value()),2)/(2*Math.pow(s.Value(), 2)));};
		var bellStandw = function (x){ return 1/(Math.sqrt(2 * Math.PI)) * Math.exp(-1 * Math.pow((x), 2)/(2));};

		board = JXG.JSXGraph.initBoard("new", { showNavigation: false, showCopyright: false, boundingbox: [-6.5, 0.82, 18, -0.25], axis: true, pan: true, zoom: true });
		var m = board.create('slider', [[4, 0.5], [15, 0.5], [0, 11, 20]], { name: '\\(\\mu\\)', strokeColor: '#3034', fillColor: 'white',size: 3 });
		var s = board.create('slider', [[4, 0.6], [15, 0.6], [0.1, 0.7, 10]], { name: '\\(\\sigma\\)', strokeColor: 'black', fillColor: 'white',size: 3 });
    
    //curves
		var bellCurvew = board.create("functiongraph", [bellw, -20, 20], {strokeWidth: 2, highlight: false,strokeColor: '#306754'});
    var bellStandCurvew = board.create("functiongraph", [bellStandw, -20, 20], {strokeWidth: 2, highlight: false});

	  var r = board.create('slider', [[-3, 0], [15, 0], [-3, 9.5, 15]], {strokeColor: '#306754', fillColor: '#306754', size: 2, withTicks: false, withLabel: false });
	  r.baseline.setAttribute({ strokeWidth: 0, strokeColor: '#000', highlight: false });
	  r.highline.setAttribute({ visible: false });


	  var u = board.create('slider', [[-3, 0], [15, 0], [-3, 12, 15]], {strokeColor: '#306754', fillColor: '#306754', size: 2, withTicks: false, withLabel: false });
	  u.baseline.setAttribute({ strokeWidth: 0, strokeColor: '#000', highlight: false });
	  u.highline.setAttribute({ visible: false });

    var text1 = board.create("text", [function () { return u.X(); }, -0.1, function () { return "\\(x_2\\) = " + u.X().toFixed(2); }], { highlight: false });
    var text2 = board.create("text", [function () { return r.X(); }, -0.1, function () { return "\\(x_1\\) = " + r.X().toFixed(2); }], { highlight: false,label: { offset: [-30, 5], position: "top" } });


    var x1= function () { return (r.Value() - m.Value())/(s.Value())};
    var x2= function () { return (u.Value() - m.Value())/(s.Value())};

	var g1=board.create("integral", [[function () { return r.X()}, function () { return u.X()}], bellCurvew], {color:"#322132",fillOpacity:0.5,withLabel: false});
	var g2=board.create("integral", [[x1,x2], bellStandCurvew], {color:"#77111177",fillOpacity: 0.5,withLabel: false});
		

		board.create('text', [-6, 0.7, function () { return "\\(z_1=\\frac{x_1 - \\mu}{\\sigma} = \\)(" + r.Value().toFixed(2) + "-" + m.Value().toFixed(2) + ")/" + (s.Value()).toFixed(2) + "=" + ((r.Value() - m.Value())/(s.Value())).toFixed(3); }]);
	    board.create('text', [5, 0.7, function () { return "\\(z_2=\\frac{x_1 - \\mu}{\\sigma} = \\)(" + u.Value().toFixed(2) + "-" + m.Value().toFixed(2) + ")/" + (s.Value()).toFixed(2) + "=" + ((u.Value() - m.Value())/(s.Value())).toFixed(3); }]);

	board.create("point", [function () { return r.Value()}, function () { return bellw(r.Value())}],{name:function () { return'\\(f(x_1)=\\)'+bellw(r.Value()).toFixed(3)}, label: { autoPosition: true, offset: [-115, 0] }});
    board.create("point", [function () { return u.Value()}, function () { return bellw(u.Value())}],{name:function () { return'\\(f(x_2)=\\)'+bellw(u.Value()).toFixed(3)}, label: { offset: [7, 0] }});


	board.create("point", [function () { return (r.Value() - m.Value())/(s.Value())}, function () { return bellStandw((r.Value() - m.Value())/(s.Value()))}],{name:function () { return'\\(f(x_1)=\\)'+bellStandw((r.Value() - m.Value())/(s.Value())).toFixed(3)}, label: { offset: [-115, 0] }});
    board.create("point", [function () { return (u.Value() - m.Value())/(s.Value())}, function () { return bellStandw((u.Value() - m.Value())/(s.Value()))}],{name:function () { return'\\(f(x_2)=\\)'+bellStandw((u.Value() - m.Value())/(s.Value())).toFixed(3)}, label: { offset: [7, 0] }});
					
        //board.create('text',[-5,0.35, function(){ return '\\(\\displaystyle\\int_{x_1}^{x_2} = \\)' + JXG.toFixed(g1.Value(), 3); }]);
        board.create('text',[-5,-0.12, function(){ return '\\(\\displaystyle\\int_{z_1}^{z_2}\\frac{1}{\\sqrt{2\\pi\\sigma^2}}e^{-\\frac{1}{2\\sigma^2}\\left(x-\\mu\\right)^2}= \\int_{x_1}^{x_2}\\frac{1}{\\sqrt{2\\pi}}e^{-\\frac{1}{2}\\left(x\\right)^2} = \\)' + JXG.toFixed(g2.Value(), 3); }]);
  
//varianzas lineas

var s11=board.create("point", [function(){ return s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
var	s12=board.create("point", [function(){ return s.Value() + m.Value()}, function(){ return bellw(s.Value() + m.Value())}], { visible:false, name: 'ee' });
board.create("segment", [s11, s12], { strokeWidth: 1, dash: 2, color: "#8C201A", fixed: true });

var s21=board.create("point", [function(){ return -1*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
var	s22=board.create("point", [function(){ return -1*s.Value() + m.Value()}, function(){ return bellw(-1*s.Value() + m.Value())}], { visible:false, name: 'ee' });
board.create("segment", [s21, s22], { strokeWidth: 1, dash: 2, color: "#8C201A", fixed: true });


//		for (i = -3; i < 4; i++) {
//			ptArr[i] = board.create("point", [function(){ return i*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//			bellArr[i] = board.create("point", [function(){ return i*s.Value() + m.Value()}, function(){ return bellw(i*s.Value() + m.Value())}], { visible: false, name: 'ee' });
//			segArr[i] = board.create("segment", [ptArr[i], bellArr[i]], { strokeWidth: 1, dash: 2, color: "#8C201A", fixed: true });
//		}

	</script>



$$ \frac{1}{(2\sigma)^\frac{\nu}{2}\Gamma\left(\frac{\nu}{2}\right)}x^{\frac{\nu}{2}-1}\exp\left\{-\frac{x}{2\sigma}\right\}$$





<h2>Distribucion lambda (Estandarización)</h2>

$$\left(2\pi\sigma^2\right)^{-\frac{1}{2}}\exp\left\{-\frac{1}{2\sigma^2}\left(x-\mu\right)^2\right\}$$

	<div id="new2" class="jxgbox" style="width:95%; height:300px;margin: auto;"></div>

	<script>
		JXG.Options.text.useMathJax = true;
		board = JXG.JSXGraph.initBoard("new2", { showNavigation: false, showCopyright: false, boundingbox: [-6.5, 0.82, 18, -0.25], axis: true, pan: true, zoom: true });
		var segArr = [], ptArr = [], bellArr = [];
	
		var t1 = board.create('slider', [[4, 0.5], [15, 0.5], [0, 0.5, 20]], { name: '\\(r\\)', strokeColor: '#125', fillColor: 'white',size: 3 });
		var w1 = board.create('slider', [[4, 0.6], [15, 0.6], [0.1, 2, 10]], {name: '\\(\\lambda\\)', strokeColor: 'black', fillColor: 'white',size: 3 });

		var f1 = function(x){ return Math.pow(x, t1.Value()-1) * Math.exp(-x);};
    
		var f1c = board.create("functiongraph", [f1, -20, 20], {strokeWidth: 2, highlight: false,strokeColor: '#306754'});
    
	var gamma=board.create("integral", [[0,100],f1c], {color:"#77111177",fillOpacity: 0.5,withLabel: false});

	var f2 = function (x){return w1.Value()/Math.pow(Math.PI,0.5) * Math.pow(w1.Value()*x, 0.5) * Math.exp(-w1.Value()*x);};
	var f2c = board.create("functiongraph", [f2, -20, 20], {strokeWidth: 2, highlight: false,strokeColor: '#3067'});

	var gamma=board.create("integral", [[0.5,10],f2c], {color:"#77111177",fillOpacity: 0.5});


        board.create('text',[-5,-0.12, function(){ return '\\(\\displaystyle\\int_{z_1}^{z_2}\\frac{1}{\\sqrt{2\\pi\\sigma^2}}e^{-\\frac{1}{2\\sigma^2}\\left(x-\\mu\\right)^2}= \\int_{x_1}^{x_2}\\frac{1}{\\sqrt{2\\pi}}e^{-\\frac{1}{2}\\left(x\\right)^2} = \\)' + gamma.Value(); }]);


//varianzas lineas
//rho
//var s11=board.create("point", [function(){ return s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//var	s12=board.create("point", [function(){ return s.Value() + m.Value()}, function(){ return bellw(s.Value() + m.Value())}], { visible:false, name: 'ee' });
//board.create("segment", [s11, s12], { strokeWidth: 1, dash: 1, color: "#8C201A", fixed: true });

//var s21=board.create("point", [function(){ return -1*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//var	s22=board.create("point", [function(){ return -1*s.Value() + m.Value()}, function(){ return bellw(-1*s.Value() + m.Value())}], { visible:false, name: 'ee' });
//board.create("segment", [s21, s22], { strokeWidth: 1, dash: 1, color: "#8C201A", fixed: true });
//2rho
//var s31=board.create("point", [function(){ return 2*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//var	s32=board.create("point", [function(){ return 2*s.Value() + m.Value()}, function(){ return bellw(2*s.Value() + m.Value())}], { visible:false, name: 'ee' });
//board.create("segment", [s31, s32], { strokeWidth: 1, dash: 1, color: "#8C201A", fixed: true });

//var s41=board.create("point", [function(){ return -2*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//var	s42=board.create("point", [function(){ return -2*s.Value() + m.Value()}, function(){ return bellw(-2*s.Value() + m.Value())}], { visible:false, name: 'ee' });
//board.create("segment", [s41, s42], { strokeWidth: 1, dash: 1, color: "#8C201A", fixed: true });
//3rho
//var s51=board.create("point", [function(){ return 0*s.Value() + m.Value()}, 0], { visible: false, name: 'e' });
//var	s52=board.create("point", [function(){ return 0*s.Value() + m.Value()}, function(){ return bellw(0*s.Value() + m.Value())}], { visible:false, name: 'ee' });
//board.create("segment", [s51, s52], { strokeWidth: 1, dash: 1, color: "#8C201A", fixed: true });

	</script>










<p>
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum doloribus voluptatum soluta alias corporis
	nesciunt quos accusamus non. Praesentium nulla vero exercitationem, laborum eligendi nam vel velit libero natus?

	Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga et est consequatur, eveniet corporis ea labore quidem
	aliquid odio quisquam doloribus provident. Perspiciatis necessitatibus harum distinctio sapiente, assumenda
	reiciendis magni.
	Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, eius libero. Facere debitis maiores aspernatur rerum
	delectus dolores doloremque, quos consequatur perspiciatis error excepturi sit unde eligendi, praesentium sint
	laudantium?




</p>













<iframe src="Ecuaciones-diferenciales-ordinarias/docs/index.html" seamless></iframe>









</article>

</section>
    

<?php include('side.php'); ?>


<?php include('footer.php'); ?>



</body>
</html>