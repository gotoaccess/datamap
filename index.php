<?php

  $json = '{ "response": { "uri":"\/api\/michael.giorgi@ymail.com\/Zoho%20Creator%20Analytics\/Revenue1", "action":"EXPORT", "result": { "column_order":["Account Type Report","COA_Report","COAS_Report","Total Reveneue","Cost of Goods Sold","Expense","Business","Organization Name"], "rows":[ ["Revenue","Royalty\/IP","Income (Passive)","60","0","0","3450243000008720002","JMPowers Limited, LLC"], ["Revenue","3450243000009947013","3450243000009954384","2182.38","0","0","3450243000009608333","Phephe Rose, LLC"], ["Revenue","Uncategorized Money In","","32379.98","0","0","3450243000009401002","Smack Sound LLC"], ["Revenue","3450243000009947013","3450243000009954384","5150","0","0","3450243000010033012","Safe Harbor Bookkeeping, LLC"], ["Revenue","Uncategorized Money In","","8696.039999999999","0","0","3450243000009960288","Devin Sizemore Consulting, LLC"], ["Revenue","Service Sale","Income (Ordinary)","970","0","0","3450243000009857026","JMPowers Limited, LLC"], ["Revenue","","","250","0","0","3450243000010033012","Safe Harbor Bookkeeping, LLC"], ["Revenue","Service Contract","Income (Ordinary)","29150","0","0","3450243000009858277","McKinley LLC"], ["Revenue","Service Contract","Income (Ordinary)","180005.43000000002","0","0","3450243000009857026","JMPowers Limited, LLC"], ["Revenue","Uncategorized Money In","","400","0","0","3450243000009847330","Metallic Flame Studios, LLC, a series of Braiuca Enterprises, LLC"], ["Revenue","Uncategorized Money In","","500","0","0","3450243000009857026","JMPowers Limited, LLC"], ["Revenue","Royalty\/IP","Income (Passive)","328.73999999999995","0","0","3450243000009858014","Jane M Powers PLLC"], ["Revenue","Uncategorized Money In","","1589.2","0","0","3450243000009284093","Triffid Online Marketing, LLC"], ["Revenue","Uncategorized Money In","","511732.6","0","0","3450243000009215141","Whitewater Canyon Holdings, LLC"], ["Revenue","Uncategorized Money In","","2100","0","0","3450243000011799012","You Incorporated"], ["Revenue","Uncategorized Money In","","115434.65","0","0","3450243000009215179","JWH Investment Trust"], ["Revenue","3450243000009947013","3450243000009954384","1066.02","0","0","3450243000009401002","Smack Sound LLC"], ["Revenue","Service Sale","Income (Ordinary)","10000","0","0","3450243000012026018","Management Co, LLC"], ["Revenue","","","654.8199999999999","0","0","3450243000009960288","Devin Sizemore Consulting, LLC"], ["Revenue","Uncategorized Money In","","5097.53","0","0","3450243000009846015","Braiuca Enterprises, LLC"], ["Revenue","Uncategorized Money In","","9538.080000000002","0","0","3450243000010002405","Capitalist Academy, Inc. "], ["Revenue","","","265.59","0","0","3450243000010002405","Capitalist Academy, Inc. "], ["Revenue","3450243000009947013","3450243000009954384","327.29","0","0","3450243000009846015","Braiuca Enterprises, LLC"], ["Revenue","Distribution","Income (Passive)","4770.84","0","0","3450243000013134929","Howard Brothers Management, LLC"], ["Revenue","Product Sales","Income (Ordinary)","1500","0","0","3450243000009858014","Jane M Powers PLLC"], ["Revenue","","","1359.99","0","0","3450243000009608333","Phephe Rose, LLC"], ["Revenue","Uncategorized Deposit","Deposit","1000","0","0","3450243000009857026","JMPowers Limited, LLC"], ["Revenue","Uncategorized Money In","","14901.95","0","0","3450243000009927030","Life Guarding Legacies, PLLC"], ["Revenue","Uncategorized Money In","","873.8","0","0","3450243000009608333","Phephe Rose, LLC"], ["Revenue","Uncategorized Money In","","13307.45","0","0","3450243000009212080","J Howard Investments, LLC"], ["Revenue","Commission","Income (Ordinary)","334","0","0","3450243000012026018","Management Co, LLC"], ["Revenue","Uncategorized Money In","","22886","0","0","3450243000013097587","Real Estate Holding, LLC"], ["Revenue","3450243000009947013","3450243000009954384","873.3","0","0","3450243000009960288","Devin Sizemore Consulting, LLC"], ["Revenue","Uncategorized Money In","","6000","0","0","3450243000009758002","Transformational Styles"], ["Revenue","Uncategorized Money In","","2000","0","0","3450243000009757015","Condomania, LLC"], ["Revenue","3450243000009947013","3450243000009954384","1456.75","0","0","3450243000010002405","Capitalist Academy, Inc. "], ["Revenue","Uncategorized Money In","","10193","0","0","3450243000013024128","New Company!, LLC"], ["Revenue","3450243000009947013","3450243000009954384","100","0","0","3450243000009284093","Triffid Online Marketing, LLC"], ["Revenue","","","800","0","0","3450243000011799012","You Incorporated"], ["Revenue","Uncategorized Money In","","335324.87","0","0","3450243000013135567","2411 Eleventh, LLC"], ["Revenue","Rent\/Lease","Income (Rental)","5380","0","0","3450243000012026018","Management Co, LLC"], ["Revenue","Uncategorized Money In","","4100","0","0","3450243000010033012","Safe Harbor Bookkeeping, LLC"], ["Revenue","Uncategorized Money In","","140.86","0","0","3450243000009858014","Jane M Powers PLLC"] ] } } }';


  $rel = '{ "response": { "uri":"\/api\/michael.giorgi@ymail.com\/Zoho%20Creator%20Analytics\/Organization%20Details", "action":"EXPORT", "criteria":"Allowed Owners=\'michael.giorgi@ymail.com\'", "result": { "column_order":["ID","Allowed Owners","Organization Name"], "rows":[ ["3450243000008720002","michael.giorgi@ymail.com","Michael Giorgi, LLC"], ["3450243000009357075","michael.giorgi@ymail.com","Business 2, LLC"], ["3450243000010843256","michael.giorgi@ymail.com","New Test 3"], ["3450243000011143518","michael.giorgi@ymail.com","New Test 15"] ] } } }';
 
 
 $org =  json_decode( $rel, true );  

 $results1 = $org['response']['result']['rows'];

 $column_order2 = $org['response']['result']['column_order'];




  $bigArray = json_decode( $json, true );

  $results = $bigArray['response']['result']['rows'];

  $column_order = $bigArray['response']['result']['column_order'];


  
  $orgList = arrayRef($column_order2, $results1);

  $dataList = arrayRef($column_order, $results);


  function arrayRef($column_order, $results){
    $bigData =  array();

    foreach($results as $key => $row){
      $sub = array();
      foreach( $row as $index => $reg){
          
        $sub[$column_order[ $index ] ] =  $row[ $index ];
      }
      $bigData[$key] = $sub;
      
    } 
    return $bigData;
  }





  function relation($dataList, $orgList) {

    $finalData = array();

    foreach($dataList as $index => $data){

      if(!empty($data['Business'])){
        foreach($orgList as $row){
          if($data['Business'] == $row['ID']){
            $data['Business'] = $row;
          }
        }
      }

      $finalData[$index] = $data;
    }
    
    return $finalData;

  }
  
  echo '<pre>'; print_r(relation($dataList, $orgList));
  

?>