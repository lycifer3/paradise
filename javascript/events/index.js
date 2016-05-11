$(document).ready(function(){
    var calendar = $('#calendar').fullCalendar({
        theme: true,
        firstDay: 1,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        allDayText: "Все дни",
        timeFormat: {
            agenda: 'h:mm'
        },
        monthNames: ['Январь','Февраль','Март','Апрель','Май','οюнь','οюль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв.','Фев.','Март','Апр.','Май','οюнь','οюль','Авг.','Сент.','Окт.','Ноя.','Дек.'],
        dayNames: ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],
        dayNamesShort: ["ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ"],
        buttonText: {
            prev: "&nbsp;&#9668;&nbsp;",
            next: "&nbsp;&#9658;&nbsp;",
            prevYear: "&nbsp;&lt;&lt;&nbsp;",
            nextYear: "&nbsp;&gt;&gt;&nbsp;",
            today: "Сегодня",
            month: "Месяц",
            week: "Неделя",
            day: "День"
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var start = $.fullCalendar.formatDate(start, 'yyyy-MM-dd HH:mm:ss');
            var title = prompt('Название события:');
            if (title) {
                calendar.fullCalendar('renderEvent', {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    },
                    true
                );
                addEvent(start, title);
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        events: '/events/source/',
        eventClick: function(calEvent, jsEvent, view) {
            if(calEvent.type != 'event') {
                return false;
            }

            if(confirm("Вы уверены что хотите удалить событие?")) {
                $('#calendar').fullCalendar('removeEvents', calEvent._id);
                deleteEvent(calEvent._id);
            }
        },
        eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
            if(event.type == 'event') {
                var start = $.fullCalendar.formatDate(event.start, 'yyyy-MM-dd HH:mm:ss');
                update(event.id, start);
            } else {
                revertFunc();
            }
        }
    });
});

/**
 * Add event
 * @param eventDate
 * @param eventTitle
 */
function addEvent(eventDate, eventTitle) {
    $.post('/events/save', {
        eventDate:  eventDate.toString(),
        eventTitle: eventTitle
    }, function(){
            alert("Событие добавлено");
    }, 'json');
}

/**
 * Delete event
 * @param id
 */
function deleteEvent(id) {
    $.post('/events/delete', {
        eventId:  id
    }, function(){
        alert("Событие удалено");
    }, 'json');
}

/**
 * Update event
 * @param id
 */
function update(id, date) {
    $.post('/events/update', {
        eventId:  id,
        eventDate: date
    }, function(){
        alert("Событие перенесено");
    }, 'json');
}