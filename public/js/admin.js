$(function () {
    searchEvent();
});
let typePlan = $('#typePlan'),
    commentPlan = $('#commentPlan'),
    cardContainer = $('#cardContainer');

typePlan.change(function () {
    searchEvent();
});

commentPlan.change(function () {
    searchEvent();
});

function searchEvent() {
    cardContainer.hide('blind');
    $.ajax({
        url: "/searchEvent",
        data: {
            type: typePlan.val(),
            comment: commentPlan.val()
        },
        dataType: 'json',
        type: "GET"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                cardContainer.empty();
                Object.keys(response.events).map(key => response.events[key]).forEach(function (day) {
                    let card = $('<div class="card cardDay"></div>');
                    let niceDay = new Date(day[0].date);
                    let options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    card.append($('<div class="card-header text-center"></div>').append($('<h4></h4>').append(niceDay.toLocaleDateString('ru', options))));
                    let cardBody = $('<div class="card-body" style="padding: 10px;">');
                    day.forEach(function (event) {
                        let schedule_day = $('<div class="col-xs-12 col-lg-10 offset-lg-1 row schedule-day"></div>');
                        let icon;
                        switch (event.type) {
                            case 1:
                                schedule_day.addClass('theoryColor');
                                icon = $('<i class="fas fa-book-open"></i>');
                                break;
                            case 2:
                                schedule_day.addClass('examColor');
                                icon = $('<i class="fas fa-list-ul"></i>');
                                break;
                            case 3:
                                schedule_day.addClass('eventSchoolColor');
                                icon = $('<i class="far fa-calendar"></i>');
                                break;
                        }
                        cardBody.append($(schedule_day).append($('<div class="col-lg-2 col-lg-xs-3 schedule-day-leftside"></div>').append(event.time.substr(0, 5) + '  ').append(icon)).append($('<div class="schedule-day-body text-center col-lg-10 col-xs-9"></div>').append(event.comment)));
                        card.append(cardBody);
                        cardContainer.append(card);
                    });
					cardContainer.show('blind');
                });
            } else if (response.status === false || response.status === 'error') {
                alert(response.error);
            } else {
                alert('Ошибка запроса. Обратитесь к администратору.');
            }
        } else {
            alert('Ошибка запроса. Обратитесь к администратору.');
        }
    });
}

function addEvent() {
    let dateTime = new Date($('#timeEvent').val()),
        type = $('#typeEvent'),
        comment = $('#commentEvent');

    let time =  dateTime.getHours() + ':' + dateTime.getMinutes(),
        date =  dateTime.getFullYear() + '.' + parseInt(dateTime.getMonth() + 1 ) + '.' + dateTime.getDate();

    $.ajax({
    	url: "/admin/saveEvent",
        headers: {
    	    'X-CSRF-TOKEN' : window.csrf
        },
    	data: {
            time : time,
            date : date,
            type : type.val(),
            comment : comment.val()
        },
    	dataType: 'json',
    	type: "post"
    }).done(function (response) {
    	if (response !== undefined) {
    		if (response.status === true) {
                $('#addEventModal').modal('hide');
                searchEvent();
    		} else if (response.status ===false || response.status === 'error') {
    			alert(response.error);
    		} else {
    			alert('Ошибка запроса. Обратитесь к администратору.');
    		}
    	} else {
    		alert('Ошибка запроса. Обратитесь к администратору.');
    	}
    });
}
