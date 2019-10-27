<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bnomei\ICS;
use Kigkonsult\Icalcreator\Vcalendar;
use PHPUnit\Framework\TestCase;

final class ICSTest extends TestCase
{
    private $id;

    public function setUp(): void
    {
        $this->id = 'https://github.com/bnomei/kirby3-ics';
    }

    public function testConstruct()
    {
        $ics = new ICS([
            Vcalendar::UNIQUE_ID => $this->id,
        ]);

        $this->assertInstanceOf(ICS::class, $ics);
    }

    public function testParent()
    {
        $ics = new ICS([
            Vcalendar::UNIQUE_ID => $this->id,
        ]);

        $this->assertInstanceOf(Vcalendar::class, $ics->vcalendar());
    }

    public function testString()
    {
        $ics = new ICS([
            Vcalendar::UNIQUE_ID => $this->id,
        ]);

        $this->assertRegExp('/^BEGIN:VCALENDAR\r\nVERSION:2.0/', (string) $ics);
    }

    public function testDownload()
    {
        $this->expectExceptionMessageMatches('/^Cannot modify header information/');
        $ics = new ICS([
            Vcalendar::UNIQUE_ID => $this->id,
        ]);
        $ics->download('hawaii.ics');
        $this->assertTrue(true);
    }

    public function testIDAndLoad()
    {
        // this will trigger static save
        $ics = new ICS([
            Vcalendar::UNIQUE_ID => $this->id,
        ]);

        $this->assertEquals($this->id, $ics->id());

        $icsLoaded = ICS::createOrLoad($this->id);
        $this->assertEquals($ics, $icsLoaded);
    }

    public function testNoIDInConstruct()
    {
        // this will trigger static save
        $ics = new ICS();

        $this->assertInstanceOf(Vcalendar::class, $ics->vcalendar());
        $this->assertIsString($ics->id());
    }

    public function testUnknownIDInCreateOrLoad()
    {
        // this will trigger static save
        $ics = ICS::createOrLoad($this->id . time());

        $this->assertInstanceOf(Vcalendar::class, $ics->vcalendar());
        $this->assertIsString($ics->id());
    }
}
