<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class ODMController extends Controller
{
  public $version = "V.0.01";
  
  public $title = "pen Data Meteo";
  public $subTitle = "Open Data Meteo";
  public $pageTitle = "Open Data Meteo ";
  
  public static $moduleKey = "learn";
  
  public $keywords = "page keywords for this module";
  public $description = "page description for this module";

  public $projectName = "pen Data Meteo module";
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
    array('label' => "Events ", "key"=>"events","iconClass"=>"fa fa-calendar","href"=> "/learn/event" ),
    array('label' => "Give us a Smile ", "key"=>"smile","iconClass"=>"fa fa-smile-o","href"=> "/learn/smile" ),
    
    );
  
  public $toolbarMenuAdd = array(
     
    array('label' => "Event", "key"=>"event",
        "children"=> array(
          "newEvent" => array( "label"=>"Add new event","key"=>"newEvent", "class"=>"new-event", "href"=>"#newEvent", "iconStack"=>array("fa fa-calendar-o fa-stack-1x fa-lg","fa fa-plus fa-stack-1x stack-right-bottom text-danger")),
          "showCalendar" => array( "label"=>"Show calendar","class"=>"show-calendar","key"=>"showCalendar", "href"=>"#showCalendar", "iconStack"=>array("fa fa-calendar-o fa-stack-1x fa-lg","fa fa-share fa-stack-1x stack-right-bottom text-danger")),
        )
    ),
    array('label' => "Note", "key"=>"note",
        "children"=> array(
          "newNote" => array( "label"=>"Add new note","key"=>"newNote", "class"=>"new-note", "href"=>"#newNote", "iconStack"=>array("fa fa-list fa-stack-1x fa-lg","fa fa-plus fa-stack-1x stack-right-bottom text-danger")),
          "readNote" => array( "label"=>"Read All notes","class"=>"read-all-notes","key"=>"readNote", "href"=>"#readNote", "iconStack"=>array("fa fa-list fa-stack-1x fa-lg","fa fa-share fa-stack-1x stack-right-bottom text-danger")),
        )
    ),
    array('label' => "GED", "key"=>"ged",
        "children"=> array( 
          "newFiles" => array( "label"=>"Add new file","key"=>"newFiles","class"=>"new-file", "href"=>"#genericGED", "iconStack"=>array("fa fa-file fa-stack-1x fa-lg","fa fa-plus fa-stack-1x stack-right-bottom text-danger")),
          "fileList" => array( "label"=>"File List","key"=>"fileList", "class"=>"readFiles","href"=>"#genericGED", "iconStack"=>array("fa fa-file fa-stack-1x fa-lg","fa fa-bars fa-stack-1x stack-right-bottom text-danger")),
        )
    ),
  );
  public $subviews = array(
    
  );

public $toolbarMenuMaps = array(
);

public $pages = array(
  "default" => array(
    "index"=>array("href"=>"/ph/learn/default/index",'title' => "Ville 2.2.main",'title' => "Open Data Météo"),
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

    $this->notifications = ActivityStream::getNotifications(array("notify.id"=>Yii::app()->session["userId"]));

    CornerDev::addWorkLog("teeo","you@dev.com",Yii::app()->controller->id,Yii::app()->controller->action->id);
  }

}