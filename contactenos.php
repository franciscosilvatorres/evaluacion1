<?php include "header.php";

?>
<div class="contact">
    <h1>Contáctenos</h1>
    
    <form action="enviar_contacto.php" method="POST">
    <table border="1">
        <tr> 
            <td>
                Nombre
            </td>
            <td>
                <input type="text" name="nombre" id="nombre" required>
            </td>
        </tr>
        <tr>
            <td>
                Correo electronico
            </td>
            <td>
                <input type="email" name="email" id="email" required>
            </td>
        </tr>  
        <tr> 
            <td>
                Numero de telofono
            </td>
            <td>
                <input type="number" name="telefono" id="telefono" required>
            </td>
        </tr>
        <tr> 
            <td>
                Mensaje
            </td>
            <td>
                <input type="text" name="mensaje" id="mensaje" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="enviar"
            </td>
        </tr>
</table>
</form>
    </div>
        <div class="contact-info">
            <p>Dirección: Av. Providencia 1234, Oficina 601, Providencia, Santiago, Chile</p>
            <p>Teléfono: +56 2 1234 5678</p>
            <p>Email: info@coningenio.cl</p>
        </div>
</div> 