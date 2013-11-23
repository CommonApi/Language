<?php
/**
 * Language Interface
 *
 * @package    Language
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Language;

/**
 * Language Interface
 *
 * @package    Language
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface LanguageInterface
{
    /**
     * Get Language Properties
     *
     * Specify null for key to have all language properties for current language
     * returned aas an object
     *
     * @param   null|string $key
     * @param   null|string $default
     *
     * @return  int  $this
     * @since   1.0
     */
    public function get($key = null, $default = null);

    /**
     * Translate String
     *
     *  - Current language
     *  - Default language
     *  - Final fallback en-GB
     *  - Store as untranslated string
     *
     * @param   $string
     *
     * @return  string
     * @since   1.0
     */
    public function translate($string);

    /**
     * Store Untranslated Language Strings
     *
     * @param   $string
     *
     * @return  $this
     * @since   1.0
     */
    public function setUntranslatedString($string);
}