<!DOCTYPE html>
<html lang="en">

<head>
	<title>three.js webgl - multiple elements with text</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="w.ico">
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

    <link rel="stylesheet" href="css/style.css">

	<style>

.view {
			width: 6in;
			height: 6in;
			margin: auto;
		}

		#c {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: -1;
		}
	</style>


        <link rel="stylesheet" href="css/style.css">

		
</head>

<body>

	<?php include('first.php'); ?>
<section class="main">
<article>

	<canvas id="c"></canvas>
	

	<script type="module">
		import * as THREE from './three.module.js';
		import { OrbitControls } from './OrbitControls.js';

		var scenes = [], views, t, canvas, renderer;

		window.onload = init;

		function init() {

			var balls = 20;
			var size = .25;

			var colors = [
				'rgb(0,127,255)', 'rgb(255,0,0)', 'rgb(0,255,0)', 'rgb(0,255,255)',
				'rgb(255,0,255)', 'rgb(255,0,127)', 'rgb(255,255,0)', 'rgb(0,255,127)'
			];

			canvas = document.getElementById('c');

			renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true });
			renderer.setPixelRatio(window.devicePixelRatio);

			views = document.querySelectorAll('.view');

			for (var n = 0; n < views.length; n++) {

				var scene = new THREE.Scene();
				scene.background = new THREE.Color(0xffffff);

				var geometry0 = new THREE.BufferGeometry();
				var geometry1 = new THREE.BufferGeometry();

				var vertices = [];

				if (views[n].lattice) {

					var range = balls / 2;
					for (var i = - range; i <= range; i++) {

						for (var j = - range; j <= range; j++) {

							for (var k = - range; k <= range; k++) {

								vertices.push(i, j, k);

							}

						}

					}

				} else {

					for (var m = 0; m < Math.pow(balls, 3); m++) {

						var i = balls * Math.random() - balls / 2;
						var j = balls * Math.random() - balls / 2;
						var k = balls * Math.random() - balls / 2;

						vertices.push(i, j, k);

					}

				}

				geometry0.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
				geometry1.setAttribute('position', new THREE.Float32BufferAttribute(vertices.slice(), 3));

				var index = Math.floor(colors.length * Math.random());

				var canvas2 = document.createElement('canvas');
				canvas2.width = 128;
				canvas2.height = 128;
				var context = canvas2.getContext('2d');
				context.arc(64, 64, 64, 0, 2 * Math.PI);
				context.fillStyle = colors[index];
				context.fill();
				var texture = new THREE.CanvasTexture(canvas2);
				var material = new THREE.PointsMaterial({ size: size, map: texture, transparent: false, alphaTest: 0.5 });
				scene.add(new THREE.Points(geometry0, material));

				scene.userData.view = views[n];
				scene.userData.geometry1 = geometry1;

				var camera = new THREE.PerspectiveCamera(75, 1, 0.1, 100);
				camera.position.set(0, 0, 1.2 * balls);
				scene.userData.camera = camera;

				var controls = new OrbitControls(camera, views[n]);
				scene.userData.controls = controls;

				scenes.push(scene);

			}

			t = 0;
			animate();

		}

		function updateSize() {

			var width = canvas.clientWidth;
			var height = canvas.clientHeight;

			if (canvas.width !== width || canvas.height != height) {

				renderer.setSize(width, height, false);

			}

		}

		function animate() {

			render();
			requestAnimationFrame(animate);

		}

		function render() {

			updateSize();

			renderer.setClearColor(0xffffff);
			renderer.setScissorTest(false);
			renderer.clear();

			renderer.setClearColor(0x000000);
			renderer.setScissorTest(true);

			scenes.forEach(function (scene) {

				var rect = scene.userData.view.getBoundingClientRect();
				// check if it's offscreen. If so skip it
				if (rect.bottom < 0 || rect.top > renderer.domElement.clientHeight ||
					rect.right < 0 || rect.left > renderer.domElement.clientWidth) {

					return; // it's off screen

				}
				// set the viewport
				var width = rect.right - rect.left;
				var height = rect.bottom - rect.top;
				var left = rect.left;
				var bottom = renderer.domElement.clientHeight - rect.bottom;

				renderer.setViewport(left, bottom, width, height);
				renderer.setScissor(left, bottom, width, height);

				renderer.render(scene, scene.userData.camera);

				var points = scene.children[0];
				var position = points.geometry.attributes.position;

				var point = new THREE.Vector3();
				var offset = new THREE.Vector3();

				for (var i = 0; i < position.count; i++) {

					point.fromBufferAttribute(scene.userData.geometry1.attributes.position, i);

					scene.userData.view.displacement(point.x, point.y, point.z, t / 5, offset);

					position.setXYZ(i, point.x + offset.x, point.y + offset.y, point.z + offset.z);

				}

				position.needsUpdate = true;

			});

			t++;

		}

	</script>

	<p>Sound waves whose geometry is determined by a single dimension, plane waves, obey the wave equation

	\[\frac{\partial^2u}{\partial r^2}-\overline{1_c^2}\]
	where $c$ designates the speed of sound in the medium. The monochromatic solution for plane waves will be
		taken to be


	where &omega; is the frequency and <i>k</i>=&omega;/<i>c</i> is the wave number. The sign chosen in the argument
		determines the direction of movement of the waves.</p>

	Here is a plane wave moving on a three-dimensional lattice of atoms:</p>

	<div class="view">
		<script>
			var parent = document.scripts[document.scripts.length - 1].parentNode;
			parent.displacement = function (x, y, z, t, target) {
				return target.set(Math.sin(x - t / 2), 0, 0);
			};
			parent.lattice = true;
		</script>
	</div>




	<p>Here is a plane wave moving through a three-dimensional random distribution of molecules:</p>

	<div class="view">
		<script>
			var parent = document.scripts[document.scripts.length - 1].parentNode;
			parent.displacement = function (x, y, z, t, target) {
				return target.set(Math.sin(x - t), 0, 0);
			};
			parent.lattice = false;
		</script>

	</div>

	<p>Sound waves whose geometry is determined by two dimensions, cylindrical waves, obey the wave equation</p>


	<p>The monochromatic solution for cylindrical sound waves will be taken to be</p>


	<p>Here is a cylindrical wave moving on a three-dimensional lattice of atoms:</p>

	<div class="view">
		<script>
			var parent = document.scripts[document.scripts.length - 1].parentNode;

			parent.displacement = function (x, y, z, t, target) {

				if (x * x + y * y < 0.01) {

					return target.set(0, 0, 0);

				} else {

					var rho = Math.sqrt(x * x + y * y);
					var phi = Math.atan2(y, x);

					return target.set(1.5 * Math.cos(phi) * Math.sin(rho - t) / Math.sqrt(rho), 1.5 * Math.sin(phi) * Math.sin(rho - t) / Math.sqrt(rho), 0);

				}

			};

			parent.lattice = true;
		</script>
	</div>

	<p>Here is a cylindrical wave moving through a three-dimensional random distribution of molecules:</p>

	<div class="view">
		<script>

			var parent = document.scripts[document.scripts.length - 1].parentNode;

			parent.displacement = function (x, y, z, t, target) {

				if (x * x + y * y < 0.01) {

					return target.set(0, 0, 0);

				} else {

					var rho = Math.sqrt(x * x + y * y);
					var phi = Math.atan2(y, x);

					return target.set(1.5 * Math.cos(phi) * Math.sin(rho - t) / Math.sqrt(rho), 1.5 * Math.sin(phi) * Math.sin(rho - t) / Math.sqrt(rho), 0);

				}

			};

			parent.lattice = false;
		</script>

	</div>
