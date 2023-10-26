<link rel="stylesheet" href="{{ asset('css/piedepagina.css') }}">

<footer class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>BIBLIOTECA</h3>
                <ul>
                    EL RINCÓN DE URIEL
                </ul>
            </div>
            
            <div class="col-lg-4">
                <h3>COPYRIGHT</h3>
                <p>(c) <span id="year"></span> EL RINCÓN DE URIEL. Todos los derechos reservados.</p>
            </div>

            <div class="col-lg-4">
                <h3>ACTUALIZADO: </h3>
                <p>(c) <span id="date"></span> </p>
            </div>
        </div>
    </div>
</footer>

<script>
    // Obtiene el elemento span con id "year"
    var yearSpan = document.getElementById('year');
    // Obtiene el elemento span con id "date"
    var dateSpan = document.getElementById('date');
    // Obtiene la fecha actual
    var today = new Date();
    // Obtiene el año actual
    var year = today.getFullYear();
    // Obtiene el mes actual
    var month = today.toLocaleString('default', { month: 'long' });
    // Obtiene el día actual
    var day = today.getDate();
    // Establece el año actual en el span
    yearSpan.textContent = year;
    // Establece la fecha actual en el span
    dateSpan.textContent = " " + day + " de " + month + ", " + year;
</script>