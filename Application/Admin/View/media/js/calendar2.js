var Calendar = function () {


    return {
        //main function to initiate the module
        init: function () {

            App.addResponsiveHandler(function () {
                Calendar.initCalendar();
            });

            $('.page-sidebar .sidebar-toggler').click(function () {
                Calendar.initCalendar();
            });

            Calendar.initCalendar();
        },

        initCalendar: function () {

            if (!jQuery().fullCalendar) {
                return;
            }
            

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var h = {};

            if (App.isRTL()) {
                 if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        right: 'title, prev, next',
                        center: '',
                        right: 'agendaDay, agendaWeek, month, today'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        right: 'title',
                        center: '',
                        left: 'agendaDay, agendaWeek, month, today, prev,next'
                    };
                }                
            } else {
                 if ($('#calendar').parents(".portlet").width() <= 720) {
                    $('#calendar').addClass("mobile");
                    h = {
                        left: 'title, prev, next',
                        center: '',
                        right: 'today,month,agendaWeek,agendaDay'
                    };
                } else {
                    $('#calendar').removeClass("mobile");
                    h = {
                        left: 'title',
                        center: '',
                        right: 'prev,next,today,month,agendaWeek,agendaDay'
                    };
                }
            }
           

            var initDrag = function (el) {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim(el.text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                el.data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                el.draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            }

            var addEvent = function (title) {
                title = title.length == 0 ? "未命名事件" : title;
                var html = $('<div class="external-event label">' + title + '</div>');
                jQuery('#event_box').append(html);
                initDrag(html);
            }

            $('#external-events div.external-event').each(function () {
                initDrag($(this))
            });

            $('#event_add').unbind('click').click(function () {
                var title = $('#event_title').val();
                addEvent(title);
            });

            //predefined events
            $('#event_box').html("");
            addEvent("国创计划");
            addEvent("新苗计划");
            addEvent("春萌计划");
            addEvent("课外自主研究");
            addEvent("教师课外项目");

            $('#calendar').fullCalendar('destroy'); // destroy the calendar
            $('#calendar').fullCalendar({ //re-initialize the calendar
                header: h,
                slotMinutes: 15,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');
                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.className = $(this).attr("data-class");

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                events: [{
                        title: '准备国创计划申报',                        
                        start: new Date(y, m, 1),
                        backgroundColor: App.getLayoutColorCode('yellow')
                    }, {
                        title: '国创计划讨论',
                        start: new Date(y, m, d - 5),
                        end: new Date(y, m, d - 2),
                        backgroundColor: App.getLayoutColorCode('green')
                    }, {
                        title: '初步讨论题目',
                        start: new Date(y, m, d - 3, 16, 0),
                        allDay: false,
                        backgroundColor: App.getLayoutColorCode('red')
                    }, {
                        title: '项目自定义设计',
                        start: new Date(y, m, d + 4),
                        end: new Date(y, m, d + 6),
                        backgroundColor: App.getLayoutColorCode('green')
                    }, {
                        title: '教师自主项目规划',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false,
                    }, {
                        title: '初拟国创计划书',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        backgroundColor: App.getLayoutColorCode('grey'),
                        allDay: false,
                    }, {
                        title: '国创讨论',
                        start: new Date(y, m, d + 1, 19, 0),
                        end: new Date(y, m, d + 1, 22, 30),
                        backgroundColor: App.getLayoutColorCode('purple'),
                        allDay: false,
                    }, {
                        title: '计划书申报',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        backgroundColor: App.getLayoutColorCode('yellow'),
                    }
                ]
            });

        }

    };

}();