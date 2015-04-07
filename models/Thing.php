<?php 
class Thing {

	const collection = "things";
	/**
	 * get Entries from a collection and converts ID and applies a dummyData field for easy export and remove
	 * @param type $type 
	 * @param type $where 
	 * @return type
	 */
	public static function save($param){
        $new = array(
	   "temp"=>$param["temp"],
	   "hum"=>$param["hum"],
	   "light"=>$param["light"],
	   "bat"=>$param["bat"],
	   "panel"=>$param["panel"],
	   "co"=>$param["co"],
	   "no2"=>$param["no2"],
	   "noise"=>$param["noise"],
	   "nets"=>$param["nets"],
	   "timestamp"=>$param["timestamp"],

	   "type" => "smartCitizen",
	   "boardId" => $param["macId"],
	   "userId" => ""
	   );
	  //Insert the organization
		 PHDB::insert( self::collection, $new);
		 return array("result"=>true);

    }
}
?>
