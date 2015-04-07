<?php
/**
 * DefaultController.php
 *
 * OneScreenApp for Communecting people
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class DefaultController extends OpenDataController {

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

  public function actionOpen() 
  {
    $this->render("open",array(  ));      
  }

  public function actionData() 
  {
    $this->render("data",array(  ));      
  }

  public function actionSmart() 
  {
    $this->render("smart",array(  ));      
  }

  public function actionCity() 
  {
    $this->render("city",array(  ));      
  }
  
  /* FT 07/04/2015 */
  
	public function actionPush() 
	{
		/*parse_str(file_get_contents("php://input"),$post_vars);
		$data = $post_vars['data'];
		$json = str_replace('{', '{"', $data);
		$json = str_replace(',', '","', $json);
		$json = str_replace('}', '"}', $json);
		
		$ptn = '/' . preg_quote(":",'/') . '/';
		$jsonOk = preg_replace($ptn, '":"', $json, 10);*/
		
		
		if (!function_exists('getallheaders')) {
		  function getallheaders() {
			foreach ($_SERVER as $key=>$value) {
			  if (substr($key, 0, 5) === "HTTP_") {
				$key = str_replace(" ", "-", ucwords(strtolower(str_replace("_", " ", substr($key, 5)))));
				$out[$key] = $value;
			  }
			  else {
				$out[$key] = $value;
			  }
			}
			return $out;
		  }
		}
			
		$heads = getallheaders();
		$data = $heads['Data'];
  
		$param = json_decode($data, true);
		$param = $param[0];
		$param['macId'] = $heads['X-Boardid'];
		
		$res = Thing::save($param);
		$res["param"] = $param;
		$res["json"] = $json;
		//echo print_r($param, true);//Rest::json($param);
		
		Yii::log(print_r($heads, true), "error");
		
	}

	public function actionGet() 
	{
	   $res = PHDB::find(Thing::collection);
	   echo Rest::json($res);
	}

	public function actionGetTemp() 
	{
	   $res = PHDB::find(Thing::collection,array(),array("temp"));
	   echo Rest::json($res);
	}

  public function actionFablab() 
  {
    $this->render("fablab",array(  ));      
  }
   
}
