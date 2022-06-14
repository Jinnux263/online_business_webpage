<?php
require_once dirname(__DIR__) . '/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/controllers/AuthenticationController.php';
require_once APP_ROOT . '/src/models/News.php';
class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_post';
  }

  public function index()
  {
    $this->render('NewsScreen');
  }

  public function news()
  {
    // Prototype for a post detail, which includes the title, content and image.


    // A list of postDetail given by the database
    $newsModel = new NewsModel();
    $newsList = $newsModel->getAll();

    $data = array('newsList' => $newsList);
    $this->render('NewsScreen', $data);
  }

  public function post()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();
    $this->render('PostScreen');
  }

  // Ham get tat ca post
  public function getNews()
  {
    $this->render('NewsScreen');
  }

  public function getNewsByID($id)
  {
    $this->render('NewsScreen');
  }
}
