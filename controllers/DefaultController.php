<?php
/**
 * DefaultController.php
 *
 * OneScreenApp for Communecting people
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class DefaultController extends ODMController {

  protected function beforeAction($action)
	{
    parent::initPage();
	  return parent::beforeAction($action);
	}

  /**
   * List all the latest observations
   * @return [json Map] list
  */
	public function actionIndex() 
	{
    $events = array();
    $todos = array();
    $lastNews = array();

    $this->render("index",array( "events"=>$events,
                                 "todos"=>$todos,
                                 "lastNews"=>$lastNews ));      
  }
   
}