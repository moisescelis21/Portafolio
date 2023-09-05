<nav>
	<ul>
		<li><a href="inicio.php">Inicio</a></li>
		<li>
<?php if ($_SESSION["admin"] == 1) { ?>
<li><a href="#">Estudiantes</a>
	<ul>
		
			<li><a href="estudiantes.php">Agregar Estudiantes</a></li>
			
		<li><a href="estudiantes2.php?anio=1">Primer Año</a>
		
			<ul>
			
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='1' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
			
		 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='1' AND turno='Tarde'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
				 ?>

						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
					
				</li>
			</ul>
		</li>
		
		<li><a href="estudiantes2.php?anio=2">Segundo Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='2' AND turno='Mañana'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='2' AND turno='Tarde'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="estudiantes2.php?anio=3">Tercer Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='3' AND turno='Mañana'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='3' AND turno='Tarde'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="estudiantes2.php?anio=4">Cuarto Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='4' AND turno='Mañana'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='4' AND turno='Tarde'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="estudiantes2.php?anio=5">Quinto Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='5' AND turno='Mañana'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php
				$conexion=mysqli_connect('localhost','root','','liceo');
				$sql="SELECT * FROM secciones WHERE año='5' AND turno='Tarde'";
				$result=mysqli_query($conexion,$sql);
		
				while($mostrar=mysqli_fetch_array($result)){
					$id = $mostrar['id'];
					$año = $mostrar['año'];
					$letra_seccion = $mostrar['letra_seccion'];
					$turno = $mostrar['turno'];
					
				 ?>
						<li><a href="a.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</li>
<?php } ?>
		<?php if ($_SESSION["admin"] == 1) {
		?>
		<li><a href="">Carga de Notas</a>
			<ul>
					<li><a href="#">Primer Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='1' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='1' AND turno='Tarde'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Segundo Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='2' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='2' AND turno='Tarde'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Tercer Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='3' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='3' AND turno='Tarde'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Cuarto Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='4' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='4' AND turno='Tarde'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Quinto Año</a>
			<ul>
				<li><a href="#">Mañana</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='5' AND turno='Mañana'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
						
					</ul>
				</li>
				<li><a href="#">Tarde</a>
					<ul>
					<?php 
		$conexion=mysqli_connect('localhost','root','','liceo');
		$sql="SELECT * FROM secciones WHERE año='5' AND turno='Tarde'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			$id = $mostrar['id'];
			$año = $mostrar['año'];
			$letra_seccion = $mostrar['letra_seccion'];
			$turno = $mostrar['turno'];
			
		 ?>
						<li><a href="an.php?anio=<?php echo $año ?>&seccion=<?php echo $letra_seccion ?>&turno=<?php echo $turno ?>"><?php echo $letra_seccion ?></a></li>
						
						<?php } ?>
					</ul>
				</li>
			</ul>
		</li>
				</ul>
		</li>
		<?php
		}
		?>
		<li><a href="">Opciones</a>
						<ul>
					<?php if ($_SESSION["admin"] == 1) {
                    ?>
                    <li><a href="usuarios.php">Nuevo Usuario</a></li>
                    <li><a href="materias2.php">Nueva Materia</a></li>
                    <li><a href="restaurar.php">Respaldar DB</a></li>
					<li><a href="preguntas.php">Preguntas de Seguridad</a></li>
					<li><a href="pdf/manual_administrador.pdf">Descargar Manual</a></li>
					<li><a href="desloguear.php">Cerrar Sesion</a></li>
					
                    <?php
                    }else{
					?>
					<li><a href="pdf/manual_usuario.pdf">Descargar Manual</a></li>
                    <li><a href="preguntas.php">Preguntas de Seguridad</a></li>
					<li><a href="desloguear.php">Cerrar Sesion</a></li>
					<?php
					} 
                    ?>
					
					
						</ul>
					</li>
	</ul>		
</nav>
