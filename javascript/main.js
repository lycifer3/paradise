$(document).ready(function() {
    $("#nav > li > a.collapsed + ul").slideToggle("medium");
    $("#nav > li > a").click(function() {
        $(this).toggleClass("expanded").toggleClass("collapsed").parent('li').find("ul").slideToggle("medium");
    });

    $.datepicker.regional['ru'] = {
        closeText:   'Закрыть',
        prevText:    '&#x3c;Пред',
        nextText:    'След&#x3e;',
        currentText: 'Сегодня',
        monthNames:  ['Январь','Февраль','Март','Апрель','Май','Июнь',
                     'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'
        ],
        monthNamesShort: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                          'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'
        ],
        dayNames:      ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
        dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
        dayNamesMin:   ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        dateFormat:    'dd.mm.yy',
        firstDay:      1,
        isRTL:         false
    };

    $.datepicker.setDefaults($.datepicker.regional['ru']);

    $('#datepicker').datepicker({
        dateFormat: "dd.mm.yy",
        changeMonth: true,
        changeYear: true
    });
});

function activePopUp(message, title, path, width, height) {

    $("#popup").attr('title', title);
    $("#popup").html(message);

    if(width == undefined) {
        width = 300;
    }

    if(height == undefined) {
        height = 180;
    }

    $("#popup").dialog({
        resizable: false,
        width: width,
        height: height,
        buttons: {
            Ok: function() {
                document.location.href = path;
                $(this).dialog("close");
            },

            "Отмена": function() {
                $(this).dialog("close");
            }
        }
    });
}