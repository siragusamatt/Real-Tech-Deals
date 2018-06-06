<?php include "header.php"; ?>
<?php include "deal.php"; ?>
<?php 

$connection = DB::connect();

$stmt = $connection->prepare('SELECT * FROM realtechdeals.deals ORDER BY `id` DESC');

if ($stmt == false){
	die ($connection->error);
}

$stmt->execute();

$stmt->bind_result($name, $source, $salePrice, $originalPrice, $categories, $details, $link, $id, $user_id);
?>
<link rel="stylesheet" type="text/css" href="index.css">

<div class="container">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Welcome</h3>
		<h3 class="greeting">Here our most recent deals</h3>
      </div>
      <div class="panel-body">
        <?php
          while ($stmt->fetch()) {
            $deal = new deal($name, $source, $salePrice, $originalPrice, $categories, $details, $link, $user_id);
            ?>
            <p class="deal">
              <span class="name"><?php echo $deal->name; ?></span>
              <br>
              <span class="source"> &#9830 Source: <?php echo $deal->source; ?></span>
              <br>
			  <span><?php echo $deal->details; ?></span>
              <br>
			  <span class="salePrice"><b>Sale Price:</b><br><span class="price1">$<?php echo $deal->salePrice; ?></span>
			  </span>
			  <span class="originalPrice"><b>Original Price:</b><br><span class="price2">$<?php echo $deal->originalPrice; ?></span>
			  </span>
		
			  <br>
			  <a href="<?php echo $deal->link; ?>" target = "_blank" class="button">
					<button type="button">Go To Deal</button>
			  </a>
            </p>
            <?php
          }
         ?>
      </div>
    </div>
  </div>
  
  <a href="#top">Back to top</a>
  
<?php include "footer.php" ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	

