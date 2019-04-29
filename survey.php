<?php include 'inc/surveyheader.php';?>

	<section class="container">
	<form method="post" action="form-processor.php">
	<fieldset>
		<legend>Personal Information</legend>
		<label for="firstname">First Name:</label><br>
  		<input type="text" name="firstname" id="firstname" placeholder="First Name">
  		<br>
  		
  		<label for="lastname">Last Name:</label><br>
  		<input type="text" name="lastname" id="lastname" placeholder="Last Name">
  		<br>
  		
  		<label for="email">Email:</label><br>
  		<input type="email" name="email" id="email" placeholder="Email"><br>

  		<label for="city">City:</label><br>
  		<input type="text" name="city" id="city" placeholder="City"><br>

  		<label for="state">State:</label><br>
  		<input type="text" name="state" id="state" placeholder="State"><br>

	</fieldset><br><br>

	<fieldset>
		<legend>Survey</legend>
    <div class="container3">
      <div><img class="pic3" src="images/gotbackground.jpeg" align="house greyjoy"></div>
      <div><img class="pic3" src="images/loginpic.jpg" alt="Login Picture"></div>
      <div><img class="pic3" src="images/registerpic.jpg" alt="Register Picture"></div>
      <div> 
			<h2>What is your favorite house from Game of Thrones?</h2>
  			<input type="radio" name="favorite" id="stark"><label for="stark">House Stark</label><br>

  			<input type="radio" name="favorite" id="targaryen"><label for="targaryen">House Targaryen</label><br>

  			<input type="radio" name="favorite" id="lannister"><label for="lannister">House Lannister</label><br>

  			<input type="radio" name="favorite" id="greyjoy"><label for="greyjoy">House Greyjoy</label><br>

  			<input type="radio" name="favorite" id="other"><label for="other">Other</label>
      </div>
      
      <div>  
  			<h2>Who are your top 5 favorite Game of Thrones characters?</h2>

  			<input type="checkbox" name="ned" id="ned">
        <label for="ned">Ned Stark</label><br>
  	
  			<input type="checkbox" name="sansa" id="sansa">
        <label for="sansa">Sansa Stark</label><br>
  			
         
  			<input type="checkbox" name="arya" id="arya">
  			 <label for="arya">Arya Stark</label><br>

          
  			<input type="checkbox" name="bran" id="bran">
        <label for="bran">Bran Stark</label><br>
  			
    		<input type="checkbox" name="daenerys" id="daenerys">
        <label for="daenerys">Daenerys Targaryen</label><br>
  	
  			<input type="checkbox" name="rhaegar" id="rhaegar">
        <label for="rhaegar">Rhaegar Targaryen</label><br>
  			
         
  			<input type="checkbox" name="viserys" id="viserys">
  			 <label for="viserys">Viserys Targaryen</label><br>

          
  			<input type="checkbox" name="aegon" id="aegon">
        <label for="aegon">Aegon Targaryen (Jon Snow)</label><br>


          	<input type="checkbox" name="tywin" id="tywin">
        <label for="tywin">Tywin Lannister</label><br>
  	
  			<input type="checkbox" name="cersei" id="cersei">
        <label for="cersei">Cersei Lannister</label><br>
  			
         
  			<input type="checkbox" name="jaime" id="jaime">
  			 <label for="jaime">Jaime Lannister</label><br>

          
  			<input type="checkbox" name="tyrion" id="tyrion">
        <label for="tyrion">Tyrion Lannister</label><br>

      			<input type="checkbox" name="theon" id="theon">
        <label for="theon">Theon Greyjoy</label><br>
  	
  			<input type="checkbox" name="euron" id="euron">
        <label for="euron">Euron Greyjoy</label><br>
  			
         
  			<input type="checkbox" name="yara" id="yara">
  			 <label for="yara">Yara Greyjoy</label><br>

          
  			<input type="checkbox" name="balon" id="balon">
        <label for="balon">Balon Greyjoy</label><br>
      </div>

      <div>
        <h2>Who are your 5 least favorite Game of Thrones characters? </h2>

  			<input type="checkbox" name="ned" id="ned">
        <label for="ned">Ned Stark</label><br>
  	
  			<input type="checkbox" name="sansa" id="sansa">
        <label for="sansa">Sansa Stark</label><br>
  			
         
  			<input type="checkbox" name="arya" id="arya">
  			 <label for="arya">Arya Stark</label><br>

          
  			<input type="checkbox" name="bran" id="bran">
        <label for="bran">Bran Stark</label><br>
  			
    		<input type="checkbox" name="daenerys" id="daenerys">
        <label for="daenerys">Daenerys Targaryen</label><br>
  	
  			<input type="checkbox" name="rhaegar" id="rhaegar">
        <label for="rhaegar">Rhaegar Targaryen</label><br>
  			
         
  			<input type="checkbox" name="viserys" id="viserys">
  			 <label for="viserys">Viserys Targaryen</label><br>

          
  			<input type="checkbox" name="aegon" id="aegon">
        <label for="aegon">Aegon Targaryen (Jon Snow)</label><br>


          	<input type="checkbox" name="tywin" id="tywin">
        <label for="tywin">Tywin Lannister</label><br>
  	
  			<input type="checkbox" name="cersei" id="cersei">
        <label for="cersei">Cersei Lannister</label><br>
  			
         
  			<input type="checkbox" name="jaime" id="jaime">
  			 <label for="jaime">Jaime Lannister</label><br>

          
  			<input type="checkbox" name="tyrion" id="tyrion">
        <label for="tyrion">Tyrion Lannister</label><br>

      			<input type="checkbox" name="theon" id="theon">
        <label for="theon">Theon Greyjoy</label><br>
  	
  			<input type="checkbox" name="euron" id="euron">
        <label for="euron">Euron Greyjoy</label><br>
  			
         
  			<input type="checkbox" name="yara" id="yara">
  			 <label for="yara">Yara Greyjoy</label><br>

          
  			<input type="checkbox" name="balon" id="balon">
        <label for="balon">Balon Greyjoy</label><br>
      </div>
	</fieldset><br><br>

	<label for="moment">Favorite Game of Throne Moment:</label><br>
  		<textarea name="moment" id="moment" placeholder="Favorite Game of Thrones Moment"></textarea><br><br>

  		<input type="submit" value="Submit Now">

</form>
</section>

<?php include 'inc/footer.php';?>

</body>
</html>