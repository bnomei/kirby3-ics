<?php
/**
 * iCalcreator, the PHP class package managing iCal (rfc2445/rfc5445) calendar information.
 *
 * copyright (c) 2007-2019 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * Link      https://kigkonsult.se
 * Package   iCalcreator
 * Version   2.29.14
 * License   Subject matter of licence is the software iCalcreator.
 *           The above copyright, link, package and version notices,
 *           this licence notice and the invariant [rfc5545] PRODID result use
 *           as implemented and invoked in iCalcreator shall be included in
 *           all copies or substantial portions of the iCalcreator.
 *
 *           iCalcreator is free software: you can redistribute it and/or modify
 *           it under the terms of the GNU Lesser General Public License as published
 *           by the Free Software Foundation, either version 3 of the License,
 *           or (at your option) any later version.
 *
 *           iCalcreator is distributed in the hope that it will be useful,
 *           but WITHOUT ANY WARRANTY; without even the implied warranty of
 *           MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *           GNU Lesser General Public License for more details.
 *
 *           You should have received a copy of the GNU Lesser General Public License
 *           along with iCalcreator. If not, see <https://www.gnu.org/licenses/>.
 *
 * This file is a part of iCalcreator.
*/

namespace Kigkonsult\Icalcreator\Traits;

use Kigkonsult\Icalcreator\Util\StringFactory;
use Kigkonsult\Icalcreator\Util\Util;
use Kigkonsult\Icalcreator\Util\HttpFactory;
use Kigkonsult\Icalcreator\Util\ParameterFactory;
use InvalidArgumentException;

/**
 * URL property functions
 *
 * @author Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @since 2.27.3 2018-12-22
 */
trait URLtrait
{
    /**
     * @var array component property URL value
     * @access protected
     */
    protected $url = null;

    /**
     * Return formatted output for calendar component property url
     *
     * @return string
     */
    public function createUrl() {
        if( empty( $this->url )) {
            return null;
        }
        if( empty( $this->url[Util::$LCvalue] )) {
            return ( $this->getConfig( self::ALLOWEMPTY )) ? StringFactory::createElement( self::URL ) : null;
        }
        return StringFactory::createElement(
            self::URL,
            ParameterFactory::createParams( $this->url[Util::$LCparams] ),
            $this->url[Util::$LCvalue]
        );
    }

    /**
     * Delete calendar component property url
     *
     * @return bool
     * @since  2.27.1 - 2018-12-15
     */
    public function deleteUrl() {
        $this->url = null;
        return true;
    }

    /**
     * Get calendar component property url
     *
     * @param bool   $inclParam
     * @return bool|array
     * @since  2.27.1 - 2018-12-12
     */
    public function getUrl( $inclParam = false ) {
        if( empty( $this->url )) {
            return false;
        }
        return ( $inclParam ) ? $this->url : $this->url[Util::$LCvalue];
    }

    /**
     * Set calendar component property url
     *
     * @param string $value
     * @param array  $params
     * @return static
     * @throws InvalidArgumentException
     * @since 2.27.3 2018-12-22
     */
    public function setUrl( $value = null, $params = [] ) {
        if( empty( $value )) {
            $this->assertEmptyValue( $value, self::URL );
            $value  = Util::$SP0;
            $params = [];
        }
        else {
            HttpFactory::assertUrl( $value );
        }
        $this->url = [
            Util::$LCvalue  => $value,
            Util::$LCparams => ParameterFactory::setParams( $params ),
        ];
        return $this;
    }
}
