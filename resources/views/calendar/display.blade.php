@extends('layouts.app')
@section('content')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@include('calendar.modalbooking')
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
            events: '{!! route("calendar.json") !!}',
            dateClick: function(info) {
                document.getElementById('starttime').value = info.date.toISOString().substring(11, 16);
                document.getElementById('bookingDate').value = info.date.toISOString().substring(0, 10);
                var modalElement = document.getElementById('fullCalModal');
                var modal = new bootstrap.Modal(modalElement);
                modal.show();
            },
        });
        calendar.render();
    });

    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("submitButton").addEventListener("click", function (e) {
            e.preventDefault();
            const form = document.getElementById("bookingForm");
            form.submit();
            const modal = bootstrap.Modal.getInstance(document.getElementById("fullCalModal"));
            modal.hide();
        });
    });
</script>
@endsection