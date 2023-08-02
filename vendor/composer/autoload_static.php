<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit491e638a5eef9e53f1ce44550339b2cd
{
    public static $files = array (
        '47b18101462cdeb25f661813113e3182' => __DIR__ . '/..' . '/kigkonsult/icalcreator/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
            'Kigkonsult\\Icalcreator\\' => 23,
        ),
        'B' => 
        array (
            'Bnomei\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Kigkonsult\\Icalcreator\\' => 
        array (
            0 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src',
            1 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util',
            2 => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits',
        ),
        'Bnomei\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Bnomei\\ICS' => __DIR__ . '/../..' . '/classes/ICS.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kigkonsult\\Icalcreator\\Available' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Available.php',
        'Kigkonsult\\Icalcreator\\CalendarComponent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/CalendarComponent.php',
        'Kigkonsult\\Icalcreator\\DScomponent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/DScomponent.php',
        'Kigkonsult\\Icalcreator\\Daylight' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Daylight.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Available' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Available.php',
        'Kigkonsult\\Icalcreator\\Formatter\\DScomponent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/DScomponent.php',
        'Kigkonsult\\Icalcreator\\Formatter\\FormatBase' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/FormatBase.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Participant' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Participant.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Attendee' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Attendee.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\CalMetProVer' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/CalMetProVer.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Dt1Property' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Dt1Property.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\DtxProperty' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/DtxProperty.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\DurDates' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/DurDates.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Exdate' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Exdate.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Freebusy' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Freebusy.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Geo' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Geo.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\IntProperty' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/IntProperty.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\MultiProps' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/MultiProps.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Property' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Property.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\PropertyBase' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/PropertyBase.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Rdate' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Rdate.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Recur' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Recur.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Requeststatus' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Requeststatus.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\SingleProps' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/SingleProps.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Property\\Xproperty' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Property/Xproperty.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Valarm' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Valarm.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vavailability' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vavailability.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vcalendar' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vcalendar.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vevent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vevent.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vfreebusy' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vfreebusy.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vjournal' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vjournal.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vlocation' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vlocation.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vresource' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vresource.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vtimzone' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vtimzone.php',
        'Kigkonsult\\Icalcreator\\Formatter\\Vtodo' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Formatter/Vtodo.php',
        'Kigkonsult\\Icalcreator\\IcalBase' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/IcalBase.php',
        'Kigkonsult\\Icalcreator\\IcalInterface' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/IcalInterface.php',
        'Kigkonsult\\Icalcreator\\Parser\\ComponentParser' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Parser/ComponentParser.php',
        'Kigkonsult\\Icalcreator\\Parser\\ParserBase' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Parser/ParserBase.php',
        'Kigkonsult\\Icalcreator\\Parser\\VcalendarParser' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Parser/VcalendarParser.php',
        'Kigkonsult\\Icalcreator\\Participant' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Participant.php',
        'Kigkonsult\\Icalcreator\\Pc' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Pc.php',
        'Kigkonsult\\Icalcreator\\Standard' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Standard.php',
        'Kigkonsult\\Icalcreator\\Traits\\ACKNOWLEDGEDrfc9074trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/ACKNOWLEDGEDrfc9074trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\ACTIONtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/ACTIONtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\ATTACHtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/ATTACHtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\ATTENDEEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/ATTENDEEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\BUSYTYPErfc7953trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/BUSYTYPErfc7953trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CALENDAR_ADDRESSrfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CALENDAR_ADDRESSrfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CALSCALEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CALSCALEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CATEGORIEStrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CATEGORIEStrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CLASStrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CLASStrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\COLORrfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/COLORrfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\COMMENTtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/COMMENTtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\COMPLETEDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/COMPLETEDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CONFERENCErfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CONFERENCErfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CONTACTtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CONTACTtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\CREATEDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/CREATEDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DESCRIPTIONtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DESCRIPTIONtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DTENDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DTENDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DTSTAMPtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DTSTAMPtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DTSTARTtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DTSTARTtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DUEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DUEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\DURATIONtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/DURATIONtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\EXDATEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/EXDATEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\EXRULEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/EXRULEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\FREEBUSYtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/FREEBUSYtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\GEOtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/GEOtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\IMAGErfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/IMAGErfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\LAST_MODIFIEDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/LAST_MODIFIEDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\LOCATIONTYPErfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/LOCATIONTYPErfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\LOCATIONtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/LOCATIONtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\METHODtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/METHODtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\MvalTrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/MvalTrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\NAMErfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/NAMErfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\NewVlocationTrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/NewVlocationTrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\ORGANIZERtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/ORGANIZERtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\PARTICIPANT_TYPErfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/PARTICIPANT_TYPErfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\PERCENT_COMPLETEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/PERCENT_COMPLETEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\PRIORITYtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/PRIORITYtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\PRODIDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/PRODIDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\PROXIMITYrfc9074trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/PROXIMITYrfc9074trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\Participants2AttendeesTrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/Participants2AttendeesTrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RDATEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RDATEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RECURRENCE_IDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RECURRENCE_IDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\REFRESH_INTERVALrfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/REFRESH_INTERVALrfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RELATED_TOtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RELATED_TOtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\REPEATtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/REPEATtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\REQUEST_STATUStrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/REQUEST_STATUStrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RESOURCEStrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RESOURCEStrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RESOURCE_TYPErfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RESOURCE_TYPErfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\RRULEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/RRULEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\SEQUENCEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/SEQUENCEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\SOURCErfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/SOURCErfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\STATUStrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/STATUStrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\STRUCTURED_DATArfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/STRUCTURED_DATArfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\STYLED_DESCRIPTIONrfc9073trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/STYLED_DESCRIPTIONrfc9073trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\SUMMARYtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/SUMMARYtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\SubCompsGetTrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/SubCompsGetTrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TRANSPtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TRANSPtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TRIGGERtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TRIGGERtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZID_ALIAS_OFrfc7808trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZID_ALIAS_OFrfc7808trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZIDtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZIDtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZNAMEtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZNAMEtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZOFFSETFROMtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZOFFSETFROMtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZOFFSETTOtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZOFFSETTOtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZUNTILrfc7808trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZUNTILrfc7808trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\TZURLtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/TZURLtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\UIDrfc7986trait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/UIDrfc7986trait.php',
        'Kigkonsult\\Icalcreator\\Traits\\URLtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/URLtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\VERSIONtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/VERSIONtrait.php',
        'Kigkonsult\\Icalcreator\\Traits\\X_PROPtrait' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Traits/X_PROPtrait.php',
        'Kigkonsult\\Icalcreator\\Util\\CalAddressFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/CalAddressFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\DateIntervalFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/DateIntervalFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\DateTimeFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/DateTimeFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\DateTimeZoneFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/DateTimeZoneFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\GeoFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/GeoFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\HttpFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/HttpFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\IcalvCardFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/IcalvCardFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\ParameterFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/ParameterFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\RecurFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/RecurFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\RecurFactory2' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/RecurFactory2.php',
        'Kigkonsult\\Icalcreator\\Util\\RexdateFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/RexdateFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\SelectFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/SelectFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\SortFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/SortFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\StringFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/StringFactory.php',
        'Kigkonsult\\Icalcreator\\Util\\Util' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/Util.php',
        'Kigkonsult\\Icalcreator\\Util\\UtilDateTime' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/UtilDateTime.php',
        'Kigkonsult\\Icalcreator\\Util\\VtimezonePopulateFactory' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Util/VtimezonePopulateFactory.php',
        'Kigkonsult\\Icalcreator\\V2component' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/V2component.php',
        'Kigkonsult\\Icalcreator\\V3component' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/V3component.php',
        'Kigkonsult\\Icalcreator\\VAcomponent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/VAcomponent.php',
        'Kigkonsult\\Icalcreator\\Valarm' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Valarm.php',
        'Kigkonsult\\Icalcreator\\Vavailability' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vavailability.php',
        'Kigkonsult\\Icalcreator\\Vcalendar' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vcalendar.php',
        'Kigkonsult\\Icalcreator\\Vcomponent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vcomponent.php',
        'Kigkonsult\\Icalcreator\\Vevent' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vevent.php',
        'Kigkonsult\\Icalcreator\\Vfreebusy' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vfreebusy.php',
        'Kigkonsult\\Icalcreator\\Vjournal' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vjournal.php',
        'Kigkonsult\\Icalcreator\\Vlocation' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vlocation.php',
        'Kigkonsult\\Icalcreator\\Vresource' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vresource.php',
        'Kigkonsult\\Icalcreator\\Vtimezone' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vtimezone.php',
        'Kigkonsult\\Icalcreator\\Vtodo' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Vtodo.php',
        'Kigkonsult\\Icalcreator\\Xml\\Formatter' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Xml/Formatter.php',
        'Kigkonsult\\Icalcreator\\Xml\\Parser' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Xml/Parser.php',
        'Kigkonsult\\Icalcreator\\Xml\\XmlBase' => __DIR__ . '/..' . '/kigkonsult/icalcreator/src/Xml/XmlBase.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit491e638a5eef9e53f1ce44550339b2cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit491e638a5eef9e53f1ce44550339b2cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit491e638a5eef9e53f1ce44550339b2cd::$classMap;

        }, null, ClassLoader::class);
    }
}
