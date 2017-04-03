@extends('webPage.main')
@section('content')
    <!-- Heading Start -->
    <section class="page-heading haslayout">
        <div class="container">
            <div class="row">
                <h1>Programa</h1>
            </div>
        </div>
    </section>
    <!-- Heading End -->
    <div class="container content">
        <div class="row">
            <div id='calendar'></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src='js/plugin/fullcalendar/locale-all.js'></script>

    <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'listWeek,agendaWeek,agendaDay,month'
            },
            defaultView: 'listWeek',
            defaultDate: '2017-08-06',
            locale: 'es',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'Registro y entrega de Kits de competencia Salón Paracas Hotel Doubletree.',
                    start: '2017-08-06T15:00:00',
                    end:'2017-08-06T20:00:00'
                },
                {
                    title: 'Exposición de maracas en Salón Paracas.',
                    start: '2017-08-06T15:00:00',
                    end:'2017-08-06T20:00:00'
                },
                {
                    title: 'Venta de suvenirs del evento',
                    start: '2017-08-06T15:00:00',
                    end:'2017-08-06T20:00:00'
                },
                {
                    title: 'Asistencia mecánica a todos los deportistas. (Jardines del Salón Paracas)',
                    start: '2017-08-06T15:00:00',
                    end:'2017-08-06T20:00:00'
                },
                {
                    title: 'Compra de fotografías para la competencia.',
                    start: '2017-08-06T15:00:00',
                    end:'2017-08-06T20:00:00'
                },{
                    title: 'Charla Técnica Salón Paracas.',
                    start: '2017-08-06T18:00:00'
                },{
                    title: 'Charla Reserva Nacional de Paracas . Salón Paracas.',
                    start: '2017-08-06T18:30:00'
                },

                {
                    title: 'Ingreso a zona de transición. Registro obligatorio de bicicleta / Casco / Bolsa de bici / Bolsa de carrera.',
                    start: '2017-11-05T05:00:00',
                    end: '2017-11-05T06:45:00'
                },
                {
                    title: 'Inicio de la competencia',
                    start: '2017-11-05T07:00:00'
                },
                {
                    title: 'Exhibición de productos auspiciadores (zona de competencia).',
                    start: '2017-11-05T08:00:00',
                    end:'2017-11-05T15:00:00'
                },
                {
                    title: 'Premiación General',
                    start: '2017-11-05T15:00:00'
                },
                {
                    title: 'Termino oficial de la competencia. (Todos deben retirar su bici de la zona de transición).',
                    start: '2017-11-05T15:00:00'
                },
                {
                    title: 'Fiesta de clausura Triatlón Iron Runa 2017.',
                    start: '2017-11-05T19:00:00'
                }
            ]
        });
    });
</script>
@endsection