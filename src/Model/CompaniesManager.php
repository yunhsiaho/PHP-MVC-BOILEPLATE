<?php
 

class CompaniesManager extends Dbconnect {

    public function getCompanies() {

    $sql = "SELECT * FROM `companies`\n"

    . "JOIN companies\n"

    . "on contact_persons.comp_id=companies.comp_id\n"

    ;
     
    $stmt = $this->connect()->query($sql); 
     
    
    $companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $companies;
    
   }

 }

 //  while($row = $stmt->fetch()) {

    //   echo $row['comp_name'] . ' | ';
    //   echo $row['comp_country'] . '<br>';
    //  }

    // foreach($companies as $key => $company){
    //   echo $company['comp_name'];
    //   echo'<br/>';
    //  }