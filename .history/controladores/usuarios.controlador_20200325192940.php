<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	public function ctrIngresoUsuario(){

		if(isset($_POST["adUser"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["adUser"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingpassword"])){

				$tabla = "tb_usuarios";

				$item = "usuario";
				$valor = $_POST["adUser"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["adUser"] && $respuesta["pass"] == $_POST["ingpassword"]){

					$_SESSION["iniciarSesion"] = "ok";

					echo '<script>

						window.location = "inicio";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}

	}

}
	


