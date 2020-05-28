<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Register Magtimus</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="w.ico">
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="main.css">
    
</head>
<body>

 	<script type="module">
	
		import * as THREE from './three.module.js';

		import { OrbitControls } from './OrbitControls.js';
		import { GLTFLoader } from './GLTFLoader.js';
		import { RGBELoader } from './RGBELoader.js';
		import { RoughnessMipmapper } from './RoughnessMipmapper.js';

		var container, controls;
		var camera, scene, renderer;

		init();
		render();

		function init() {

			container = document.createElement('div');
			document.body.appendChild(container);

			camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.25, 20);
			camera.position.set(- 1.8, 0.6, 2.7);

			scene = new THREE.Scene();

			new RGBELoader()
				.setDataType(THREE.UnsignedByteType)
//				.setPath('textures/equirectangular/')
				.load('w2.hdr', function (texture) {

					var envMap = pmremGenerator.fromEquirectangular(texture).texture;

					scene.background = envMap;
					scene.environment = envMap;

					texture.dispose();
					pmremGenerator.dispose();

					render();

					// model

					// use of RoughnessMipmapper is optional
					var roughnessMipmapper = new RoughnessMipmapper(renderer);

					var loader = new GLTFLoader().setPath('glTF/');
					loader.load('DamagedHelmet.gltf', function (gltf) {

						gltf.scene.traverse(function (child) {

							if (child.isMesh) {

								roughnessMipmapper.generateMipmaps(child.material);

							}

						});

						scene.add(gltf.scene);

						roughnessMipmapper.dispose();

						render();

					});

				});

			renderer = new THREE.WebGLRenderer({ antialias: true });
			renderer.setPixelRatio(window.devicePixelRatio);
			renderer.setSize(window.innerWidth, window.innerHeight);
			renderer.toneMapping = THREE.ACESFilmicToneMapping;
			renderer.toneMappingExposure = 0.8;
			renderer.outputEncoding = THREE.sRGBEncoding;
			container.appendChild(renderer.domElement);

			var pmremGenerator = new THREE.PMREMGenerator(renderer);
			pmremGenerator.compileEquirectangularShader();

			controls = new OrbitControls(camera, renderer.domElement);
			controls.addEventListener('change', render); // use if there is no animation loop
			controls.minDistance = 2;
			controls.maxDistance = 10
			controls.target.set(0, 0, - 0.2);
			controls.update();

			window.addEventListener('resize', onWindowResize, false);

		}

		function onWindowResize() {

			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize(window.innerWidth, window.innerHeight);

			render();

		}

		//

		function render() {

			renderer.render(scene, camera);

		}

	</script>


<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/ww1.svg">
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Inicio</li></a>
                <a href="register.php"><li class="module-register active">Registro</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h3>Bienvenido a Visual Learning</h3></div>
            
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre de usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>