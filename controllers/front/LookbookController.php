<?php

class LookbookControllerCore extends FrontController {
  
  public function init() {
    parent::init();
    $id_product = 8;
    $lang = $this->context->cookie->id_lang;
    $children = Pack::getItems($id_product, $lang);
    foreach ($children as $key => $product) {  
      var_dump($product);        
      $cover = Product::getCover($product['id_product']);
      $products[$key]["id_image"] = $cover["id_image"];     
    }
    $this->context->smarty->assign( array('looks' => $children) );
  }

  public function initContent() {
    parent::initContent();
    $this->setTemplate(_PS_THEME_DIR_."lookbook.tpl");
  }

}