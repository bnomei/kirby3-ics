# Kirby 3 ICS

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-ics?color=ae81ff)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-ics?color=272822)
[![Build Status](https://flat.badgen.net/travis/bnomei/kirby3-ics)](https://travis-ci.com/bnomei/kirby3-ics)
[![Coverage Status](https://flat.badgen.net/coveralls/c/github/bnomei/kirby3-ics)](https://coveralls.io/github/bnomei/kirby3-ics) 
[![Maintainability](https://flat.badgen.net/codeclimate/maintainability/bnomei/kirby3-ics)](https://codeclimate.com/github/bnomei/kirby3-ics) 
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)

Generate ICS Files.

## Commerical Usage

> <br>
> <b>Support open source!</b><br><br>
> This plugin is free but if you use it in a commercial project please consider to sponsor me or make a donation.<br>
> If my work helped you to make some cash it seems fair to me that I might get a little reward as well, right?<br><br>
> Be kind. Share a little. Thanks.<br><br>
> &dash; Bruno<br>
> &nbsp; 

| M | O | N | E | Y |
|---|----|---|---|---|
| [Github sponsor](https://github.com/sponsors/bnomei) | [Patreon](https://patreon.com/bnomei) | [Buy Me a Coffee](https://buymeacoff.ee/bnomei) | [Paypal dontation](https://www.paypal.me/bnomei/15) | [Hire me](mailto:b@bnomei.com?subject=Kirby) |

## Installation

- unzip [master.zip](https://github.com/bnomei/kirby3-ics/archive/master.zip) as folder `site/plugins/kirby3-ics` or
- `git submodule add https://github.com/bnomei/kirby3-ics.git site/plugins/kirby3-ics` or
- `composer require bnomei/kirby3-ics`

## Usecase

### Plain PHP

```php
// automatic id
$ics = new \Bnomei\ICS();
$id = $ics->id();

// or use custom id
$id = sha1('myUniqueID');

// provide custom options
$ics = new \Bnomei\ICS([
    Vcalendar::UNIQUE_ID => $id,
]);

// maybe reuse a static object identified by id
// otherwise it will be created now
$ics = \Bnomei\ICS::createOrLoad($id);

// get Vcalendar object...
$vcalendar = $ics->vcalendar();
// ... apply your ics data (see docs of lib)
// then retrieve the ics string
echo $ics;
```

### Page Method

Use the `ics()->vcalendar()`-method to retrieve the `Vcalender` Object then add properties, events and alarms. Please read the [original docs of used lib](https://github.com/iCalcreator/iCalcreator) for an overview about what is possible.

**site/templates/default.php**
```php
$vcalendar = $page->ics()->vcalendar();

$vcalendar->setXprop(Vcalendar::X_WR_CALDESC, "This is a demo calendar");

$event1 = $vcalendar->newVevent()
    ->setTransp( Vcalendar::OPAQUE )
    ->setClass( Vcalendar::P_BLIC )
    ->setSequence( 1 )
    // describe the event
    ->setSummary( 'Scheduled meeting with five occurrences' )
    ->setDescription(
         'Agenda for the the meeting...',
         [ Vcalendar::ALTREP => 
             'CID:<FFFF__=0ABBE548DFE235B58f9e8a93d@coffeebean.com>' ]
    )
    ->setComment( 'It\'s going to be fun..' )
    // place the event
    ->setLocation( 'Kafé Ekorren Stockholm' )
    ->setGeo( '59.32206', '18.12485' )
    // set the time
    ->setDtstart(
        new DateTime(
            '20190421T090000',
            new DateTimezone( 'Europe/Stockholm' )
        )
    )
    ->setDtend(
        new DateTime(
            '20190421T100000',
            new DateTimezone( 'Europe/Stockholm' )
        )
    );

echo $page->ics();
```

> TIP: You can retrieve the static unique object for a page using the page method `$page->ics()`. This makes it possible to prepare the ICS in a [page model](https://getkirby.com/docs/reference/plugins/extensions/page-models) or [page controller](https://getkirby.com/docs/guide/templates/controllers) and just display the data in your template or [content representation](https://getkirby.com/docs/guide/templates/content-representations). Check out the [tests for an example](https://github.com/bnomei/kirby3-ics/tree/master/tests/site).


### Content Representations

Assuming you prepared your ics data in a model or controller your content representation could be as short as this example.

**site/templates/default.ics.php**
```php
$page->ics()->download(
    $page->slug() . '.ics'
);
```


## Dependencies

- [iCalcreator/iCalcreator](https://github.com/iCalcreator/iCalcreator)

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/bnomei/kirby3-ics/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

based on V2 versions of
- https://github.com/moritzz/Kirby-Calendar
