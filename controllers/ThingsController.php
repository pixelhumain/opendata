<?php
/**
 * SiteController.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/23/12
 * Time: 12:25 AM
 */
class ThingsController extends OpenDataController {
  

	/**
	 * will add a push data into collection smartcitizen
	 */
	public function actionPush() 
	{
	    $header = getallheaders();
		$data = $header['Data'];

		$param = json_decode($data, true);
		$param['macId'] = $header['X-Boardid'];
		
		$res = Thing::save($param);
		$res["param"] = $param;
		echo Rest::json($res);
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

}