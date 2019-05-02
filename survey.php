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

	</fieldset><br><br>

	<fieldset>
		<legend>Survey</legend>
    <div class="container3">
      <div><img class="pic3" src="images/gotbackground.jpeg" align="house greyjoy"></div>
      <div><img class="pic3" src="images/loginpic.jpg" alt="Login Picture"></div>
      <div><img class="pic3" src="images/registerpic.jpg" alt="Register Picture"></div>
      <div> 
			<h2>What is your favorite house from Game of Thrones?</h2>
  			<input type="radio" name="fav_house" id="fav_house" value="stark"><label for="stark">House Stark</label><br>

  			<input type="radio" name="fav_house" id="fav_house" value="targaryen"><label for="targaryen">House Targaryen</label><br>

  			<input type="radio" name="fav_house" id="fav_house" value="lannister"><label for="lannister">House Lannister</label><br>

  			<input type="radio" name="fav_house" id="fav_house" value="greyjoy"><label for="greyjoy">House Greyjoy</label><br>

  			<input type="radio" name="fav_house" id="fav_house" value="other"><label for="other">Other</label>
      </div>
      
      <div>  
  			<h2>Who is your favorite Game of Thrones characters?</h2>

  			<input type="radio" name="fav_character" id="fav_character" value="ned">
        <label for="ned">Ned Stark</label><br>
  	
  			<input type="radio" name="fav_character" id="fav_character" value="sansa">
        <label for="sansa">Sansa Stark</label><br>
  			
         
  			<input type="radio" name="fav_character" id="fav_character" value="arya">
  			 <label for="arya">Arya Stark</label><br>

          
  			<input type="radio" name="fav_character" id="fav_character" value="bran">
        <label for="bran">Bran Stark</label><br>
  			
    		<input type="radio" name="fav_character" id="fav_character" value="daenerys">
        <label for="daenerys">Daenerys Targaryen</label><br>
  	
  			<input type="radio" name="fav_character" id="fav_character" value="rhaegar">
        <label for="rhaegar">Rhaegar Targaryen</label><br>
  			
         
  			<input type="radio" name="fav_character" id="fav_character" value="viserys">
  			 <label for="viserys">Viserys Targaryen</label><br>

          
  			<input type="radio" name="fav_character" id="fav_character" value="aegon">
        <label for="aegon">Aegon Targaryen (Jon Snow)</label><br>


          	<input type="radio" name="fav_character" id="fav_character" value="tywin">
        <label for="tywin">Tywin Lannister</label><br>
  	
  			<input type="radio" name="fav_character" id="fav_character" value="cersei">
        <label for="cersei">Cersei Lannister</label><br>
  			
         
  			<input type="radio" name="fav_character" id="fav_character" value="jaime">
  			 <label for="jaime">Jaime Lannister</label><br>

          
  			<input type="radio" name="fav_character" id="fav_character" value="tyrion">
        <label for="tyrion">Tyrion Lannister</label><br>

      			<input type="radio" name="fav_character" id="fav_character" value="theon">
        <label for="theon">Theon Greyjoy</label><br>
  	
  			<input type="radio" name="fav_character" id="fav_character" value="euron">
        <label for="euron">Euron Greyjoy</label><br>
  			
         
  			<input type="radio" name="fav_character" id="fav_character" value="yara">
  			 <label for="yara">Yara Greyjoy</label><br>

          
  			<input type="radio" name="fav_character" id="fav_character" value="balon">
        <label for="balon">Balon Greyjoy</label><br>
      </div>

      <div>
        <h2>Who is your least favorite Game of Thrones characters? </h2>

  			<input type="radio" name="leastfav_character" id="leastfav_character" value="ned">
        <label for="ned">Ned Stark</label><br>
  	
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="sansa">
        <label for="sansa">Sansa Stark</label><br>
  			
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="arya">
  			 <label for="arya">Arya Stark</label><br>

  			<input type="radio" name="leastfav_character" id="leastfav_character" value="bran">
        <label for="bran">Bran Stark</label><br>
  			
    		<input type="radio" name="leastfav_character" id="leastfav_character" value="daenerys">
        <label for="daenerys">Daenerys Targaryen</label><br>
  	
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="rhaegar">
        <label for="rhaegar">Rhaegar Targaryen</label><br>
  			
         
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="viserys">
  			 <label for="viserys">Viserys Targaryen</label><br>

          
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="aegon">
        <label for="aegon">Aegon Targaryen (Jon Snow)</label><br>

        <input type="radio" name="leastfav_character" id="leastfav_character" value="tywin">
        <label for="tywin">Tywin Lannister</label><br>
  	
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="cersei">
        <label for="cersei">Cersei Lannister</label><br>
  			
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="jaime">
  			 <label for="jaime">Jaime Lannister</label><br>
 
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="tyrion">
        <label for="tyrion">Tyrion Lannister</label><br>

      	<input type="radio" name="leastfav_character" id="leastfav_character" value="theon">
        <label for="theon">Theon Greyjoy</label><br>
  	
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="euron">
        <label for="euron">Euron Greyjoy</label><br>
  			    
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="yara">
  			 <label for="yara">Yara Greyjoy</label><br>
     
  			<input type="radio" name="leastfav_character" id="leastfav_character" value="balon">
        <label for="balon">Balon Greyjoy</label><br>
      </div>
	</fieldset><br><br>

	<label for="moment">Favorite Game of Throne Moment:</label><br>
  		<textarea name="fav_moment" id="fav_moment" placeholder="Favorite Game of Thrones Moment"></textarea><br><br>

  		<input type="submit" value="Submit Now">

</form>
</section>

<?php include 'inc/footer.php';?>

</body>
</html>