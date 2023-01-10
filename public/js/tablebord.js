const loaderContainer = document.querySelector('.loader');
loaderContainer.style.display = 'none';

function calendrier(id)
 {

loaderContainer.style.display = 'block'



var calendar = $('#full_calendar_events').fullCalendar({


}
);
var xhttp = new XMLHttpRequest();
xhttp.open("GET", "/api/tablebordbyuser/"+id);
xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {

        // Response
        responses = JSON.parse(this.responseText);

        for (res of responses) {

            calendar.fullCalendar('renderEvent', {
                title: res.event_name,
                start: res.event_start,
                end: res.event_end,

            }, true);
        }
        console.log('ddd')


    } else {

    }

}
xhttp.send();
 }
