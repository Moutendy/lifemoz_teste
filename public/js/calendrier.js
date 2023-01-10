$(document).ready(function() {

    var SITEURL = "{{ url('/') }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#full_calendar_events').fullCalendar({
        editable: true,
        editable: true,
        events: "/calendar-event",
        displayEventTime: true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = true;
            }

        },

        selectable: true,
        selectHelper: true,
        select: function(event_start, event_end, allDay) {
            var event_name = prompt('Event Name:');
            var event_desc = prompt('Event Description');
            if (event_name) {
                var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: "/calendar-crud-ajax",
                    data: {
                        event_name: event_name,
                        event_start: event_start,
                        event_end: event_end,
                        event_description: event_desc,
                        type: 'create'
                    },
                    type: "POST",
                    success: function(data) {
                        displayMessage("Evenement créer.");

                        calendar.fullCalendar('renderEvent', {
                            id: data.id,
                            title: event_name,
                            start: event_start,
                            end: event_end,
                            allDay: allDay
                        }, true);
                        calendar.fullCalendar('unselect');
                        location.reload();
                    }
                });
            }
        },
        eventDrop: function(event, delta) {
            var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

            $.ajax({
                url: '/calendar-crud-ajax',
                data: {
                    title: event.event_name,
                    start: event_start,
                    end: event_end,
                    id: event.id,
                    type: 'edit'
                },
                type: "POST",
                success: function(response) {
                    displayMessage("Evement modifier ");
                }
            });
        },
        eventClick: function(event) {

           console.log(event.id);
           deleteevent(event.id);
        }
    });
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "/calendar-event");
    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            // Response
            responses = JSON.parse(this.responseText);
            document.getElementById("event").innerHTML = responses.length;
            for (res of responses) {
                console.log(responses.length)
                calendar.fullCalendar('renderEvent', {
                    title: res.event_name,
                    start: res.event_start,
                    end: res.event_end,
                    id:res.id

                }, true);
            }



        } else {

        }

    }
    xhttp.send();





});

function displayMessage(message) {
    Swal.fire(
        message,
        'success'
      )
;
}

function deleteevent(id)
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "/delete/"+id);
    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            // Response
            displayMessage("evenement supprimer");
            location.reload();


        } else {

        }

    }
    xhttp.send();

}
