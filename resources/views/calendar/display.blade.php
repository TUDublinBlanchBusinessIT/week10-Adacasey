@extends('layouts.app')
@section('content')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title'
            },
            slotDuration: '00:10:00',
            initialDate: '2017-01-01',
            editable: true,
            events: '{!! route("calendar.json") !!}'
        });
        calendar.render();
    });
</script>
@endsection