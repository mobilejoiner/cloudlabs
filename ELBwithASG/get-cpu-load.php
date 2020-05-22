<?php
  # This performs vmstat to show current CPU idle time
  $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');

  # Print out the idle time, subtracted from 100 to get the current CPU utilization
  echo "<br /><p>Current CPU Load: <b>"; 
  echo 100-$idleCpu;
  echo "%</b></p>";
  
?>
