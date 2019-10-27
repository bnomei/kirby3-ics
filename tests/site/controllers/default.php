<?php

use Kigkonsult\Icalcreator\Vcalendar;
//use DateTime;
//use DateTimezone;

return function ($site, $page, $kirby) {

    /* Example code from:
     * https://github.com/iCalcreator/iCalcreator
     */
    $vcalendar = $page->ics()->vcalendar();

    // with calendaring info
    $vcalendar->setMethod(Vcalendar::PUBLISH)
        ->setXprop(
            Vcalendar::X_WR_CALNAME,
            "Calendar Sample"
        )
        ->setXprop(
            Vcalendar::X_WR_CALDESC,
            "This is a demo calendar"
        )
        ->setXprop(
            Vcalendar::X_WR_RELCALID,
            "3E26604A-50F4-4449-8B3E-E4F4932D05B5"
        )
        ->setXprop(
            Vcalendar::X_WR_TIMEZONE,
            "Europe/Stockholm"
        );

    // create a new event
    $event1 = $vcalendar->newVevent()
        ->setTransp(Vcalendar::OPAQUE)
        ->setClass(Vcalendar::P_BLIC)
        ->setSequence(1)
        // describe the event
        ->setSummary('Scheduled meeting with five occurrences')
        ->setDescription(
            'Agenda for the the meeting...',
            [Vcalendar::ALTREP =>
                'CID:<FFFF__=0ABBE548DFE235B58f9e8a93d@coffeebean.com>']
        )
        ->setComment('It\'s going to be fun..')
        // place the event
        ->setLocation('Kafé Ekorren Stockholm')
        ->setGeo('59.32206', '18.12485')
        // set the time
        ->setDtstart(
            new DateTime(
                '20190421T090000',
                new DateTimezone('Europe/Stockholm')
            )
        )
        ->setDtend(
            new DateTime(
                '20190421T100000',
                new DateTimezone('Europe/Stockholm')
            )
        )
        // with recurrence rule
        ->setRrule(
            [
                Vcalendar::FREQ => Vcalendar::WEEKLY,
                Vcalendar::COUNT => 5,
            ]
        )
        // and set another on a specific date
        ->setRdate(
            [
                new DateTime(
                    '20190609T090000',
                    new DateTimezone('Europe/Stockholm')
                ),
                new DateTime(
                    '20190609T110000',
                    new DateTimezone('Europe/Stockholm')
                ),
            ],
            [Vcalendar::VALUE => Vcalendar::PERIOD]
        )
        // and revoke a recurrence date
        ->setExdate(
            new DateTime(
                '2019-05-12 09:00:00',
                new DateTimezone('Europe/Stockholm')
            )
        )
        // organizer, chair and some participants
        ->setOrganizer(
            'secretary@coffeebean.com',
            [Vcalendar::CN => 'Secretary CoffeeBean']
        )
        ->setAttendee(
            'president@coffeebean.com',
            [
                Vcalendar::ROLE => Vcalendar::CHAIR,
                Vcalendar::PARTSTAT => Vcalendar::ACCEPTED,
                Vcalendar::RSVP => Vcalendar::FALSE,
                Vcalendar::CN => 'President CoffeeBean',
            ]
        )
        ->setAttendee(
            'participant1@coffeebean.com',
            [
                Vcalendar::ROLE => Vcalendar::REQ_PARTICIPANT,
                Vcalendar::PARTSTAT => Vcalendar::NEEDS_ACTION,
                Vcalendar::RSVP => Vcalendar::TRUE,
                Vcalendar::CN => 'Participant1 CoffeeBean',
            ]
        )
        ->setAttendee(
            'participant2@coffeebean.com',
            [
                Vcalendar::ROLE => Vcalendar::REQ_PARTICIPANT,
                Vcalendar::PARTSTAT => Vcalendar::NEEDS_ACTION,
                Vcalendar::RSVP => Vcalendar::TRUE,
                Vcalendar::CN => 'Participant2 CoffeeBean',
            ]
        );

    // add alarm for the event
    $alarm = $event1->newValarm()
        ->setAction(Vcalendar::DISPLAY)
        // copy description from event
        ->setDescription($event1->getDescription())
        // fire off the alarm one day before
        ->setTrigger('-P1D');

    // alter day and time for one event in recurrence set
    $event2 = $vcalendar->newVevent()
        ->setTransp(Vcalendar::OPAQUE)
        ->setClass(Vcalendar::P_BLIC)
        // reference to event in recurrence set
        ->setUid($event1->getUid())
        ->setSequence(2)
        // pointer to event in the recurrence set
        ->setRecurrenceid('20190505T090000 Europe/Stockholm')
        // reason text
        ->setDescription(
            'Altered day and time for event 2019-05-05',
            [Vcalendar::ALTREP =>
                'CID:<FFFF__=0ABBE548DFE235B58f9e8a93d@coffeebean.com>']
        )
        ->setComment('Now we are working hard for two hours')
        // the altered day and time with duration
        ->setDtstart(
            new DateTime(
                '20190504T100000',
                new DateTimezone('Europe/Stockholm')
            )
        )
        ->setDuration('PT2H')
        // add alarm (copy from event1)
        ->setComponent(
            $event1->getComponent(Vcalendar::VALARM)
        );

    return [];
};
