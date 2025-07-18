<?php
    function find_disease($mysqli, $symptoms) {
      // Ensure that the $symptoms variable is an array of sanitized symptom names
      $symptom_names = array_map('trim', explode(',', $symptoms));
      $symptom_names = array_map([$mysqli, 'real_escape_string'], $symptom_names);
  
      // Build the SQL query to get corresponding SID for symptom names
      $query = "SELECT sid FROM symptom WHERE sname IN ('" . implode("','", $symptom_names) . "')";
      $result = $mysqli->query($query);
  
      // Check if the query was successful
      if (!$result) {
          die("Query failed: " . $mysqli->error);
      }
  
      // Fetch the SIDs
      $sids = [];
      while ($row = $result->fetch_assoc()) {
          $sids[] = $row['sid'];
      }
  
      // Build the main query to get disease details
      $main_query = "SELECT d.dname, d.altnames, d.dosha, d.drugs, d.exceptions, d.contraindications, 
                        d.medium, d.ingredients, d.pharm_prop, d.reference, d.did
                   FROM disease d
                   JOIN dis_sym ds ON d.did = ds.did
                   WHERE ds.sid IN (" . implode(',', $sids) . ")
                   GROUP BY d.did
                   HAVING COUNT(DISTINCT ds.sid) = " . count($sids);

    $result = $mysqli->query($main_query);
  
      // Check if the query was successful
      if (!$result) {
          die("Query failed: " . $mysqli->error);
      }
      echo "<div class='alldisease'>";
      // Fetch and display the disease details
      while ($row = $result->fetch_assoc()) {
          // Display disease details in a div
          echo "<div class='disease'>";
          echo "<h2>{$row['dname']}</h2>";
  
          // Display image (assuming it's in PROJECT_ROOT/Public/images/<did>)
          $image_path = "images/disease/{$row['did']}.jpg";
          if (file_exists($image_path)) {
              echo "<img class='diseaseimg' src='$image_path' alt='{$row['dname']}'>";
          }
          else {
              $image_path = "images/disease/{$row['did']}.png";
              if(file_exists($image_path)) {
                  echo "<img class='disease' src='$image_path' alt='{$row['dname']}'>";
              }
              else {
                  $image_path = "images/disease/{$row['did']}.webp";
                  if(file_exists($image_path)) {
                      echo "<img class='disease' src='$image_path' alt='{$row['dname']}'>";
      
                  }
              }
          }
  
          // Display other disease fields
          echo "<p><b>Alt Name:</b> {$row['altnames']}</p>";
          echo "<p><b>Dosha:</b> {$row['dosha']}</p>";
          echo "<p><b>Drugs:</b> {$row['drugs']}</p>";
          echo "<p><b>Exceptions:</b> {$row['exceptions']}</p>";
          echo "<p><b>Contraindications:</b> {$row['contraindications']}</p>";
          echo "<p><b>Medium:</b> {$row['medium']}</p>";
          echo "<p><b>Ingredients:</b> {$row['ingredients']}</p>";
          echo "<p><b>Pharm Props:</b> {$row['pharm_prop']}</p>";
          echo "<p><b>References:</b> {$row['reference']}</p>";
          echo "</div>";
      }
      echo "</div>";
  }

    
  // function confirm_result_set($result_set) {
  //   if (!$result_set) {
  //   	exit("Database query failed.");
  //   }
  // }
?>
