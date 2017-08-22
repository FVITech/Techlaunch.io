const $ = require('jquery')
const moment = require('moment')
const rootPath = $('footer').data('rootpath')

function createEventHTML(ev) {
    const date = moment(ev.start.local).format("ddd, MMM Do, YYYY")
    const startTime = moment(ev.start.local).format("h:mm a")
    const endTime = moment(ev.end.local).format("h:mm a")

    return `
        <div class="event">
            <a class="event-image" title="${ev.name.text}" href="${ev.url}" target="_blank" rel="noopener">
                <img src="${ev.logo.url}" alt="${ev.name.text}">
            </a>
            <div class="event-text">
                <a class="event-title" href="${ev.url}" target="_blank" rel="noopener">${ev.name.html}</a>
                <div class="event-description">
                    ${ev.description.html}
                </div>
            </div>
            <div class="event-info">
                <p class="date">
                    ${date}
                </p>
                <time class="start-time" datetime="${ev.start.local}">${startTime}</time> -
                <time class="end-time" datetime="${ev.end.local}">${endTime}</time>
                <address class="location">
                    ${ev.location}
                </address>
                <div class="links">
                    <a class="btn register" target="_blank" rel="noopener" href="${ev.url}">register →</a>
                </div>
            </div>
        </div>
    `
}

function createDateSectionHTML(date, events) {
    let dateSection = `
        <div class="date-section">
            <h3 class="date-title">${moment(date, 'MM/DD/YYYY').format("ddd, MMM Do, YYYY")}</h3>
    `
    
    events.forEach(event => {
        dateSection += createEventHTML(event)
    })

    return dateSection + `</div>`
}

function generateEventsList(events) {
    let eventsListHTML = ''
    const eventsByDate = {}

    events.forEach(event => {
        const dateString = new Date(event.start.local).toLocaleDateString()

        if(!eventsByDate[dateString]) {
            eventsByDate[dateString] = []
        }

        eventsByDate[dateString].push(event)
    })

    for(date in eventsByDate) {
        eventsListHTML += createDateSectionHTML(date, eventsByDate[date])
    }

    return eventsListHTML
}

$(document).ready(function() {
    if($('section#events-list').length === 0) return false

    $.ajax({
        url: `${rootPath}events/get-events.php`,
        method: 'GET',
        dataType: 'json'
    })
    .done(res => {
        console.log(res)

        $('#events-list-container').html(generateEventsList(res.events))
    })
    .fail(err => {
        console.log('Failed to get EventBrite events.');
        console.error(err)
    })
})
