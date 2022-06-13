<?php

class servicesDetail
{
  public $servicesId;
  public $servicesName;
  public $servicesDesc;
  public $servicesPrice;
  public $servicesImg;

  public function __construct($id, $name, $desc, $price, $img)
  {
    $this->servicesId = $id;
    $this->servicesName = $name;
    $this->servicesDesc = $desc;
    $this->servicesPrice = $price;
    $this->servicesImg = $img;
  }
}

// Prototype for a services detail, which includes the header, description and image.
class docDetail
{
  public $docName;
  public $docDesc;
  public $docImg;

  public function __construct($name, $desc, $img)
  {
    $this->docName = $name;
    $this->docDesc = $desc;
    $this->docImg = $img;
  }
}

class userDetail
{
  public $userName;
  public $realName;
  public $email;
  public $tel;

  public function __construct($uName, $rName, $email, $tel)
  {
    $this->userName = $uName;
    $this->realName = $rName;
    $this->email = $email;
    $this->tel = $tel;
  }
}

class billDetail
{
  public $servicesName;
  public $billId;
  public $billDate;

  public function __construct($name, $id, $date)
  {
    $this->servicesName = $name;
    $this->billId = $id;
    $this->billDate = $date;
  }
}

class customerDetail
{
  public $customerName;
  public $customerEmail;
  public $customerTel;

  public function __construct($name, $email, $tel)
  {
    $this->customerName = $name;
    $this->customerEmail = $email;
    $this->custerTel = $tel;
  }
}

class billAdminDetail
{
  public $servicesName;
  public $billId;
  public $billDate;
  public $customerInfo;

  public function __construct($sName, $id, $date, $cName, $email, $tel)
  {
    $this->servicesName = $sName;
    $this->billId = $id;
    $this->billDate = $date;
    $this->customerInfo = new customerDetail($cName, $email, $tel);
  }
}

class newsPreview
{
  public $newsTitle;
  public $newsImg;

  public function __construct($title, $img)
  {
    $this->newsTitle = $title;
    $this->newsImg = $img;
  }
}

class postDetail
{
  public $postTitle;
  public $postDate;
  public $postContent;
  public $postImg;

  public function __construct($title, $date, $content, $img)
  {
    $this->postTitle = $title;
    $this->postDate = $date;
    $this->postContent = $content;
    $this->postImg = $img;
  }
}

class aboutDetail {
    public $aboutHeader;
    public $aboutDesc;
    public $aboutImg;
  
    public function __construct($header, $desc, $img)
    {
        $this->aboutHeader = $header;
        $this->aboutDesc = $desc;
        $this->aboutImg = $img;
    }
  }

?>