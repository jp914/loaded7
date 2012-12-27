<?php
/*
  $Id: credit_cards.php v1.0 2011-11-04 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2011 LoadedCommerce.com

  @author     LoadedCommerce Team
  @copyright  (c) 2011 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html
 
  @function The lC_Application_Credit_cards class manages the credit cards GUI
*/
require('includes/applications/credit_cards/classes/credit_cards.php');

class lC_Application_Credit_cards extends lC_Template_Admin {
 /*
  * Protected variables
  */
  protected $_module = 'credit_cards',
            $_page_title,
            $_page_contents = 'main.php';
 /*
  * Class constructor
  */
  public function __construct() {
    global $lC_Language;

    $this->_page_title = $lC_Language->get('heading_title');
  }
}
?>