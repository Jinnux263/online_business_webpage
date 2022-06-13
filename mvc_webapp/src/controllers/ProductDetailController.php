<?php
require_once dirname(__DIR__) . '/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/models/Doctor.php';
require_once APP_ROOT . '/src/models/Service.php';
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

  public function pricing()
  {
    // A list of productsDetail given by the database
    $serviceModel = new ServiceModel();
    $servicesList = $serviceModel->getAll();

    $data = array('servicesList' => $servicesList);
    $this->render('PricingScreen', $data);
  }

  public function products()
  {
    $docModel = new DoctorModel();
    $docList = $docModel->getAll();

    $data = array('docList' => $docList);
    $this->render('ProductScreen', $data);
  }

  public function order()
  {
    $serviceModel = new ServiceModel();
    $servicesList = $serviceModel->getAll();

    $data = array('servicesList' => $servicesList);
    $this->render('OrderScreen', $data);
  }

  public function showDetails()
  {
    $this->render('ProductScreen');
  }


  // Ham lay data service
  public function getproducts()
  {
    $this->render('ProductScreen');
  }

  public function getProductByID($id)
  {
    $this->render('ProductScreen');
  }


  // Ham cho gia dich vu
  public function getPrices()
  {
    $this->render('PricingScreen');
  }

  public function getPricesByID($id)
  {
    $this->render('PricingScreen');
  }
}
