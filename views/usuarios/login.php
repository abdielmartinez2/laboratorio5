
<div class="container">
    
    <div class="row">
        <p></p>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <?php if ($msg != ""){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> <?php echo $msg ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>

        <form action="<?php echo "index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("validar")?>  " method="post">
        <div class="mb-3">
            <p></p>
            <label for="exampleInputText1" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="exampleInputText1" name="txtusuario" aria-describedby="textHelp">
            <div id="textHelp" class="form-text"> </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="txtpassword" aria-describedby="passwordHelp">
            <div id="passwordHelp" class="form-text"> </div>
        </div>

        <!-- CHECKBOX RECORDAR -->
        <div class="form-check">
            <input class="form-check-input" name="chkrecordar" type="checkbox" value="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Recordar Datos
            </label>
        </div>
        <p></p>
        <!-- EN TODOS LOS FORMULARIOS SE DEBE AGREGAR EL TOKEN-->
        <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
        <button type="submit" class="btn btn-success">Entrar</button>
        </form>

        </div>
        
    </div>
    
</div>
