<?php
$json = json_encode(array(
     
     "count" => 69,
     "property" => array(
		 0 => array("pId" => 665502,
					"longitude" => 1.296387,
					"latitude" => 47.893327,
					"pType" => "villa",
					"title" => "Luxury Family House",
					"price" => "$360,000",
					"pImage" => "11.jpg",
					"location" => "4600 Cresthaven Drive,  Colleyville",
					"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias impedit autem esse et eum atque ipsa amet, iusto suscipit quo.", 
					"bedroom" => 3, 
					"bathroom" => 2
					),
		1 => array(  "pId" => 66550,
					"longitude" => -112.234056,
					"latitude" => 33.606024,
					"pType" => "villa",
					"title" => "Luxury Family House",
					"price" => "$360,000",
					"pImage" => "11.jpg",
					"location" => "4600 Cresthaven Drive,  Colleyville",
					"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias impedit autem esse et eum atque ipsa amet, iusto suscipit quo.", 
					"bedroom" => 3, 
					"bathroom" => 2
				),
		2 => array(  "pId" => 66502,
					"longitude" => -112.205244,
					"latitude" => 33.543527,
					"pType" => "villa",
					"title" => "Luxury Family House",
					"price" => "$360,000",
					"pImage" => "11.jpg",
					"location" => "4600 Cresthaven Drive,  Colleyville",
					"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias impedit autem esse et eum atque ipsa amet, iusto suscipit quo.", 
					"bedroom" => 3, 
					"bathroom" => 2
				),
		"length" => 3
      	
     )
	 
));

echo $json;
?>