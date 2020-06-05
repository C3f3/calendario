<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='css/core/main.min.css' rel='stylesheet' />
<link href='css/daygrid/main.min.css' rel='stylesheet' />
<script src='js/core/main.min.js'></script>
<script src='js/interaction/main.min.js'></script>
<script src='js/daygrid/main.min.js'></script>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: "es",
      plugins: [ 'interaction', 'dayGrid' ],
      //defaultDate: '2019-04-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: 'lista_eventos.php',
      //cache jason
      extraParams: function() {
        return {
          cachebuster: new Date().valueOf()
        };
      }
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
