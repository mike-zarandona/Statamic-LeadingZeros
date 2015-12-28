<?php
/**
 * Modifier_leadingzeros
 * Add leading zeros to numbers
 *
 * @author     Mike Zarandona <mike@zarandona.com>
 * @copyright  2015
 * @link       https://github.com/mike-zarandona
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 */

class Modifier_leadingzeros extends Modifier
{
    public function index($value, $parameters=array()) {
        if ( strlen($value) >= $parameters[0] ) {
            return $value;
        }
        else {
            $numLoops = $parameters[0] - strlen($value);

            for ( $i = 0; $i < $numLoops; $i++ ) {
                $value = '0' . $value;
            }

            return $value;
        }
    }
}
