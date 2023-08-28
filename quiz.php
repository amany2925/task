<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      <!-- task-1 Chess Board --> 
  <h3>task 1 Chess Board</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   
      <?php
      $row=1;
      
      while($row<=8)
	  {
          echo "<tr>";
          $col=1;
          while($col<=8)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          $col++;
          }
          echo "</tr>";
          $row++;
    }
          ?>
  </table>

  <!-- task-2 Fizz Buzz Game-->
  <h3>task 2 fizz buzz game</h3>

<?php
  for ($i = 0; $i < 50; $i++) {
      if ($i % 3 == 0) 
      echo("Fizz ");
      
    else if ($i % 5 == 0) 
    echo("Buzz ");

    else echo($i);
}
?>
</br>
<!-- task-3-->
<h3>task 3 factor</h3>
<?php
$num = 5;
$fact = 1;
for($i = 1; $i <=$num;$i++) // initially, i = 1
{
	$fact = $fact * $i; // 
}
echo "factorial of $num is = ".$fact;
?>



  </body>
  </html>