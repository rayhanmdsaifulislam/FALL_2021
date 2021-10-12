<?php
	   $formdata = array(
	      'firstName'=> $_POST["fname"],
	      'lastName'=> $_POST["lname"],
          'age'=> $_POST["age"],
          'designation'=> $_POST["pr"],
          'language'=> $_POST["c1"],
	      'password'=>$_POST["password"],
	      'image'=> $_POST["fu"]
	   );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("mydata.json", $jsondata)) {
	        echo "You Data saved<br>";
	    }
	   else 
	        echo "Sorry Not saved";

     $data = file_get_contents("mydata.json");
	 $myjsondata = json_decode($data);

	 foreach($myjsondata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "Here ".$key." is ".$value."<br>";
	} 
	}
	
?>