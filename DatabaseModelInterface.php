<?php
/**
 * Language Model Interface
 *
 * @package    Language
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Language;

/**
 * Language Model Interface
 *
 * @package    Language
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface DatabaseModelInterface
{
    /**
     * Save untranslated strings for use by translators
     *
     * @param   string $string
     *
     * @return  bool
     * @since   0.1
     */
    public function setUntranslatedString($string);
}
