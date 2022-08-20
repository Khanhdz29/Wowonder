<?php
/**
 * TfaLanguage
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use \Infobip\ObjectSerializer;

/**
 * TfaLanguage Class Doc Comment
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */
class TfaLanguage
{
    /**
     * Possible values of this enum
     */
    const EN = 'en';
    const ES = 'es';
    const CA = 'ca';
    const DA = 'da';
    const NL = 'nl';
    const FR = 'fr';
    const DE = 'de';
    const IT = 'it';
    const JA = 'ja';
    const KO = 'ko';
    const NO = 'no';
    const PL = 'pl';
    const RU = 'ru';
    const SV = 'sv';
    const FI = 'fi';
    const PT_PT = 'pt-pt';
    const PT_BR = 'pt-br';
    const ZH_CN = 'zh-cn';
    const ZH_TW = 'zh-tw';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EN,
            self::ES,
            self::CA,
            self::DA,
            self::NL,
            self::FR,
            self::DE,
            self::IT,
            self::JA,
            self::KO,
            self::NO,
            self::PL,
            self::RU,
            self::SV,
            self::FI,
            self::PT_PT,
            self::PT_BR,
            self::ZH_CN,
            self::ZH_TW,
        ];
    }
}
