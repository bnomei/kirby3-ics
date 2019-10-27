<?php

use Kigkonsult\Icalcreator\Vcalendar;

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bnomei/ics', [
    'options' => [
    ],
    'pageMethods' => [
        'ics' => function () {
            return \Bnomei\ICS::createOrLoad(sha1($this->url()));
        },
    ],
  ]);
