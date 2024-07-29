document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: function(fetchInfo, successCallback, failureCallback) {
            $.ajax({
                url: 'fetch-events.php', // URL ke server untuk mengambil data acara
                dataType: 'json',
                success: function(data) {
                    successCallback(data);
                },
                error: function() {
                    failureCallback();
                }
            });
        }
    });
    calendar.render();
});
