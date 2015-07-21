<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class OpenDataController extends Controller
{

  /* */
  public $BRD = array( 
            "97410" => "00:06:66:21:8c:40",
            "97421" => "00:06:66:21:89:e9",
            "97450" => "00:06:66:21:89:01",
            "97425" => "00:06:66:21:8d:f5"
          );

  public $version = "V.0.01";
  
  public $title = "Open Data ";
  public $subTitle = "Open Data ";
  public $pageTitle = "Open Data  ";
  
  public static $moduleKey = "learn";
  
  public $keywords = "page keywords for this module";
  public $description = "page description for this module";

  public $projectName = "pen Data module";
  public $projectImage = "/images/CTK.png";
  public $projectImageL = "/images/logo.png";
  
  public $footerText = "2009 - 2015";
  public $footerImages = array(
      array("img"=>'/images/blog-github.png',"url"=>"https://github.com/pixelhumain/pixelhumain"),
      array("img"=>'/images/opensource.gif',"url"=>"http://opensource.org/"));

   public $lang = array("fr" => array("label"=>"french"),
                       "en" => array("label"=>"english"));

  const theme = "ph-dori";
  public $themeStyle = "theme-style11";//3,4,5,7,9

  public $notifications = array();
  public $sidebar1 = array(
    array('label' => "OPEN ", "key"=>"open","iconClass"=>"fa fa-share-alt","href"=> "/ph/opendata/default/open" ),
    array('label' => "DATA ", "key"=>"open","iconClass"=>"fa fa-database","href"=> "/ph/opendata/default/data" ),
    array('label' => "SMART ", "key"=>"open","iconClass"=>"fa fa-lightbulb-o","href"=> "/ph/opendata/default/smart" ),
    array('label' => "CITY ", "key"=>"open","iconClass"=>"fa fa-building","href"=> "/ph/opendata/default/city" ),
    array('label' => "Give us a Smile ", "key"=>"smile", "class"=>"new-note", "iconClass"=>"fa fa-smile-o" ),
    
    );
  
  public $toolbarMenuAdd = array(
     
    array('label' => "Note", "key"=>"note",
        "children"=> array(
          "newNote" => array( "label"=>"Add new note","key"=>"newNote", "class"=>"new-note", "href"=>"#newNote", "iconStack"=>array("fa fa-list fa-stack-1x fa-lg","fa fa-plus fa-stack-1x stack-right-bottom text-danger")),
          "readNote" => array( "label"=>"Read All notes","class"=>"read-all-notes","key"=>"readNote", "href"=>"#readNote", "iconStack"=>array("fa fa-list fa-stack-1x fa-lg","fa fa-share fa-stack-1x stack-right-bottom text-danger")),
        )
    )
  );
  public $subviews = array(
    
  );

public $toolbarMenuMaps = array(
);

public $pages = array(
  "default" => array(
    "index"=>array("href"=>"/ph/opendatameteo/default/index",'title' => "Ville 2.2.main",'title' => "Open Data Météo"),
    "open"=>array("href"=>"/ph/opendatameteo/default/open"),
    "data"=>array("href"=>"/ph/opendatameteo/default/data"),
    "smart"=>array("href"=>"/ph/opendatameteo/default/smart"),
    "city"=>array("href"=>"/ph/opendatameteo/default/city"),
    "get"=>array("href"=>"/ph/opendatameteo/default/get"),
    "gettemp"=>array("href"=>"/ph/opendatameteo/default/gettemp"),
    "getcono2"=>array("href"=>"/ph/opendatameteo/default/getcono2"),
    "getlastvalues"=>array("href"=>"/ph/opendatameteo/default/getlastvalues"),
    "push"=>array("href"=>"/ph/opendatameteo/default/push")
  ),
  
);

function initPage()
{
    //$cs = Yii::app()->getClientScript();
    //this Js lib contains any global module specific Js variables or functions
    //$cs->registerScriptFile($this->module->assetsUrl.'/js/learn.js' , CClientScript::POS_END);

    //echo Yii::app()->controller->id."/".Yii::app()->controller->action->id;
    /*if( Yii::app()->controller->id."/".Yii::app()->controller->action->id != "person/login" && Yii::app()->controller->id."/".Yii::app()->controller->action->id != "person/authenticate" && !Yii::app()->session["user"] )
      $this->redirect(Yii::app()->createUrl("/".$this->module->id."/person/login"));
*/
    //$teeoUserMenu = TeeoApi::menuItems(null); 
    //$this->sidebar1 = array_merge($teeoUserMenu->menuTree,$this->sidebar1);

    if(isset($this->breadcrumb))
      array_push($this->breadcrumb, array("lbl"=>$this->pages[Yii::app()->controller->id][Yii::app()->controller->action->id]["title"]));

    $page = $this->pages[Yii::app()->controller->id][Yii::app()->controller->action->id];
    $this->title = Yii::t("teeo",((isset($page["title"])) ? $page["title"] : $this->title),null,Yii::app()->controller->module->id);
    $this->subTitle = Yii::t("teeo",((isset($page["subTitle"])) ? $page["subTitle"] : $this->subTitle),null,Yii::app()->controller->module->id);
    $this->pageTitle = Yii::t("teeo",((isset($page["pageTitle"])) ? $page["pageTitle"] : $this->pageTitle),null,Yii::app()->controller->module->id);
    $this->projectName = Yii::t("teeo" ,$this->projectName ,null ,Yii::app()->controller->module->id);

   
  }

}
