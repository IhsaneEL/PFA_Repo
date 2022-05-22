<?php 
$conn=new mysqli("127.0.0.1",'root','','test');

$req="SELECT DISTINCT extract(year from `date-naissance`) as a ,count(*) as b from student group by a order by b ;";
$req2="SELECT `ville` as c ,count(*) as d from student group by c order by d;";


$result=$conn->query($req);

$result2=$conn->query($req2);
$jsonArray = array();
    //check if there is any data returned by the SQL Query
    if ($result->num_rows > 0) {
      //Converting the results into an associative array
      while($row = $result->fetch_assoc()) {
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['a'];
        $jsonArrayItem['value'] = $row['b'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    }
    //check if there is any data returned by the SQL Query
    if ($result2->num_rows > 0) {
      //Converting the results into an associative array
      while($row2 = $result2->fetch_assoc()) {
        $jsonArrayItem['label2'] = $row['c'];
        $jsonArrayItem['value2'] = $row['d'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    }
	
	 $conn->close();
    //set the response content type as JSON
    header('Content-type: application/json');
    //output the return value of json encode using the echo function.
    echo json_encode($jsonArray);
	 //echo json_encode($jsonArray2);
?>