</article>
<article>

	<p>Sound waves whose geometry is determined by three dimensions, spherical waves, obey the wave equation</p>

	<div class="math">

		<span class="math-frac">
			<span class="math-num">
				&part;<sup>2</sup><i>u</i>
			</span>
			<span class="math-denom">
				&part;<i>r</i><sup>2</sup>
			</span>
		</span>

		&plus;

		<span class="math-frac">
			<span class="math-num">
				2
			</span>
			<span class="math-denom">
				<i>r</i>
			</span>
		</span>

		<span class="math-frac">
			<span class="math-num">
				&part;<i>u</i>
			</span>
			<span class="math-denom">
				&part;<i>r</i>
			</span>
		</span>

		&minus;

		<span class="math-frac">
			<span class="math-num">
				1<sup></sup> <!-- sup for vertical alignment -->
			</span>
			<span class="math-denom">
				<i>c</i><sup>2</sup>
			</span>
		</span>

		<span class="math-frac">
			<span class="math-num">
				&part;<sup>2</sup><i>u</i>
			</span>
			<span class="math-denom">
				&part;<i>t</i><sup>2</sup>
			</span>
		</span>

		=&nbsp;0

	</div>

	<p>The monochromatic solution for spherical sound waves will be taken to be

	<div class="math">

		<i>u</i>(<i>r</i>,<i>t</i>)&thinsp;=

		<span class="math-frac">
			<span class="math-num">
				sin(<i>k</i><i>r</i>&thinsp;&plusmn;&thinsp;&omega;<i>t</i>)
			</span>
			<span class="math-denom">
				<i>r</i>
			</span>
		</span>

	</div>

	Here is a spherical wave moving on a three-dimensional lattice of atoms:</p>

	<div class="view">

		<script>

			var parent = document.scripts[document.scripts.length - 1].parentNode;

			parent.displacement = function (x, y, z, t, target) {

				if (x * x + y * y + z * z < 0.01) {

					return target.set(0, 0, 0);

				} else {

					var r = Math.sqrt(x * x + y * y + z * z);
					var theta = Math.acos(z / r);
					var phi = Math.atan2(y, x);

					return target.set(3 * Math.cos(3 / phi) * Math.sin(theta) * Math.sin(r - t) / r, 3 * Math.sin(phi) * Math.sin(theta) * Math.sin(r - t) / r, 3 * Math.cos(theta) * Math.sin(r - t) / r);

				}

			};

			parent.lattice = true;

		</script>

	</div>

	<p>Here is a spherical wave moving through a three-dimensional random distribution of molecules:</p>

	<div class="view">

		<script>

			var parent = document.scripts[document.scripts.length - 1].parentNode;

			parent.displacement = function (x, y, z, t, target) {

				if (x * x + y * y + z * z < 0.01) {

					return target.set(0, 0, 0);

				} else {

					var r = Math.sqrt(x * x + y * y + z * z);
					var theta = Math.acos(z / r);
					var phi = Math.atan2(y, x);

					return target.set(3 * Math.cos(5 * phi) * Math.sin(theta) * Math.sin(r - t) / r, 3 * Math.sin(phi) * Math.sin(theta) * Math.sin(r - t) / r, 3 * Math.cos(theta) * Math.sin(r - t) / r);

				}

			};

			parent.lattice = false;

		</script>

	</div>


	<p>The mathematical description of \(\sum\) sound waves can be carried to higher dimensions, but one needs to wait
		for Four.js and its higher-dimensional successors to attempt visualizations.</p>
</article>
</section>


<?php include('side.php'); ?>

<?php include('footer.php'); ?>


</body>
</html>