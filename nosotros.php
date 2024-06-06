<?php include "header.php";

?>
<section>
    <h1>Nosotros</h1>
    <div id="nosotros"></div>
    <h2>Filosofía Empresarial</h2>
        <p>En Coningenio, nuestra filosofía empresarial se centra en la innovación, la calidad y el compromiso con nuestros clientes. Creemos en el poder transformador de la tecnología y trabajamos para ofrecer soluciones digitales que no solo cumplen, sino que superan las expectativas. Nuestra misión es ayudar a las empresas a prosperar en un entorno digital en constante evolución, proporcionando herramientas y estrategias que impulsen su crecimiento y éxito.</p>
    <h2>Valores</h2>
    <ul>
        <li><strong>Innovación:</strong> Nos esforzamos por estar a la vanguardia de la tecnología, buscando continuamente nuevas y mejores formas de resolver los desafíos de nuestros clientes. La creatividad y la innovación son el corazón de todo lo que hacemos.</li>
        <li><strong>Excelencia:</strong> Nos comprometemos a ofrecer servicios de la más alta calidad. Cada proyecto es una oportunidad para demostrar nuestro compromiso con la excelencia, asegurando que los resultados finales sean impecables y de gran impacto.</li>
        <li><strong>Integridad:</strong> Operamos con los más altos estándares éticos. La transparencia, la honestidad y la responsabilidad son fundamentales en nuestras relaciones con los clientes, socios y empleados.</li>
        <li><strong>Colaboración:</strong> Creemos en la fuerza del trabajo en equipo. Fomentamos un ambiente de colaboración donde se valoran y respetan todas las ideas, trabajando juntos hacia un objetivo común.</li>
        <li><strong>Orientación al Cliente:</strong> El éxito de nuestros clientes es nuestro éxito. Escuchamos y comprendemos sus necesidades para proporcionar soluciones personalizadas que les permitan alcanzar sus metas y superar sus desafíos.</li>
        <li><strong>Responsabilidad Social:</strong> Estamos comprometidos con el desarrollo sostenible y el bienestar de nuestra comunidad. Buscamos minimizar nuestro impacto ambiental y contribuir positivamente a la sociedad.</li>
    </ul>
</section>

<script>
    fetch('api.php?endpoint=nosotros')
    .then(response => response.json())
    .then(data => {
       console.log(data)
        document.getElementById("nosotros").innerHTML = `
            <h2>${data.data.mision.titulo.esp}</h2>
            <p>${data.data.mision.contenido.esp}</p>            
            <h2>${data.data.vision.titulo.esp}</h2>
            <p>${data.data.vision.contenido.esp}</p>

       `
    })

</script>