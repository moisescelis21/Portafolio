$(document).ready(function(){

	//loader menu
	/*$(document).ready(function(){
		$("#menu li").click(function(){
			$("a", this).append(" <i class='uk-icon-spinner uk-icon-spin'></i>");
		});
	});*/

	$("body").on("submit","#registrar_productos", function(event){
		event.preventDefault();
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		alert($(this).serialize());
		var url="scripts_php/insumos.php";
		$("#registrar_insumos").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#registrar_insumos").prop("disabled", true);
		$.ajax({
  			type: "POST",
  			url: url,
  			data: $(this).serialize()+"&llave="+llave,
  			cache: false,
		
  		success:function(data) {
  			$("#registrar_insumos").prop("disabled", false);
  			$("#registrar_insumos").html("guardar");
    		switch(data){

  				case "0":
  					$.UIkit.notify('<i class="uk-icon-exclamation-circle"></i> Rellene un Campo Obligatorio',{status:'warning'});
  					break;
  				case "1":
  					$.UIkit.notify('<i class="uk-icon-check"></i> Datos Guardados',{status:'success'});
  					break;

  				case "2":
  					$.UIkit.notify('<i class="uk-icon-exclamation-triangle"></i> Datos No Fuero Guardados',{status:'warning'});
  					break;
  			}
  		},

  		error:function(e){
  			$("#registrar_insumos").prop("disabled", false);
  			$("#registrar_insumos").html("guardar");
  			$("#alertas").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  		}
  		});
  		
	});

	$("body").on("submit","#guardar_productos", function(event){
		event.preventDefault();
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		alert($(this).serialize());
		var url="scripts_php/guardar_entrada_insumo.php";
		$("#guardar_insumos").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#guardar_insumos").prop("disabled", true);
		$.ajax({
  			type: "POST",
  			url: url,
  			data: $(this).serialize()+"&llave="+llave,
  			cache: false,
		
  		success:function(data) {
  			$("#guardar_insumos").prop("disabled", false);
  			$("#guardar_insumos").html("guardar");
    		switch(data){

  				case "0":
  					$.UIkit.notify('<i class="uk-icon-exclamation-circle"></i> Rellene un Campo Obligatorio',{status:'warning'});
  					break;
  				case "1":
  					$.UIkit.notify('<i class="uk-icon-check"></i> Datos Guardados',{status:'success'});
  					break;

  				case "2":
  					$.UIkit.notify('<i class="uk-icon-exclamation-triangle"></i> Datos No Fuero Guardados',{status:'warning'});
  					break;
  			}
  		},

  		error:function(e){
  			$("#guardar_insumos").prop("disabled", false);
  			$("#guardar_insumos").html("guardar");
  			$("#alertas").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  		}
  		});
	});

	$("#alertas_medicamentos").load("scripts_php/comprobar_vencimiento.php");

	//modales
	$("body").on("change", "#nombre_comercial_g", function(){
		if($("#nombre_comercial_g").val() == "REGISTRAR INSUMOS"){
			var modal = $.UIkit.modal("#regis_insumos");

			if ( modal.isActive() ) {
    			modal.hide();
			} else {
    			modal.show();
			}
		}
	});

	$("body").on("change", "#nombre_proveedor", function(){
		if($("#nombre_proveedor").val() == "REGISTRAR PROVEEDOR"){
			var modal = $.UIkit.modal("#regis_proveedores");

			if ( modal.isActive() ) {
    			modal.hide();
			} else {
    			modal.show();
			}
		}
	});

	$("body").on("submit","#registrar_productos_modal", function(event){
		event.preventDefault();
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		//alert($(this).serialize());
		var url="scripts_php/insumos.php";
		$("#registrar_insumos_modal").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#registrar_insumos_modal").prop("disabled", true);
		$.ajax({
  			type: "POST",
  			url: url,
  			data: $(this).serialize()+"&llave="+llave,
  			cache: false,
		
  		sucess:function(data) {
  			$("#registrar_insumos_modal").prop("disabled", false);
  			$("#registrar_insumos_modal").html("guardar");
    		switch(data){

  				case "0":
  					$.UIkit.notify('<i class="uk-icon-exclamation-circle"></i> Rellene un Campo Obligatorio',{status:'warning'});
  					break;
  				case "1":
  					$.UIkit.notify('<i class="uk-icon-check"></i> Datos Guardados',{status:'success'});
  					break;

  				case "2":
  					$.UIkit.notify('<i class="uk-icon-exclamation-triangle"></i> Datos No Fuero Guardados',{status:'warning'});
  					break;
  			}
  		},

  		error:function(e){
  			$("#registrar_insumos_modal").prop("disabled", false);
  			$("#registrar_insumos_modal").html("guardar");
  			//$("#alertas").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  			$("#alertas_modal_registro_productos").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  		}
  		});
	});


	$("body").on("submit","#registrar_proveedores", function(event){
		event.preventDefault();
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		//alert($(this).serialize());
		var url="scripts_php/guardar_proveedores.php";
		$("#registrar_proveedor").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#registrar_proveedor").prop("disabled", true);
		$.ajax({
  			type: "POST",
  			url: url,
  			data: $(this).serialize()+"&llave="+llave,
  			cache: false,
		
  		success:function(data) {
  			$("#registrar_proveedor").prop("disabled", false);
  			$("#registrar_proveedor").html("guardar");
  			switch(data){

  				case "0":
  					$.UIkit.notify('<i class="uk-icon-exclamation-circle"></i> Rellene un Campo Obligatorio',{status:'warning'});
  					break;
  				case "1":
  					$.UIkit.notify('<i class="uk-icon-check"></i> Datos Guardados',{status:'success'});
  					break;

  				case "2":
  					$.UIkit.notify('<i class="uk-icon-exclamation-triangle"></i> Datos No Fuero Guardados',{status:'warning'});
  					break;
  			}
  		},

  		error:function(e) {
  			$("#registrar_proveedor").prop("disabled", false);
  			$("#registrar_proveedor").html("guardar");
  			$("#alertas").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  			$("#alertas_modal_registro_proveedores").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  			//$.UIkit.notify('Error de Interno del Servidor: '+e.statusText,{status:'warning'});
  		}
  		});
	});
	
	$("body").on("submit", "#buscar_proveedores", function(event){
		event.preventDefault();
		var llave=rand_code('0123456789abcdefABCDEF', '20');
		//alert($(this).serialize());
		var url="scripts_php/guardar_proveedores.php";
		$("#registrar_proveedor").html("<i class='uk-icon-spinner uk-icon-spin'></i> espere...");
		$("#registrar_proveedor").prop("disabled", true);
		$.ajax({
  			type: "POST",
  			url: url,
  			data: $(this).serialize()+"&llave="+llave,
  			cache: false,
		
  		success:function(data) {
  			$("#buscar_proveedor").prop("disabled", false);
  			$("#buscar_proveedor").html("buscar");
  			switch(data){

  				case "0":
  					$.UIkit.notify('<i class="uk-icon-exclamation-circle"></i> Rellene un Campo Obligatorio',{status:'warning'});
  					break;
  				case "1":
  					$.UIkit.notify('<i class="uk-icon-check"></i> Datos Guardados',{status:'success'});
  					break;

  				case "2":
  					$.UIkit.notify('<i class="uk-icon-exclamation-triangle"></i> Datos No Fuero Guardados',{status:'warning'});
  					break;
  			}
  		},

  		error:function(e) {
  			$("#buscar_proveedor").prop("disabled", false);
  			$("#buscar_proveedor").html("buscar");
  			$("#alertas").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  			$("#alertas_modal_registro_proveedores").html('<div class="uk-alert uk-alert-danger"><a href="" class="uk-alert-close uk-close"></a><i class="uk-icon-exclamation"></i> Disculpe su solicitud al Servidor: '+e.statusText+'</div>');
  			//$.UIkit.notify('Error de Interno del Servidor: '+e.statusText,{status:'warning'});
  		}
  		});
		
		});
	
});
