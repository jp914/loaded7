<?php
/*
  $Id: date_available.php v1.0 2011-11-04 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2011 LoadedCommerce.com

  @author     LoadedCommerce Team
  @copyright  (c) 2011 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html
*/

  class lC_ProductAttributes_date_available extends lC_Product_attributes_Admin {
    public function setFunction($value) {
      $string = '<span class="input"><span class="icon-calendar"></span>' . lc_draw_input_field('attributes[' . self::getID() . ']', $value, 'id="attributes_' . self::getID() . '" class="input-unstyled datepicker"') . '</span>';
      return $string;
    }
  }
?>