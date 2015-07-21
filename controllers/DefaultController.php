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
		$urlData = $segments[count($segments)-1];
		$datas = explode('-', $urlData);
		if(count($datas) == 2) {
		
		
			$cp = $datas[0];
			$period = $datas[1];
		
			
					
			$brdFound = $this->BRD[$cp];
			
			if($brdFound != null) {
				
				switch($period) {
				
				case 0 :
					/* Dernière heure */
					$startTime = mktime() - 1*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;

				case 1 :
					/* Dernières 24H */
					$startTime = mktime() - 24*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;
					
				case 2 :
					/* Hier */
					$startTime = mktime(0, 0, 0, date('m'), date('d')-1, date('Y'));     
					$endTime = mktime(23, 59, 59, date('m'), date('d')-1, date('Y'));
					break;
					
				case 3 :
					/* 7 derniers jours */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 4 :
					/* Cette semaine */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 5 :
					/* La semaine dernière */
					$startTime = mktime(0, 0, 0, date('n'), date('j')-6, date('Y')) - ((date('N'))*3600*24);     
					$endTime = mktime(23, 59, 59, date('n'), date('j'), date('Y')) - ((date('N'))*3600*24); 
					break;
					
				case 6 :
					/* 30 derniers jours */
					$starttime = mktime () - 30 * 3600 * 24;      
					$endTime = mktime ();   
					
				case 7 :
					/* Ce mois */
					$startTime = mktime(0, 0, 0, date('m'), 1, date('Y'));     
					$endTime = mktime();     
					break;
					
				case 8 :
					/* Le mois dernier */
					$startTime = mktime() - 30*3600*24;     
					$endTime = mktime();  
					break;
				}
					 
				 
				
				$res = PHDB::find(Thing::collection, array('boardId' => $brdFound, "timestamp" => array('$gt' => new MongoDate($startTime), '$lte' => new MongoDate($endTime))));
				echo Rest::json($res);//new MongoDate($startTime)."<br>".new MongoDate($endTime);
				
			}	
			else {
				echo "error";
			}
		}
		else {
			echo "error";
		}
	   
	   
	   
	}

	public function actionGetTemp() 
	{
	
	
	
		$url = Yii::app()->request->url;
		$segments = explode('/', $url);
		$urlData = $segments[count($segments)-1];
		$datas = explode('-', $urlData);
		if(count($datas) == 2) {
		
		
			$cp = $datas[0];
			$period = $datas[1];
		
					
			$brdFound = $this->BRD[$cp];
			
			if($brdFound != null) {
			
				switch($period) {
				
				case 0 :
					/* Dernière heure */
					$startTime = mktime() - 1*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;

				case 1 :
					/* Dernières 24H */
					$startTime = mktime() - 24*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;
					
				case 2 :
					/* Hier */
					$startTime = mktime(0, 0, 0, date('m'), date('d')-1, date('Y'));     
					$endTime = mktime(23, 59, 59, date('m'), date('d')-1, date('Y'));
					break;
					
				case 3 :
					/* 7 derniers jours */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 4 :
					/* Cette semaine */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 5 :
					/* La semaine dernière */
					$startTime = mktime(0, 0, 0, date('n'), date('j')-6, date('Y')) - ((date('N'))*3600*24);     
					$endTime = mktime(23, 59, 59, date('n'), date('j'), date('Y')) - ((date('N'))*3600*24); 
					break;
					
				case 6 :
					/* 30 derniers jours */
					$starttime = mktime () - 30 * 3600 * 24;      
					$endTime = mktime ();   
					
				case 7 :
					/* Ce mois */
					$startTime = mktime(0, 0, 0, date('m'), 1, date('Y'));     
					$endTime = mktime();     
					break;
					
				case 8 :
					/* Le mois dernier */
					$startTime = mktime() - 30*3600*24;     
					$endTime = mktime();  
					break;
				}
				
				$res = PHDB::find(Thing::collection,array('boardId' => $brdFound, "timestamp" => array('$gt' => new MongoDate($startTime), '$lte' => new MongoDate($endTime))),array("temp", "timestamp"));
				$res2 = PHDB::find(Thing::collection,array('boardId' => $brdFound, "timestamp" => array('$gt' => new MongoDate($startTime), '$lte' => new MongoDate($endTime))),array("hum", "timestamp"));

				echo '[ { "key" : "Humidité" , "bar": true, "color": "#ccf", "values" : [ ';

				foreach($res2 as $key => $value) {
					if($value['hum'] != null) {
						echo ' [ '.$value['timestamp']->sec.'000 , '.$value['hum'].'.0 ] ';
						if (!($value === end($res2))) {
							echo ' , ';
						}
					}
				}

				echo ']} ,  {"key" : "Temperature" , "color": "#333", "values" : [ ';

				foreach($res as $key => $value) {
					if($value['temp'] != null) {
						echo ' [ '.$value['timestamp']->sec.'000 , '.$value['temp'].'.0 ] ';
						if (!($value === end($res))) {
							echo ' , ';
						}
					}
				}
				echo ' ] } ]';

			}	
			else {
				echo "error1";
			}
		}
		else {
			echo "error2";
		}
		
	   
	}
	
	
	
	
	public function actionGetCoNo2() 
	{
	
		$url = Yii::app()->request->url;
		$segments = explode('/', $url);
		$urlData = $segments[count($segments)-1];
		$datas = explode('-', $urlData);
		if(count($datas) == 2) {
		
		
			$cp = $datas[0];
			$period = $datas[1];
		
			
			$brdFound = $this->BRD[$cp];
			
			if($brdFound != null) {
			
				switch($period) {
				
				case 0 :
					/* Dernière heure */
					$startTime = mktime() - 1*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;

				case 1 :
					/* Dernières 24H */
					$startTime = mktime() - 24*3600 + 7*3600;     
					$endTime = mktime() + 7*3600; 
					break;
					
				case 2 :
					/* Hier */
					$startTime = mktime(0, 0, 0, date('m'), date('d')-1, date('Y'));     
					$endTime = mktime(23, 59, 59, date('m'), date('d')-1, date('Y'));
					break;
					
				case 3 :
					/* 7 derniers jours */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 4 :
					/* Cette semaine */
					$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24);     
					$endTime = mktime();  
					break;
					
				case 5 :
					/* La semaine dernière */
					$startTime = mktime(0, 0, 0, date('n'), date('j')-6, date('Y')) - ((date('N'))*3600*24);     
					$endTime = mktime(23, 59, 59, date('n'), date('j'), date('Y')) - ((date('N'))*3600*24); 
					break;
					
				case 6 :
					/* 30 derniers jours */
					$starttime = mktime () - 30 * 3600 * 24;      
					$endTime = mktime ();   
					
				case 7 :
					/* Ce mois */
					$startTime = mktime(0, 0, 0, date('m'), 1, date('Y'));     
					$endTime = mktime();     
					break;
					
				case 8 :
					/* Le mois dernier */
					$startTime = mktime() - 30*3600*24;     
					$endTime = mktime();  
					break;
				}
				
				$res = PHDB::find(Thing::collection,array('boardId' => $brdFound, "timestamp" => array('$gt' => new MongoDate($startTime), '$lte' => new MongoDate($endTime))),array("co", "timestamp"));
				$res2 = PHDB::find(Thing::collection,array('boardId' => $brdFound, "timestamp" => array('$gt' => new MongoDate($startTime), '$lte' => new MongoDate($endTime))),array("no2", "timestamp"));

				echo '[ { "key" : "CO" , "bar": true, "color": "#ccf", "values" : [ ';

				foreach($res as $key => $value) {
					if($value['co'] != null) {
						echo ' [ '.$value['timestamp']->sec.'000 , '.$value['co'].'.0 ] ';
						if (!($value === end($res))) {
							echo ' , ';
						}
					}
				}

				echo ']} ,  {"key" : "NO2" , "color": "#333", "values" : [ ';

				foreach($res2 as $key => $value) {
					if($value['no2'] != null) {
						echo ' [ '.$value['timestamp']->sec.'000 , '.$value['no2'].'.0 ] ';
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
		else {
			echo "error";
		}
	   
	}


	public function actionGetLastValues() 
	{
		$commune = array( '974'=>array(
			'97400'=> 'ST DENIS',
			'97410'=> 'ST PIERRE',
			'97411'=> 'BOIS DE NEFLES ST PAUL',
			'97412'=> 'BRAS PANON',
			'97413'=> 'CILAOS',
			'97414'=> 'ENTRE DEUX',
			'97416'=> 'LA CHALOUPE',
			'97417'=> 'LA MONTAGNE',
			'97418'=> 'LA PLAINE DES CAFRES',
			'97419'=> 'LA POSSESSION',
			'97420'=> 'LE PORT',
			'97421'=> 'LA RIVIERE',
			'97422'=> 'LA SALINE',
			'97423'=> 'LE GUILLAUME',
			'97424'=> 'LE PITON ST LEU',
			'97425'=> 'LES AVIRONS',
			'97426'=> 'LES TROIS BASSINS',
			'97427'=> 'L ETANG SALE',
			'97429'=> 'PETITE ILE',
			'97430'=> 'LE TAMPON',
			'97431'=> 'LA PLAINE DES PALMISTES',
			'97432'=> 'RAVINE DES CABRIS',
			'97433'=> 'SALAZIE',
			'97434'=> 'ST GILLES LES BAINS' ,
			'97435'=> 'ST GILLES LES HAUTS',
			'97436'=> 'ST LEU',
			'97437'=> 'STE ANNE',
			'97438'=> 'STE MARIE',
			'97439'=> 'STE ROSE',
			'97440'=> 'ST ANDRE',
			'97441'=> 'STE SUZANNE',
			'97442'=> 'ST PHILIPPE',
			'97450'=> 'ST LOUIS',
			'97460'=> 'ST PAUL',
			'97470'=> 'ST BENOIT',
			'97480'=> 'ST JOSEPH',
			'97490'=> 'STE CLOTILDE'
			)
		);  

		
		$output = "";
		$output.="[{";
		foreach ($commune['974'] as  $cp => $name) {
			//echo '<a href="/ph/opendata/default/city/cp/'.$cp.'">'.$name.'</a> | ';
			if($this->BRD[$cp] != null) {
				$res = PHDB::findOne(Thing::collection,array('boardId' => $this->BRD[$cp]));
				$output.="ville2:'".$name."', ".$res['temp'].'},{';
			}
			else {
				$output.="ville:'".$name."', 0},{";
			}
			
			
		}
		//rtrim($result, '},{');
		$output.="}]";

		echo $output;
	}


  public function actionFablab() 
  {
    $this->render("fablab",array(  ));      
  }
   
}
