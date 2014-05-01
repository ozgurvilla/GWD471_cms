 
<?php $page_id = 'about'; ?>
  <?php require_once('../../config.php')?>
  <?php
  //interact wit DB
  $sql = 'SELECT * FROM widgets';

  //send comment to MySQL
  $myData = $db->query($sql)
  OR exit('unable to select data from table');

  //close DB connection
  $db->close();

  ?>
  <?php require_once('includes/top.php')?>
  <?php require_once('includes/header.php')?>
     <section>
     	<h2>About</h2>
     	<?php 
        while($row = $myData->fetch_assoc())
        {
    echo $row['name'] . '<br>';
    echo $row['price'] . '<br>';
    echo $row['description'] . '<br>';
        }
    
    
      ?>
     
     
     </section>
     
  <?php require_once('includes/footer.php')?>

</body>
</html>