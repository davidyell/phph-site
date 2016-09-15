<?php

use App\Entity\Meetup;
use App\Entity\Talk;
use App\Entity\Schedule;

$etitle = 'PHP Hampshire - January 2016 Meetup';
$eid = '19377184681';
$eventbriteWidget = '<div style="width:100%; text-align:left; padding-top: 20px" >';
$eventbriteWidget .= '<iframe  src="https://www.eventbrite.co.uk/tickets-external?eid=' . $eid . '&ref=etckt&v=2" frameborder="0" height="240" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>';
$eventbriteWidget .= '<div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" >';
$eventbriteWidget .= '<a style="color:#888; text-decoration:none;" target="_blank" href="https://www.eventbrite.co.uk/r/etckt">Event Registration Online</a>';
$eventbriteWidget .= '<span style="color:#888;"> for </span>';
$eventbriteWidget .= '<a style="color:#888; text-decoration:none;" target="_blank" href="https://www.eventbrite.co.uk/event/' . $eid . '?ref=etckt">' . $etitle . '</a>';
$eventbriteWidget .= '<span style="color:#888;"> powered by </span>';
$eventbriteWidget .= '<a style="color:#888; text-decoration:none;" target="_blank" href="https://www.eventbrite.co.uk?ref=etckt">Eventbrite</a>';
$eventbriteWidget .= '</div></div>';

$meetup = new Meetup();

$abstract = <<<END
Want to separate the signal from the noise, but have too much input to deal with? Fed up with reading everything yourself? Mechanical Turk got you down? Then perhaps you need to apply some machine learning! In this talk, Christopher will cover some basic approaches to machine-learned classification as well as demonstrate a real-life application of it in PHP.
END;

$meetup->setId(0)
    ->setFromDate(new DateTimeImmutable('2016-01-13 19:00'))
    ->setToDate(new DateTimeImmutable('2016-01-13 23:00'))
    ->setRegistrationUrl("https://www.eventbrite.co.uk/event/{$eid}")
    ->setLocationUrl("https://www.google.co.uk/maps?q=Oasis+Venue,+Arundel+Street,+PO1+1NP&hl=en&ll=50.799642,-1.086724&spn=0.011772,0.031629&sll=50.799734,-1.086874&sspn=0.011772,0.031629&hq=Oasis+Venue,&hnear=Arundel+St,+PO1+1NP,+United+Kingdom&t=m&z=16")
    ->setLocation('Oasis the Venue, Arundel Street, PO1 1NP')
    ->setTalkingPoints(array(
    	new Talk('Christopher Hoult', 'choult', 'Simple Machine Learning', $abstract),
        '&pound;20 Amazon.co.uk gift voucher prize draw, courtesy of Spectrum IT',
    ))
	->setSchedule(array(
		new Schedule(new \DateTimeImmutable('19:00'), 'Arrival with beer and pizza'),
		new Schedule(new \DateTimeImmutable('19:25'), 'Welcome announcement'),
		new Schedule(new \DateTimeImmutable('19:30'), 'Christopher Hoult'),
		new Schedule(new \DateTimeImmutable('20:30'), 'Closing comments'),
		new Schedule(new \DateTimeImmutable('20:45'), 'Social gathering at <a href="http://brewhouseandkitchen.com/portsmouth">Brewhouse Pompey</a> (The White Swan)'),
	))
    ->setWidget($eventbriteWidget);

return $meetup;
