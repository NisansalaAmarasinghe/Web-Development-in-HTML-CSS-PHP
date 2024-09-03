<!DOCTYPE html>
<html>
<head><title>FIFTH</title></head>
<link rel="stylesheet" href="Campus.css" type="text/css">
<style type="text/css">
body{background-image:url('bgimg 15.jpg')
  }
#one{
      background-color:#FFFFFF;
      height:42px;
      border-top-style:solid;
      border-bottom-style:solid;
      border-width:thick;
      border-color:#00009C;
}

</style>
</head>
<body bgcolor="#9370DB">

<div>

<p class="cover"> <img class="cover" src="logo.jpg" alt="LOGO" width="200" height="130">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ins>HORIZON CAMPUS</ins>
</p></div>

<hr color="#00009C" size=5>
<p id="one">
<br>
<a href="Index_Page.php" class="button">Home</a>
</p>

<center>
<form class="form1">

<center><p><font size="25px"> REGISTRATION FORM</font></p></center>
<label><font size="4px">
First Name:&nbsp&nbsp
<input type="text" name="firstname" placeholder="Sumudu" required/>
</label>

<br/><br/>
<label>
Last Name:&nbsp&nbsp
<input type="text" name="lastname" placeholder="Nisansala" required/>
</label>

<br/><br/>
<label>
Full Name:&nbsp&nbsp
<input type="text" name="fullname" placeholder="M.T.S.N.Amarasingha" required/>
</label>

<br/><br/>
<label>
Password:&nbsp&nbsp&nbsp&nbsp
<input type="password" name="password" placeholder="Password" required/>
</label>


<br/><br/>
<label>
Date of Birth:&nbsp&nbsp
<input type="date" name="dob"/>
</label>

<p>National ID no</p>
<input type="text" name="nic" required/>
<br/><br/>

<p>Gender</p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="gender" value="male"/>Male
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="gender" value="female"/>Female
<br/><br/>

<label>
E-mail address:&nbsp&nbsp
<input type="text" name="email" placeholder="E-mail address" required/>
</label>
<br/><br/>

<label>
O/L year:&nbsp&nbsp
<input type="number" size="4" name="year" min="2018" max="2023" value="2020">
</label>

<br/><br/>
<label>
A/L year:&nbsp&nbsp
<input type="number" size="4" name="year" min="2018" max="2023" value="2020">
</label>

<p>Passed the A/L</p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="pass" value="pass"/>Pass
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="Fail" value="fail"/>Fail
<br/><br/>

Degree programme you like :-
<br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       Weekdays <input type="checkbox" name="weekdays" value="weekdays">
<br/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       Weekends <input type="checkbox" name="weekend" value="weekend">
<br/>

<p>Select a degree you liked :</p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="Degree">
   <option value="Science">Science</option>
   <option value="IT">IT</option>
   <option value="Education">Education</option>
   <option value="Management">Management</option>
</select>
<br/>

<p>Upload your CV</p>
<input type="file" name="pic" accept="file/*"/><br/>

<p>Upload your photo</p>
<input type="file" name="pic" accept="image/*"/><br/><br/>


<p> Please provide your suggestion in the text box below: </p>
<textarea row="8" cols="100">
</textarea>
<br/>

<p>Select your favourite color&nbsp&nbsp&nbsp<input type="color"></p>
<p>On a scale of 1 to 10. Rank our website&nbsp&nbsp<input type="range"></p>

<br/><br/>
<center>
<input type="reset" value="reset form"/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="submit" value="submit form"/>
</center>


</form>
</center>

<footer>
<center><strong>
copyright &copy; IT2020124 M.T.S.N.Amarasingha.&nbsp; All Rights Reserved.
</stong></center>
</footer>


</body>
</html>

oninvalid="this.setCustomValidity('Please give a valid address')" onchange="try(setCustomValidity(' ')}catch (e) ()"

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale">
<title>Registration</title>
<link rel="stylesheet" href="Campus.css" type="text/css">
