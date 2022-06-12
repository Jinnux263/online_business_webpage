<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class ProductDetailController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_product';
  }

  public function index()
  {
    $this->render('ProductScreen');
  }

  public function showDetails()
  {
    $this->render('ProductScreen');
  }

  public function products()
  {
    $this->render('ProductScreen');
  }

  public function pricing()
  {
    $this->render('PricingScreen');
  }

}

?>