$(document).ready(function() {
	$("#login").submit(function() {
		$("#entrar").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#entrar").prop("disabled", true);
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		var url="scripts_php/login.php";
		usuario = $.md5($("input[name=usuario]").val());
		clave = $.md5($("input[name=clave]").val());
		//alert (navigator.appCodeName);
		var navegador = navigator.userAgent;//el utimo navegador de la lista es el utilizado
		var so = navigator.platform;
		$.ajax({
			type: "POST",
			url: url,
			//data: $("#login").serialize()+"&llave="+llave,
			data : {usuario:usuario, clave:clave, llave:llave,navegador:navegador, so:so},
			success: function(data) {
				if (data!=3) {
					$("#entrar").html("entrar");
					$("#entrar").prop("disabled", false);
				}
				switch (data) {
					case "conexion":
						var mensaje=mensaje_conexion;
						var estilo=estilo_conexion;
						break;
					case "db":
						var mensaje=mensaje_db;
						var estilo=estilo_conexion;
						break;
					case "0":
						var mensaje='<i class="uk-icon-info"></i> No se permiten campos vacios.';
						var estilo='warning';
						break;
					case "1":
						$("#clave").val("").focus();
						var mensaje='<i class="uk-icon-key"></i> La contraseña es incorrecta.';
						var estilo='warning';
						break;
					case "2":
						$("#usuario").focus();
						$("#clave").val("");
						var mensaje='<i class="uk-icon-user"></i> El usuario no existe.';
						var estilo='danger';
						break;
					case "3":
						$("#entrar").html("<i class='uk-icon-spinner uk-icon-spin'></i> entrando...");
						window.location.reload();
						break;
					default:
						var mensaje='<i class="uk-icon-info"></i> No se completo la operación, intentalo una vez mas.';
						var estilo='danger';
				}
				if (data!=3) {
					$.UIkit.notify({
						message : mensaje,
						status  : estilo,
						timeout : 5000,
						pos     : 'top-right'
					});
				}
			}
		});
		return false;
	});
});
