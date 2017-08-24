const $ = require('jquery')
const moment = require('moment')
const sanitizeHTML = require('sanitize-html')
const truncate = require('html-truncate')
const rootPath = $('footer').data('rootpath')

function getLocation(venue_id) {
    $.ajax({
        url: `${rootPath}events/eventbrite-sdk.php?venue_id=${venue_id}`,
        method: 'GET',
        dataType: 'json'
    })
    .done(res => {
        $(`address[data-venue="${venue_id}"]`).html(res)
    })
    .fail(err => {
        console.log('Failed to get Event location.');
        console.error(err)
    })
}

function sanitizeAndTruncate(desc) {
    const sanitized =  sanitizeHTML(desc, {
        allowedTags: ['b', 'i', 'strong', 'em', 'a', 'ul', 'li', 'ol', 'br', 'p', 'abbr', 'div', 'section', 'article', 'blockquote', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
        allowedAttributes: {
            'a': ['href'],
            '*': ['aria-*', 'title', 'alt']
        }
    })

    const truncated = truncate(sanitized, 300)

    return truncated
}

function createEventHTML(ev) {
    const date = moment(ev.start.local).format("ddd, MMM Do, YYYY")
    const startTime = moment(ev.start.local).format("h:mm a")
    const endTime = moment(ev.end.local).format("h:mm a")

    getLocation(ev.venue_id)

    return `
        <div class="event">
            <a class="event-image" title="${ev.name.text}" href="${ev.url}" target="_blank" rel="noopener">
                <img src="${ev.logo.url}" alt="${ev.name.text}">
            </a>
            <div class="event-text">
                <a class="event-title" href="${ev.url}" target="_blank" rel="noopener">${ev.name.html}</a>
                <div class="event-description">
                    ${sanitizeAndTruncate(ev.description.html)}
                </div>
            </div>
            <div class="event-info">
                <p class="date">
                    ${date}
                </p>
                <time class="start-time" datetime="${ev.start.local}">${startTime}</time> -
                <time class="end-time" datetime="${ev.end.local}">${endTime}</time>
                <address class="location" data-venue="${ev.venue_id}">
                    ${ev.location || ''}
                </address>
                <div class="links">
                    <a class="btn register" target="_blank" rel="noopener" href="${ev.url}">register →</a>
                </div>
            </div>
        </div>
    `
}

function createDateSectionHTML(date, events) {
    let dateString = (String(new Date(date)) !== 'Invalid Date')
        ? moment(date, 'MM/DD/YYYY').format("ddd, MMM Do, YYYY")
        : date

    let dateSection = `
        <div class="date-section">
            <h3 class="date-title">${dateString}</h3>
    `
    
    events.forEach(event => {
        dateSection += createEventHTML(event)
    })

    return dateSection + `</div>`
}

function filterEventsByDate(events = {}) {
    const filteredEvents = Object.assign({}, events)
    const inThePast = {}

    for(date in events) {
        if(new Date(date) < Date.now()) {
            inThePast[date] = events[date]
            delete filteredEvents[date]
        }
    }

    filteredEvents['inThePast'] = inThePast

    return filteredEvents
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

    const {filteredEvents, inThePast} = filterEventsByDate(eventsByDate)

    for(date in filteredEvents) {
        eventsListHTML += createDateSectionHTML(date, filteredEvents[date])
    }

    for(date in inThePast) {
        eventsListHTML += createDateSectionHTML('In the Past', inThePast[date])
    }

    return eventsListHTML
}

$(document).ready(function() {
    if($('section#events-list').length === 0) return false

    $.ajax({
        url: `${rootPath}events/eventbrite-sdk.php`,
        method: 'GET',
        dataType: 'json'
    })
    .done(res => {
        $('#events-list-container').html(generateEventsList(res.events))
    })
    .fail(err => {
        console.log('Failed to get EventBrite events.');
        console.error(err)
    })
})
