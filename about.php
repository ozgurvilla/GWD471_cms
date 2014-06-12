<<<<<<< HEAD
 
<?php $page_id = 'about'; ?>
  <?php require_once('../../config.php')?>
=======
<style>
  #home .home_link,
#about .about_link,
#contact .contact_link {
  color:red;
}
  .errors {display:block; color:red;}
.products {width:200px; border:medium; padding:15px; float:left;}
.product img {width:170p; height:100px; background:#ccc;}
.clear {clear:both;}

label, textarea, input {display:block;}
</style>



<?php $page_id = 'about'; ?>
  <?php require_once('../../config.php')?>
<?php
//get all the content to the selected page
$sql = "
SELECT *
FROM site_content
WHERE page_name='about'";

$myData = $db->query($sql);

//create container for each piece of data
while($row = $myData->fetch_assoc())
{
  if($row['section_name'] === 'blurb')
  {
   $blurb = $row['content']; 
  }
  if($row['section_name'] === 'blurb')
  {
   $intro = $row['content']; 
  }
}
  ?>
>>>>>>> FETCH_HEAD
  <?php
  //interact wit DB
  $sql = 'SELECT * FROM widgeco';

  //send comment to MySQL
  $myData = $db->query($sql)
  OR exit('unable to select data from table');

  //close DB connection
  $db->close();

  ?>
<<<<<<< HEAD
=======

>>>>>>> FETCH_HEAD
  <?php require_once('includes/top.php')?>
  <?php require_once('includes/header.php')?>
     <section>
     	<h2>About</h2>
<<<<<<< HEAD
=======
       <p><?php echo $intro; ?></p>
>>>>>>> FETCH_HEAD
     	<?php 
        echo '<div id="products">';
        while($row = $myData->fetch_assoc())
        {
          echo '<div class="product">';
          echo '<img src="" alt="" />';
          echo '<h3>' . $row['name'] . '</h3>';
          echo '<p>' . $row['description'] . '</p>';
          echo '<p>$' . $row['price'] . '</p>';
          echo '</div>';
        }
        echo '<br class="clear"/>';
        echo '</div>';

    
    
      ?>
     
     
     </section>
     
  <?php require_once('includes/footer.php')?>

</body>
</html>