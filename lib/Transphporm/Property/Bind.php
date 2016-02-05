<?php
/* @description     Transformation Style Sheets - Revolutionising PHP templating    *
 * @author          Tom Butler tom@r.je                                             *
 * @copyright       2015 Tom Butler <tom@r.je> | https://r.je/                      *
 * @license         http://www.opensource.org/licenses/bsd-license.php  BSD License *
 * @version         1.0                                                             */
namespace Transphporm\Property;
class Bind implements \Transphporm\Property {
	private $data;

	public function __construct(\Transphporm\Hook\DataFunction $data) {
		$this->data = $data;
	}

	public function run($value, \DomElement $element, \Transphporm\Hook\PropertyHook $rule)  {
		$this->data->bind($element, $value);
	}
}