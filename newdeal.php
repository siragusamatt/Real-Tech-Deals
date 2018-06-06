<link rel="stylesheet" type="text/css" href="newdeal.css">

<?php include "header.php";
include "session.php";
SessionClient::checkIfLoggedIn();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    ?>
<h2>Submit a deal!</h2>
<h3>This is your chance to show other users a deal that you found.</h3>
<h4>Keep in mind...</h4>
<p>1. Remember, this a website dedicated to good deals, only post items that are on sale/discounted.</p>
<p>2. Only post deals from trusted online websites, such as Amazon, Best Buy, New Egg, etc.</p>
<p>3. Please double check and make sure the information from your post matches the post on the original website exactly.</p>
<p>4. Make sure the link you post leads right to the item on the original website and not just to the homepage, this will make it easier for the users interested in the deal you posted.</p>

<form class="newdeal" action="submitdeal.php" method="POST">
		<legend>Enter the information</legend>
		<input type="text" name="name" placeholder="Name of the product">
		<br>
		<input type="text" name="source" placeholder="Online retailer where you found this deal">
		<br>
		$<input type="price" name="salePrice" class="price" placeholder="Current sale price">
		<br>
		$<input type="price" name="originalPrice" class="price" placeholder="Original retail price">
		<br>
		<select name="categories">
			<option disabled selected="selected"> - Select a category - </option>
			<option value="audio">Audio(speakers/headphones)</option>
			<option value="cameras">Cameras/Camera Accesories</option>
			<option value="cellphones">Cellphones/Tablets</option>
			<option value="accessories">Computer Accessories(headphones, keyboards, mice)</option>
			<option value="components">Computer Components</option>
			<option value="computers">Desktops/Laptops</option>
			<option value="gaming">Gaming Devices</option>
			<option value="streaming">Streaming Devices</option>
			<option value="tv">Televisions </option>
			<option value="wearables">Wearable Technology </option>
		</select>
		<br>
		<textarea name="details" placeholder="Important details"></textarea>
		<br>
		<input type="text" name="link" placeholder="Paste the link to the item here">
		<br>
		<button type="submit" value="Submit">Submit</button>
</form>
<?php
} else {
?>
    <h1>Oops, you need to be logged in to be able to submit a deal.</h1>
	<h1><div class="2nd">Click <a href="login.php" class="loginlink">here<a/> to log in.</div></h1>
<?php
}
?>

<style>
.loginlink {
	text-decoration:none;
	color: blue;
	font-style: italic;
}

</style>

<?php include "footer.php"; ?>