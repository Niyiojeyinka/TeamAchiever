<?php
class Database{
	public $file;

	function __construct($file){
    $this->file = $file;

	}
    
    public function insert($newRecordArray){
        $db = fopen($this->file, "r") or die("Unable to open file!");
    	$data = fread($db,filesize($this->file));
        fclose($db);
//got the initial content of the file in text/json format and covert to array  
    	$dataArray = json_decode($data,true);
       // echo var_dump( $dataArray);
        array_push($dataArray, $newRecordArray);
        $db = fopen($this->file, "w") or die("Unable to open file!");
//convert back to text/jsonformat
       fwrite($db, json_encode($dataArray,true));
               fclose($db);


    }

    public function get_all_records(){
    $db = fopen($this->file, "r+") or die("Unable to open file!");

    $data = fread($db,filesize($this->file));
    	return json_decode($data,true);
         fclose($db);

    }
     
  
}