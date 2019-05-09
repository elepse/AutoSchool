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
        url: "/lk/searchEvent",
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

    let time = dateTime.getHours() + ':' + dateTime.getMinutes(),
        date = dateTime.getFullYear() + '.' + parseInt(dateTime.getMonth() + 1) + '.' + dateTime.getDate();

    $.ajax({
        url: "/lk/saveEvent",
        headers: {
            'X-CSRF-TOKEN': window.csrf
        },
        data: {
            time: time,
            date: date,
            type: type.val(),
            comment: comment.val()
        },
        dataType: 'json',
        type: "post"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                $('#addEventModal').modal('hide');
                searchEvent();
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

let instructor = $('#instructor'),
    classDate = $('#classDate'),
    classType = $('#typeClass'),
    classTime = $('#classTime');

function openPracticeModal() {
    $.ajax({
        url: "/lk/practice",
        data: {},
        dataType: 'json',
        type: "GET"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                $('#practiceModal').modal('show');
                response.instructors.forEach(function (i) {
                    instructor.append($('<option value="' + i.id_instructor + '"></option>').append(i.name_instructor));
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

let practiceForm = $('.formPractice');

practiceForm.change(function () {
    if (classDate.val() !== "" && classType.val() != null && instructor.val()) {
        updateTime();
    }
});

function updateTime() {
    let defaultTimes = [
            '12:00', '14:00', '16:00', '18:00'
        ],
        timeContainer = $('#timeContainer'),
        times;
    timeContainer.hide('blind');
    classTime.empty();
    $.ajax({
        url: "/lk/updateTime",
        data: {
            instructor: instructor.val(),
            classDate: classDate.val()
        },
        dataType: 'json',
        type: "GET"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                //TODO: Тут есть баг со временем
                response.busyDates.forEach(function (time) {
                    let busyTimes = $.map(time, function (value, index) {
                        return [value.substr(0, 5)];
                    });
                    times = defaultTimes.map(function (time) {
                        console.log(time);
                        if (busyTimes.indexOf(time)) {
                            return time;
                        }
                    });
                });
                let trueTime;
                if (times == null) {
                    trueTime = defaultTimes;
                } else {
                    if (times.length === 0) alert('нет доступнного времени');
                    trueTime = times;
                }

                if (!!trueTime.reduce(function (a, b) {
                    return (a === b) ? a : NaN;
                })) {
                    classTime.append($('<option value="">Нет свободного времени!</option>'))
                } else {
                    trueTime.forEach(function (time) {
                        if (time !== undefined) {
                            classTime.append($('<option value="' + time + '"></option>').append(time))
                        }
                    });
                }

                timeContainer.show('blind');
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


function savePractiveRequest() {
    $.ajax({
        url: "/lk/practiceRequest",
        headers: {
            'X-CSRF-TOKEN': window.csrf
        },
        data: {
            instructor: instructor.val(),
            type: classType.val(),
            date: classDate.val(),
            time: classTime.val()
        },
        dataType: 'json',
        type: "POST"
    }).done(function (response) {
        if (response !== undefined) {
            if (response.status === true) {
                $('#practiceModal').modal('hide');
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