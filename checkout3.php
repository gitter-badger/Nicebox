<?php
  //Set values for page
  $page_title = "Contact | Nicebox";

	include 'includes/header.php';
?>

	<div class="container padding-bottom-x3">
		<div class="centerColumn">
      <h1 class="centerText">$3 Small Box</h1>
			<p class="centerText biggerText">Thanks for sharing Nicebox with your friends. Fill out the below form for 40% off your $5 box.</p>

    <form name="form" class="form-field" id="form">

      <div class="row">
        <div class="large6">
          <p><label for="email">Email:</label>
            <input class="bigText" type="email" id="email" placeholder="email@nicebox.co" name="email"/></p>
        </div>
        <div class="large6">
          <p><label for="addres">Address:</label>
            <input class="bigText" type="text" id="address" placeholder="00 Street Rd" name="address"/></p>
        </div>
      </div>

      <div class="row">
        <div class="large6">
          <p><label for="city">City:</label>
            <input class="bigText" type="text" id="city" placeholder="Toronto" name="city"/></p>
        </div>
        <div class="large6">
          <p><label for="postal">Postal Code:</label>
            <input class="bigText" type="text" id="postal" placeholder="000 000" name="postal"/></p>
        </div>
      </div>

      <div class="row">
        <div class="large6">
          <p><label for="cc"><i class="fa fa-lock"></i> Credit Card:</label>
            <input class="bigText" type="number" id="cc" placeholder="0000 0000 0000 0000" name="cc"/></p>
        </div>
        <div class="large6">
          <p><label for="cvv"><i class="fa fa-lock"></i> CVV:</label>
            <input class="bigText" type="number" id="cvv" placeholder="000" name="cvv"/></p>
        </div>
      </div>

      <p>
        <a href="checkout10.php" class="nb-button bigButton noUnderline">Upgrade to Medium Box</a>
        <a href="" class="nb-button bigDarkButton darkBlueButton noUnderline">Purchase</a>
      </p>

    </form>

		</div>
	</div>


<?php include 'includes/footer.php'; ?>
