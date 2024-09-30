$(document).ready(function () {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        dateClick: function (info) {
            alert('Demande de présence pour : ' + info.dateStr);
        }
    });
    calendar.render();

    $('#requestPresence').click(function () {
        alert('Demande envoyée.');
    });
});
