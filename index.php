<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tinta Nocturna</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- MENÚ SUPERIOR FIJO -->
    <div class="barra_nav">
        <a href="#inicio" class="btn_nav">Home</a>

        <div class="menu_genero">
            <button class="boton_genero">Género ▼</button>
            <div class="dropdown">
                <a href="#terror">Terror</a>
                <a href="#romance">Romance</a>
                <a href="#comico">Cómico</a>
                <a href="#misterio">Misterio</a>
                <a href="#suspenso">Suspenso</a>
            </div>
        </div>
    </div>

    <!-- SECCIÓN DE INICIO -->
    <section id="inicio" class="genero">


        </div>
    </section>

    <!-- SECCIONES DE GÉNERO -->
    <section id="terror" class="genero">
        <div class="contenido">
            <h2>Género: Terror</h2>

            <h3> Mariana Enriquez</h3>
            <p><strong>Obras:</strong> <em>Nuestra parte de la noche</em>, <em>Las cosas que perdimos en el fuego</em>
            </p>
            <p>Escritora y periodista argentina.
                Su estilo mezcla horror urbano con crítica social.
                Sus relatos tratan temas como la dictadura, la pobreza
                y lo sobrenatural.</p>

            <h3> Hugo Burel</h3>
            <p><strong>Obras:</strong> <em>El ojo de vidrio</em>, <em>El caso Bonapelch</em></p>
            <p>Autor uruguayo que combina suspenso psicológico con elementos fantásticos.
                Sus tramas son oscuras, introspectivas y éticas.</p>

            <h3> María José Ferrada</h3>
            <p><strong>Obras:</strong> <em>Kramp</em>, <em>El idioma secreto</em></p>
            <p>Poeta y narradora chilena.
                Su estilo melancólico tiene una atmósfera inquietante, abordando emociones profundas con
                una delicadeza perturbadora.</p>
        </div>
    </section>

    <section id="romance" class="genero">
        <div class="contenido">
            <h2>Género: Romance</h2>

            <h3> Florencia Bonelli</h3>
            Obras: Caballo de fuego, Aquí hay dragones
            Cordobesa y una de las autoras más populares del romance histórico. Sus novelas combinan amor,
            política y diferencias culturales.

            <h3>Pedro Mairal</h3>
            Obras: La uruguaya, El año del desierto
            Autor argentino con vínculo fuerte con Uruguay. Mezcla romance con introspección y humor.
            Su estilo es íntimo y reflexivo.

            <h3> Carla Guelfenbein</h3>
            Obras: Contigo en la distancia, El resto es silencio
            Escritora chilena que explora emociones profundas.
            Sus protagonistas femeninas enfrentan dilemas afectivos con intensidad psicológica.
        </div>
    </section>

    <section id="comico" class="genero">
        <div class="contenido">
            <h2>Género: Cómico</h2>

            <h3>Roberto Fontanarrosa</h3>
            Obras: El mundo ha vivido equivocado, Inodoro Pereyra
            Rosarino, humorista gráfico y escritor.
            Su estilo combina ironía, absurdo y personajes populares entrañables.

            <h3> Leo Maslíah</h3>
            Obras: Literatura con M de Música, El hombre que miraba la luna
            Músico y autor uruguayo con humor surrealista y filosófico.
            Crea situaciones absurdas con profundidad intelectual.

            <h3>Hernán Rivera Letelier</h3>
            Obras: La reina Isabel cantaba rancheras, El arte de la resurrección
            Autor chileno nacido en el norte.
            Su humor rescata lo popular con tintes de realismo mágico y crítica social.
        </div>
    </section>

    <section id="misterio" class="genero">
        <div class="contenido">
            <h2>Género: Misterio</h2>

            <h3>Ernesto Sábato</h3>
            Obras: El túnel, Sobre héroes y tumbas
            Físico y escritor argentino.
            Su obra profundiza en el misterio de la mente humana y los dilemas existenciales.

            <h3>Mercedes Rosende</h3>
            Obras: Mujer equivocada, El miserere de los cocodrilos
            Autora uruguaya de novelas policiales con humor negro.
            Sus protagonistas son mujeres que enfrentan el caos y el crimen.

            <h3>Ramón Díaz Eterovic</h3>
            Obras: El color de la piel, La oscura memoria de las armas
            Creador del detective Heredia.
            Sus novelas retratan Santiago desde una perspectiva crítica, melancólica y enigmática.
        </div>
    </section>

    <section id="suspenso" class="genero">
        <div class="contenido">
            <h2>Género: Suspenso</h2>

            <h3> Gabriel Rolón</h3>
            Obras: Los padecientes, La voz ausente
            Psicólogo y escritor argentino. Sus novelas combinan crímenes con análisis psicológico, explorando secretos
            familiares.

            <h3> Daniel Mella</h3>
            Obras: El hermano mayor, Lava
            Uruguayo con estilo introspectivo y perturbador.
            Sus historias manejan tensión emocional y atmósferas densas.

            <h3> Alejandro Zambra</h3>
            Obras: Formas de volver a casa, Poeta chileno
            Autor chileno con narrativa fragmentada e íntima.
            Aunque no clásico del suspenso, genera una tensión emocional constante.
        </div>
    </section>

    <div class="suscripcion">
        <h3>¿Querés recibir tinta fresca?</h3>
        <p>Suscribite y recibí novedades ocultas sobre autores, géneros y relatos aún no revelados...</p>


        <form action="suscribir.php" method="POST">
            <input type="email" name="correo" required placeholder="34461608@itbeltran.com.ar" >
            <button type="submit">Suscribirme</button>
        </form>
    </div>









</body>

</html>