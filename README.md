# Kirby 3 ICS

![Release](https://flat.badgen.net/packagist/v/bnomei/kirby3-ics?color=ae81ff)
![Stars](https://flat.badgen.net/packagist/ghs/bnomei/kirby3-ics?color=272822)
![Downloads](https://flat.badgen.net/packagist/dt/bnomei/kirby3-ics?color=272822)
![Issues](https://flat.badgen.net/packagist/ghi/bnomei/kirby3-ics?color=e6db74)
[![Build Status](https://flat.badgen.net/travis/bnomei/kirby3-ics)](https://travis-ci.com/bnomei/kirby3-ics)
[![Coverage Status](https://flat.badgen.net/coveralls/c/github/bnomei/kirby3-ics)](https://coveralls.io/github/bnomei/kirby3-ics) 
[![Maintainability](https://flat.badgen.net/codeclimate/maintainability/bnomei/kirby3-ics)](https://codeclimate.com/github/bnomei/kirby3-ics) 
[![Demo](https://flat.badgen.net/badge/website/examples?color=f92672)](https://kirby3-plugins.bnomei.com/ics) 
[![Gitter](https://flat.badgen.net/badge/gitter/chat?color=982ab3)](https://gitter.im/bnomei-kirby-3-plugins/community) 
[![Twitter](https://flat.badgen.net/badge/twitter/bnomei?color=66d9ef)](https://twitter.com/bnomei)

Generate ICS Files.

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to 
- [make a donation 🍻](https://www.paypal.me/bnomei/5) or
- [buy me ☕](https://buymeacoff.ee/bnomei) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/35731?link=1170)

## Installation

- unzip [master.zip](https://github.com/bnomei/kirby3-ics/archive/master.zip) as folder `site/plugins/kirby3-ics` or
- `git submodule add https://github.com/bnomei/kirby3-ics.git site/plugins/kirby3-ics` or
- `composer require bnomei/kirby3-ics`

## Works well with

- [Calendar](https://github.com/bnomei/kirby3-calendar)

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
