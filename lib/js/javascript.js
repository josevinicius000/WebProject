(function(win, doc){
    'use strict';

    //Exibe o calendário
    function getCalendar(profile, div)
    {
        let calendarEl = doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{
            start: 'prev, next, today', 
            center: 'title',
            end: 'dayGridMonth, timeGridWeek, timeGridDay' 
          },
          locale: 'pt-br',
          buttonText: { 
            today:    'hoje',
            month:    'mês',
            week:     'semana',
            day:      'dia'
          },
          events: '../../controllers/ControllerEvents.php',
          eventClick: function(info){
              if (profile == 'manager') {
                 win.location.href = '../../views/manager/edit.php?id='+ info.event.id
              }
              else {
                 win.location.href = '../../views/user/view.php?id='+ info.event.id
              }
          },
          dateClick: function(info){
              if (profile == 'manager') {
                if(info.view.type == 'dayGridMonth'){
                    calendar.changeView('timeGrid', info.dateStr);
                } else { 
                    win.location.href = '../../views/manager/add.php?date='+ info.dateStr;
                } 
              } else {
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    } else { 
                        win.location.href = '../../views/user/add.php?date='+ info.dateStr;
                    }
              }   
          }
      });
      calendar.render();
    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user','.calendarUser');
    } else if (doc.querySelector('.calendarManager')){
        getCalendar('manager', '.calendarManager');
    }

    if(doc.querySelector('#delete')){
        let btn=doc.querySelector('#delete');
        btn.addEventListener('click',(event)=>{
            event.preventDefault();
            if(confirm("Deseja mesmo apagar este dado?")){
                win.location.href=event.target.parentNode.href;
            }
        },false);
    }

})(window, document);