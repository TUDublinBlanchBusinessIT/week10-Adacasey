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
            editable: true,
            events: [ 
                { title: 'All Day Event', start: '2023-02-20' },
                { title: 'Long Event', start: '2023-02-22', end: '2023-02-25' } 
            ],
        });
        calendar.render();
    });
</script>
@endsection