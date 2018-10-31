<!DOCTYPE html>
<html>
<style>
	form {
		margin:0 auto;
	width:400px;}
	label { float: left; width: 150px; }
	body{ background-color :black;}
	ul { margin:0; padding:10px; background-color: #ff6600;}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	
}	
.button3 {background-color: #f44336;}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#ff6600; ;
   color: white;
   text-align: right;
</style>
<body><br>
<ul>
<a1>Sign Up<font color=  #ffcc00></a1></ul><br><br>
<div class="container">

<form action="/action_page.php" >
  <label for="firstName">First Name:</label>
  <input type="text" name="firstName"   >
  <br><br>
  <label for="lastName">Last Name:</label>
  <input type="text" name="lastName"  >
  <br><br>
  <label for="screenName">Screen Name:</label>
  <input type="text" name="screenName">
  <br><br>
 <label for="dateOfBirth">Date Of Birth:</label>
  <select name="mStr">
	<option value="0">January</option>
	<option value="1">February</option>
	<option value="2">March</option>
	<option value="3">April</option>
	<option value="4">May</option>
	<option value="5">June</option>
	<option value="6">July</option>
	<option value="7">August</option>
	<option value="8">September</option>
	<option value="9">October</option>
	<option value="10">November</option>
	<option value="11">December</option>
</select>
<select name="hour">
    <?php for ($i = 1; $i <= 24; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
</select>
<select name="hour">
    <?php for ($i = 1950; $i <= 2018; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php endfor; ?>
</select>
  <br><br>
  <label for="gender">Gender:</label>
  <input type="checkbox" name="male" > Male
  <input type="checkbox" name="female"  checked> Female<br><br>

  <label for="country">Country:</label>
<select name="Country">
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="India">India</option>
    <option value="Pakistan">Pakistan</option>
    <option value="USA">USA</option>
	<option value="England">England</option>
	<option value="Russia">Russia</option>
	
	
  </select>
  <br><br>
  <label for="email">Email:</label>
  <input type="text" name="email" >
 <br><br>
  <label for="phone">Phone:</label>
  <input type="text" name="phone" >
  <br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" >
  <br>
	<br>  
  <label for="confirmPassword">Confirm Password:</label>
  <input type="password" name="confirmPassword" >
  <br>
  <br>
 
  <input type="checkbox" name="statement" > I agree to the term of use <br><br>
  
  
 
 
</form> 
</div>
<div class="footer">

 <button class="button">Submit</button>
 <button class="button button3">Cancel</button>

 </div>

</body>
</html>
