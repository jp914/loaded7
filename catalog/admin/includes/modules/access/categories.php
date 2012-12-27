<?php
/*
  $Id: categories.php v1.0 2011-11-04 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2011 LoadedCommerce.com

  @author     LoadedCommerce Team
  @copyright  (c) 2011 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html
*/

  class lC_Access_Categories extends lC_Access {
    var $_module = 'categories',
        $_group = 'products',
        $_icon = 'folder_red.png',
        $_title,
        $_sort_order = 100;

    function lC_Access_Categories() {
      global $lC_Language;

      $this->_title = $lC_Language->get('access_categories_title');
    }
  }
?>
