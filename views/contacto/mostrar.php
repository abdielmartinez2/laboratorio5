<!--EN LA PANTALLA MOSTRAR SOLO DEBEN ESTAR LOS ELEMENTOS A MOSTRAR. EVITAR TENER CODIGO EXTRA QUE NO SEA 
PARA MOSTRAR DATOS, SE PUEDE USAR IF PARA CUANDO UN USUARIO SE LOGEA, PERO RARA VEZ EL IF EN LA
PANTALLA MOSTRAR SE USA PARA ALGO MAS -->
<div class="container">

    <div class="row">
        <h1>Datos de Contacto</h1>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p></p>
            <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
                <tr>
                    <th scope="col">Nombre</th>
                    <td><?php echo $resultados["nombre"] ?> </td>

                </tr>
                <tr>
                    <th scope="col">Correo</th>
                    <td><?php echo $resultados["correo"] ?> </td>
                </tr>
                <tr>
                    <th scope="col">Comentario</th>
                    <td><?php echo $resultados["comentario"] ?> </td>
                </tr>
            </table>
        </div>

    </div>



</div>