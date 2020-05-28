<!DOCTYPE html>
<html lang="en">

<head>
	<title>three.js webgl - multiple elements</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="main.css">


	<head>
	<title>three.js webgl - multiple elements with text</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

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


<style>



		#content {
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 1;
			padding: 3em 0 0 0;
		}

		#c {
			position: absolute;
			left: 0;
			width: 100%;
			height: 100%;
		}

	</style>
	    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include('first.php'); ?>

	<canvas id="c"></canvas>

	<div id="content">
		<div id="info"><a href="https://threejs.org" target="_blank" rel="noopener">three.js</a> - multiple elements -
			webgl</div>
	</div>

	<script id="template" type="notjs">
			<div class="scene"></div>
			<div class="description">Scene $</div>
		</script>

	<script type="module">

		import * as THREE from './three.module.js';
		import { OrbitControls } from './OrbitControls.js';

		var canvas;

		var scenes = [], renderer;

		init();
		animate();

		function init() {

			canvas = document.getElementById("c");

			var geometries = [
				new THREE.BoxBufferGeometry(1, 1, 1),
				new THREE.SphereBufferGeometry(0.5, 12, 8),
				new THREE.DodecahedronBufferGeometry(0.5),
				new THREE.CylinderBufferGeometry(0.5, 0.5, 1, 12)
			];

			var template = document.getElementById("template").text;
			var content = document.getElementById("content");

			for (var i = 0; i < 40; i++) {

				var scene = new THREE.Scene();

				// make a list item
				var element = document.createElement("div");
				element.className = "list-item";
				element.innerHTML = template.replace('$', i + 1);

				// Look up the element that represents the area
				// we want to render the scene
				scene.userData.element = element.querySelector(".scene");
				content.appendChild(element);

				var camera = new THREE.PerspectiveCamera(50, 1, 1, 10);
				camera.position.z = 2;
				scene.userData.camera = camera;

				var controls = new OrbitControls(scene.userData.camera, scene.userData.element);
				controls.minDistance = 2;
				controls.maxDistance = 5;
				controls.enablePan = false;
				controls.enableZoom = false;
				scene.userData.controls = controls;

				// add one random mesh to each scene
				var geometry = geometries[geometries.length * Math.random() | 0];

				var material = new THREE.MeshStandardMaterial({

					color: new THREE.Color().setHSL(Math.random(), 1, 0.75),
					roughness: 0.5,
					metalness: 0,
					flatShading: true

				});

				scene.add(new THREE.Mesh(geometry, material));

				scene.add(new THREE.HemisphereLight(0xaaaaaa, 0x444444));

				var light = new THREE.DirectionalLight(0xffffff, 0.5);
				light.position.set(1, 1, 1);
				scene.add(light);

				scenes.push(scene);

			}


			renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true });
			renderer.setClearColor(0xffffff, 1);
			renderer.setPixelRatio(window.devicePixelRatio);

		}

		function updateSize() {

			var width = canvas.clientWidth;
			var height = canvas.clientHeight;

			if (canvas.width !== width || canvas.height !== height) {

				renderer.setSize(width, height, false);

			}

		}

		function animate() {

			render();
			requestAnimationFrame(animate);

		}

		function render() {

			updateSize();

			canvas.style.transform = `translateY(${window.scrollY}px)`;

			renderer.setClearColor(0xffffff);
			renderer.setScissorTest(false);
			renderer.clear();

			renderer.setClearColor(0xe0e0e0);
			renderer.setScissorTest(true);

			scenes.forEach(function (scene) {

				// so something moves
				scene.children[0].rotation.y = Date.now() * 0.001;

				// get the element that is a place holder for where we want to
				// draw the scene
				var element = scene.userData.element;

				// get its position relative to the page's viewport
				var rect = element.getBoundingClientRect();

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

				var camera = scene.userData.camera;

				//camera.aspect = width / height; // not changing in this example
				//camera.updateProjectionMatrix();

				//scene.userData.controls.update();

				renderer.render(scene, camera);

			});

		}

	</script>

</body>

</html>