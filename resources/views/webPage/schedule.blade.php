@extends('webPage.main')
@section('content')
    <!-- Heading Start -->
    <section class="page-heading haslayout">
        <div class="container">
            <div class="row">
                <h1>PROGRAMA OFICIAL HALF TRIATHLON IRONRUNA 2017</h1>
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
            defaultDate: '2017-08-05',
            locale: 'es',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: [
             	{
                    title: 'Cierre de inscripciones HALF TRIATHLON IRONRUNA 2017 o cuando se completen los 400 cupos.',
                    start: '2017-07-31T23:59:00'
                },
                {
                    title: 'Registro y entrega de kits de competencia (lugar por definir aún).',
                    start: '2017-08-05T15:00:00',
                    end:'2017-08-05T20:00:00'
                },
                {
                    title: 'Charla de Psicología',
                    start: '2017-08-05T17:00:00',
                    end:'2017-08-05T17:15:00'
                },
				{
                    title: 'Charla Médica',
                    start: '2017-08-05T17:15:00',
                    end:'2017-08-05T17:30:00'
                },
                {
                    title: 'Charla Técnica (mismo lugar).',
                    start: '2017-08-05T17:30:00',
                    end:'2017-08-05T18:00:00'
                },
               
                {
                    title: 'Ingreso a zona de transición. Registro obligatorio de bicicleta / Casco / Bolsa de bici / Bolsa de carrera.',
                    start: '2017-08-06T05:00:00',
                    end: '2017-08-06T06:45:00'
                },
                {
                    title: 'Inicio de la competencia y primera edición del HALF TRIATHLON IRONRUNA 2017.',
                    start: '2017-08-06T07:00:00'
                },
                {
                    title: 'Exhibición de productos auspiciadores.',
                    start: '2017-08-06T08:00:00',
                    end:'2017-08-06T15:00:00'
                },
                {
                    title: 'Premiación General',
                    start: '2017-08-06T15:00:00'
                },
                {
                    title: 'Cierre oficial de la competencia y Premiaciones.',
                    start: '2017-11-05T15:00:00'
                }
            ]
        });
    });
</script>
@endsection