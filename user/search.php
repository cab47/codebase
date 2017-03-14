<?php
    
    //connect with the database
    $db = new mysqli("localhost","root","","cab_mngt");
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT V_Name FROM vendor WHERE V_Name LIKE '%".$searchTerm."%' ORDER BY V_Name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['V_Name'];
        
    }
    
    //return json data
    echo json_encode($data);
    
?>