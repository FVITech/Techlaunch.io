const $ = require('jquery')
const moment = require('moment')
const sanitizeHTML = require('sanitize-html')
const truncate = require('html-truncate')
const rootPath = $('footer').data('rootpath')

function getLocation(venue_id) {
    if(!venue_id) return false

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

function sanitizeAndTruncate(desc, url) {
    const sanitized =  sanitizeHTML(desc, {
        allowedTags: ['b', 'i', 'strong', 'em', 'a', 'ul', 'li', 'ol', 'br', 'p', 'abbr', 'div', 'section', 'article', 'blockquote', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
        allowedAttributes: {
            'a': ['href'],
            '*': ['aria-*', 'title', 'alt']
        }
    })

    let options = {}

    if(url) options = { ellipsis: `... <a target="_blank" rel="noopener" href="${url}">read more</a>`}

    const truncated = truncate(sanitized, 300, options)

    return truncated
}

function createEventHTML(ev) {
    const titleText = (ev.name) ? (ev.name.text) ? ev.name.text : '' : ''
    const titleHTML = (ev.name) ? (ev.name.html) ? ev.name.html : '' : ''
    const url = (ev.url) ? ev.url : ''
    const logo = (ev.logo) ? (ev.logo.url) ? ev.logo.url : '' : ''
    const description = (ev.description) ? (ev.description.html) ? ev.description.html : '' : ''
    const start = (ev.start) ? (ev.start.local) ? ev.start.local : '' : ''
    const end = (ev.end) ? (ev.end.local) ? ev.end.local : '' : ''
    
    const date = moment(start).format("ddd, MMM Do, YYYY")
    const startTime = moment(start).format("h:mm a")
    const endTime = moment(end).format("h:mm a")

    getLocation(ev.venue_id)

    return `
        <div class="event">
            ${(logo) ? `
                <a class="event-image" title="${titleText}" href="${url}" target="_blank" rel="noopener">
                    <img src="${logo}" alt="${titleText}">
                </a>
            ` : ''}
            <div class="event-text">
                <a class="event-title" href="${url}" target="_blank" rel="noopener">${titleHTML}</a>
                <div class="event-description">
                    ${sanitizeAndTruncate(description, url)}
                </div>
            </div>
            <div class="event-info">
                <p class="date">
                    ${date}
                </p>
                <time class="start-time" datetime="${start}">${startTime}</time> -
                <time class="end-time" datetime="${end}">${endTime}</time>
                <address class="location" data-venue="${ev.venue_id}"></address>
                <div class="links">
                    <a class="btn register" target="_blank" rel="noopener" href="${url}">register →</a>
                </div>
            </div>
        </div>
    `
}

function createDateSectionHTML(date, events) {
    let dateString = moment(date, 'MM/DD/YYYY').format("ddd, MMM Do, YYYY")
    let sectionClass = ''
    
    if (String(new Date(date)) === 'Invalid Date') {
        dateString = date
        sectionClass = 'in-the-past'
    }

    let dateSection = `
        <div class="date-section ${sectionClass}">
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
            if(new Date(date) > Date.now() - 2592000000) {
                inThePast[date] = events[date]
            }
            delete filteredEvents[date]
        }
    }

    return {filteredEvents, inThePast}
}

function generateEventsList(events) {
    let eventsListHTML = ''
    const eventsByDate = {}

    if(events.length === 0) return '<br><h3 style="text-align: center">No upcoming events</h3><br>'

    events.forEach(event => {
        const dateString = new Date(event.start.local).toLocaleDateString()

        if(event.status === 'draft') return false

        if(!eventsByDate[dateString]) {
            eventsByDate[dateString] = []
        }

        eventsByDate[dateString].push(event)
    })

    const {filteredEvents, inThePast} = filterEventsByDate(eventsByDate)

    if(Object.keys(filteredEvents).length === 0) {
        eventsListHTML += '<h3 style="text-align: center">No upcoming events</h3><br>'
    }
    else {
        for(date in filteredEvents) {
            eventsListHTML += createDateSectionHTML(date, filteredEvents[date])
        }
    }

    if(Object.keys(inThePast).length === 0) {
        eventsListHTML += ''
    }
    else {
        for(date in inThePast) {
            eventsListHTML += createDateSectionHTML('In the Past', inThePast[date])
        }
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

        $('#events-list-container .in-the-past .btn.register').html('view event')
    })
    .fail(err => {
        console.log('Failed to get EventBrite events.');
        console.error(err)
    })
})
