<script src="js/dist/sweet.js"></script>
    <script src="js/dist/sweetalert2.all.min.js
"></script>
<link href="js/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
session_start();
$cedula = $_SESSION['cedula'];
$privilegio = $_SESSION['privilegio'];
$roles = $_SESSION['roles'];
  if ($roles == 2 OR $roles == 3 OR $roles == 6 OR $roles == 8) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Usted no tiene permiso para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
  }
  
if (!isset($_SESSION["cedula"])) {
    session_unset();
    session_destroy();
    echo "<body><script>Swal.fire({
  title: 'Tenemos un Problema',
  text: 'Debe loguearse para entrar aqui.',
  icon: 'error',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Entiendo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location= 'login.php';
  }
})</script>";
}else{
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>INTRANET | Inicio</title> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/register_intranet2.css">
    <link rel="stylesheet" href="css/tablastyle.css">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/boxicons/css/boxicons.min.css" rel="stylesheet">


        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.svg">
</head>
<body>
  
        <!-- Sidebar Start -->
        
        <?php require('./layout/sidebar.php') ?>
        <!-- Sidebar End -->

        <!-- Content Start -->

        
    <section class="home">

        <?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM trabajadores WHERE cedula=$cedula";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $nombres = $mostrar['nombres'];

                            
                        ?>
            <?php } ?>
        <?php if ($cedula == 000000000) {
        ?>
        <div class="text animated wow fadeInRight">Bienvenido Administrador!</div>
        <?php }else{ 
        ?>
        <div class="text animated wow fadeInRight">Bienvenido <?php echo $nombres ?>!</div>
        <?php } ?>  
        <a href="trabajadores.php" class="button_back"><i class='bx bx-undo'></i>Regresar</a>

        <div class="container animated wow fadeIn">
            <div class="top"> 
              <h1>Trabajadores</h1>
            </div>
            <div class="space">

            </div>

            <!-- METE ITEMS AQUI -->
          <div class="contenido">
            <form action="trabajadoresadd2.php" class="formulario" id="formulario" method="post" autocomplete="off">
			<!-- Grupo: Usuario -->
				
			<div class="formulario__grupo" id="grupo__cedula">
				<label for="cedula" class="formulario__label">Cédula de Identidad</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="cedula" id="cedula" class="cedula" placeholder="Cedula de Identidad">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Escriba una cedula válido.</p>
                </div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombres">
				<label for="nombres" class="formulario__label">Nombres</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombres" id="nombres" class="nombres" placeholder="Nombres">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Escriba el nombre del trabajador.</p>
                </div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__apellidos">
				<label for="apellidos" class="formulario__label">Apellidos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellidos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Escriba el apellido del trabajador.</p>
                </div>

			<div class="formulario__grupo" id="grupo__cargo">
				<label for="cargo" class="formulario__label">Cargo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="cargo" id="cargo" class="cargo" placeholder="Cargo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Escriba el cargo del trabajador.</p>
                </div>

			<div class="formulario__grupo" id="grupo__nomina">
				<label for="nomina" class="formulario__label">Tipo de Nómina</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name="nomina" id="nomina" class="nomina">
						<option value="none" hidden selected>Tipo de Nómina</option>
						<option value="Alto Funcionario">Alto Funcionario</option>
						<option value="Alto Nivel">Alto Nivel</option>
						<option value="Empleado">Empleado</option>
						<option value="Obrero">Obrero</option>
						<option value="Pension">Pension</option>
						<option value="Jubilacion">Jubilacion</option>
						<option value="Contratado">Contratado</option>
					</select>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Seleccione una opción.</p>
                </div>


			<div class="formulario__grupo" id="grupo__centpago">
				<label for="centpago" class="formulario__label">Centro de Pago</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="centpago" id="centpago" class="centpago" placeholder="Centro de Pago">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Ingrese el centro de pago.</p>
                </div>


			<div class="formulario__grupo" id="grupo__adscrito">
				<label for="adscrito" class="formulario__label">Direccion Adscrita</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="adscrito" id="adscrito" class="adscrito" placeholder="Direccion Adscrita">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Ingrese la dirección adscrita.</p>
                </div>



			<div class="formulario__grupo" id="grupo__sueldo">
				<label for="sueldo" class="formulario__label">Sueldo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="sueldo" id="sueldo" class="sueldo" placeholder="Sueldo">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Ingrese el salario del trabajador.</p>
                </div>


			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__resolucion">
				<label for="resolucion" class="formulario__label">Resolución</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="resolucion" id="resolucion" class="resolucion" placeholder="Resolución">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
                    <p class="form__validacion-error">Ingrese la resolución.</p>
                </div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__fechresolucion">
				<label for="fechresolucion" class="formulario__label">Fecha Resolución</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="fechresolucion" id="fechresolucion" class="fechresolucion" placeholder="Fecha de Resolución">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Ingrese la fecha de resolución.</p>
                </div>
			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__antiguedad">
				<label for="antiguedad" class="formulario__label">Años de Servicio</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name="antiguedad" id="antiguedad" class="antiguedad">
						<?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM primantiguedad";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $tiempo = $mostrar['tiempo'];
                            $porcentaje = $mostrar['porcentaje'];
                            
                        ?>
						<option value="none" hidden selected>Años de servicio</option>
						<option value="<?php echo $tiempo ?>"><?php echo $tiempo?> Años</option>
					<?php } ?>
					</select>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>				
					</div>
                    <p class="form__validacion-error">Seleccione una opción.</p>
			</div>
			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__profesion">
				<label for="profesion" class="formulario__label">Profesionalizacion</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name="profesion" id="profesion" class="profesion">
						<?php 
                        $conexion=mysqli_connect('localhost','root','','procuraduria');
                        $sql="SELECT * FROM primprofesion";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            $id = $mostrar['id'];
                            $profesion = $mostrar['profesion'];
                            $porcentaje = $mostrar['porcentaje'];
                            
                        ?>
						<option value="none" hidden selected>Profesión</option>
						<option value="<?php echo $profesion ?>"><?php echo $profesion?></option>
					<?php } ?>
					</select>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>				
					</div>
                    <p class="form__validacion-error">Seleccione una opción.</p>
			</div>
				<div class="formulario__grupo" id="grupo__hijos">
				<label for="hijos" class="formulario__label">Hijos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="hijos" id="hijos" class="hijos" placeholder="Cantidad de Hijos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Ingrese lacantidad de hijos.</p>
			</div>
			<div class="formulario__grupo" id="grupo__nrocuenta">
				<label for="nrocuenta" class="formulario__label">Numero de Cuenta</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nrocuenta" id="nrocuenta" class="nrocuenta" placeholder="N° de Cuenta">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="form__validacion-error">Ingrese el número de cuenta.</p>
			</div>
			<div class="formulario__grupo" id="grupo__tipocuenta">
				<label for="tipocuenta" class="formulario__label">Tipo de Cuenta</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name="tipocuenta" id="tipocuenta" class="tipocuenta">
						<option value="none" hidden selected>Tipo de Cuenta</option>
						<option value="0">Corriente</option>
						<option value="1">Ahorro</option>
					</select>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="form__validacion-error">Seleccione una opción.</p>
			</div>


			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar" style="margin-top: -3%;">
				<button type="submit" name="login" id="login" type="button" value="Registrar" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
               
          </div>
		  </div>
		  </div>
		  </div>
		  </div>
        </div>

        <!-- NO METAS MAS ITEMS AQUI -->
    </section>


        <!-- Content End -->

        <!-- Script Start -->
      <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo Claro";
    }else{
        modeText.innerText = "Modo Oscuro";
        
    }
});
    </script>
        <!-- Script End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
	<script src="js/validacionesFormularios/formulariotrabajadores.js"></script>
</body>

</html>
<?php } ?>