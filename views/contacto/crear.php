<div class="container">
    <div class="row">
        <p></p>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <!--esta linea de abajo encripta los datos mostrados en la url, este metodo esta alojado en utils/seg.php-->
            <form action="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("mostrar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre </label>
<!--en la linea value se refiere a cuando el nombre esta colocado y se da click en enviar y falto un campo 
requerido por llenar, no borrara el campo nombre sino que lo mantendra hasta llenar el campo faltante-->
                    <input type="text" class="form-control" id="exampleInputText1" name="txtnombre_contacto" value="<?php echo isset($nombre)?$nombre:"" ?>" aria-describedby="textHelp">
<!--esta linea texthelp $error hace referencia a la validacion del campo por llenar y en la posicion nombre -> [0] que se encuentra el campo requerido-->
                    <div id="textHelp" style="color:#FF0000" class="form-text"><?php echo isset($error[0])?$error[0]:"" ?> </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
<!--en la linea value se refiere a cuando el correo esta colocado y se da click en enviar y falto un campo 
requerido por llenar, no borre el campo correo sino que lo manntendra hasta llenar el campo faltante-->
                    <input type="email" class="form-control" id="exampleInputEmail1" name="txtcorreo_contacto"  value="<?php echo isset($correo)?$correo:"" ?>" aria-describedby="emailHelp">
<!--esta linea texthelp $error hace referencia a la validacion del campo por llenar y en la posicion correo -> [1] que se encuentra el campo requerido-->
                    <div id="textHelp" style="color:#FF0000" class="form-text"><?php echo isset($error[1])?$error[1]:"" ?> </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="txtcomentario_contacto" value="<?php echo isset($comentario)?$comentario:"" ?>" rows="3"></textarea>
                 <!--esta linea texthelp $error hace referencia a la validacion del campo por llenar y en la posicion comentario -> [2] que se encuentra el campo requerido-->
                 <div id="textHelp" style="color:#FF0000" class="form-text"><?php echo isset($error[2])?$error[2]:"" ?> </div>
                </div>

                <!-- CREACION DE UN CAMPO OCULTO -->
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Borrar Datos</button>

            </form>

        </div>


    </div>

</div>