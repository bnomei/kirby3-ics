<?php

declare(strict_types=1);

namespace Bnomei;

use Kigkonsult\Icalcreator\Vcalendar;
use Kirby\Http\Header;
use Kirby\Toolkit\A;

final class ICS
{
    /** @var Kigkonsult\Icalcreator\Vcalendar */
    private $vcalendar;

    /** @var string */
    private $id;

    /**
     * ICS constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->id = A::get($options, Vcalendar::UNIQUE_ID);
        if (! $this->id) {
            $this->id = sha1((string)time());
            $options[Vcalendar::UNIQUE_ID] = $this->id;
        }
        $this->vcalendar = Vcalendar::factory($options);

        self::save($this->id, $this);
    }

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return Vcalendar
     */
    public function vcalendar(): Vcalendar
    {
        return $this->vcalendar;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->vcalendar->vtimezonePopulate()->createCalendar();
    }

    /**
     * @param string $name
     */
    public function download(string $name)
    {
        Header::download([
            'mime' => 'text/calendar',
            'name' => $name,
        ]);
        // @codeCoverageIgnoreStart
        echo $this; // __toString()
        // @codeCoverageIgnoreEnd
    }

    /** @var array */
    private static $store;

    private static function save(string $id, $data)
    {
        if (! self::$store) {
            self::$store = [];
        }

        self::$store[$id] = $data;
    }

    public static function createOrLoad(string $id)
    {
        if (! self::$store) {
            self::$store = [];
        }
        $vcalendar = A::get(self::$store, $id);

        if (! $vcalendar) {
            $vcalendar = new self([
                Vcalendar::UNIQUE_ID => $id,
            ]);
        }

        return $vcalendar;
    }
}
