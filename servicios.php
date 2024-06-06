<?php include "header.php";

?>
<section>
    <h1>servicios</h1>
    <div id="servicios"></div>
</section>
<script>
    fetch('api.php?endpoint=servicios')
    .then(response => response.json())
    .then(data => {
       console.log(data)
       let contenido = ""
       data.data.forEach(servicio => {
            contenido += `
                <h2>${servicio.titulo.esp}</h2>
                <p>${servicio.texto.esp}</p>
            `
       })

        document.getElementById("servicios").innerHTML = contenido
    })

</script>