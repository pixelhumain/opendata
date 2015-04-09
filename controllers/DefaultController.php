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
		echo "ok";
	}

	public function actionGet() 
	{
	
		$url = Yii::app()->request->url;
		$segments = explode('/', $url);
		$cp = $segments[count($segments)-1];
		
		$BRD = array( 
					"97421" => "00:06:66:21:89:e9",
					"97450" => "00:06:66:21:89:01"
				);
				
		$brdFound = $BRD[$cp];
		
		if($brdFound != null) {
			$res = PHDB::find(Thing::collection, array('boardId' => $brdFound));
			echo Rest::json($res);
		}
		else {
			echo "error";
		}
		
	   
	   
	   
	}

	public function actionGetTemp() 
	{
	
	
	
		$url = Yii::app()->request->url;
		$segments = explode('/', $url);
		$cp = $segments[count($segments)-1];
		
		
		$BRD = array( 
					"97421" => "00:06:66:21:89:e9",
					"97450" => "00:06:66:21:89:01"
				);
				
		$brdFound = $BRD[$cp];
		
		if($brdFound != null) {
			$res = PHDB::find(Thing::collection,array('boardId' => $brdFound),array("temp", "timestamp"));
			$res2 = PHDB::find(Thing::collection,array('boardId' => $brdFound),array("hum", "timestamp"));

			echo '[ { "key" : "Humidité" , "bar": true, "color": "#ccf", "values" : [ ';

			foreach($res2 as $key => $value) {
				if($value['hum'] != null) {
					echo ' [ '.strtotime($value['timestamp']).'000 , '.$value['hum'].'.0 ] ';
					if (!($value === end($res2))) {
						echo ' , ';
					}
				}
			}

			echo ']} ,  {"key" : "Temperature" , "color": "#333", "values" : [ ';

			foreach($res as $key => $value) {
				if($value['temp'] != null) {
					echo ' [ '.strtotime($value['timestamp']).'000 , '.$value['temp'].'.0 ] ';
					if (!($value === end($res))) {
						echo ' , ';
					}
				}
			}
			echo ' ] } ]';

		}
		else {
			echo "error";
		}
		
	   
	}
	
	
	
	
	public function actionGetCoNo2() 
	{
	
		$url = Yii::app()->request->url;
		$segments = explode('/', $url);
		$cp = $segments[count($segments)-1];
		
		$BRD = array( 
					"97421" => "00:06:66:21:89:e9",
					"97450" => "00:06:66:21:89:01"
				);
				
		$brdFound = $BRD[$cp];
		
		if($brdFound != null) {
			$res = PHDB::find(Thing::collection,array('boardId' => $brdFound),array("co", "timestamp"));
			$res2 = PHDB::find(Thing::collection,array('boardId' => $brdFound),array("no2", "timestamp"));

			echo '[ { "key" : "CO" , "bar": true, "color": "#ccf", "values" : [ ';

			foreach($res as $key => $value) {
				if($value['co'] != null) {
					echo ' [ '.strtotime($value['timestamp']).'000 , '.$value['co'].'.0 ] ';
					if (!($value === end($res))) {
						echo ' , ';
					}
				}
			}

			echo ']} ,  {"key" : "NO2" , "color": "#333", "values" : [ ';

			foreach($res2 as $key => $value) {
				if($value['no2'] != null) {
					echo ' [ '.strtotime($value['timestamp']).'000 , '.$value['no2'].'.0 ] ';
					if (!($value === end($res2))) {
						echo ' , ';
					}
				}
			}
			echo ' ] } ]';
		}
		else {
			echo "error";
		}
	   
	}

  public function actionFablab() 
  {
    $this->render("fablab",array(  ));      
  }
   
}
