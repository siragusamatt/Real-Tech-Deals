<?php
include "header.php";
include "session.php";
include "post.php";

SessionClient::checkIfLoggedIn();

$myDeals = Post::selectUser($_SESSION['currentUser']['id']);
?>
<link rel="stylesheet" type="text/css" href="profile.css">

<h1>Welcome to your profile page, <?php echo $_SESSION['currentUser']['firstName'];?>.</h1>
<h3>Your deals</h3>
<div class="panel-body">
<?php
	foreach ($myDeals as $post) {
?>
		<div class="deal"> <?php echo $post['name']; ?> 
		<a href="delete-post.php?id=<?php echo $post['id'] ?>" class="button">
			<button type="button">Delete Deal</button>
		</a>
		<a href="edit-deal.php?id=<?php echo $post['id'] ?>" class="button">
			<button type="button">Edit Deal</button>
		</a>
		<a href="<?php echo $post['link']; ?>" target = "_blank" class="button">
			<button type="button">Go To Deal</button>
		</a>
		</div>
<?php
	}
?>	
</div>

<div class="delete"><a href="delete-profile.php" class="delete">Delete Your Profile</a></div>


<style>
.loginlink {
	text-decoration:none;
	color: blue;
	font-style: italic;
}
</style>


