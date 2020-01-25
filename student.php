<!DOCTYPE html>
<html>
<head>
  <title>Complaint Management System</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
  <link rel = "stylesheet" href ="Static/CSS/style.css">
  <script src="Static/JS/jscript.js" type="text/javascript"></script>
</head>
<body>
<a href="index.php" style="margin:10px;
    text-decoration:none;
    color: white;
    font-size: 18px;
    display: inline;
    text-align: right;
    position:fixed;
    right:20px;
    top:5px;">&nbsp;Home ->>&nbsp;</a>

<!-- multistep form -->
<form id="msform" action="index.php" method="POST">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>Contact Details</li>
    <li>Complaint</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Complaint Form</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <select name="gender">
      <option value="Male">Male</option>
	    <option value="Female">Female</option>
	    <option value="Other">Other</option>
    </select><br>
    <select name="category">
      <option value="General">General</option>
      <option value="OBC">OBC</option>
      <option value="SC/ST">SC/ST</option>
      <option value="Other">Other</option>
    </select><br>
    <select name="dept">
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="Other">Other</option>
    </select>
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Contacts Details</h2>
    <h3 class="fs-subtitle">Provide valid infomation else your form will be discarded</h3>
    <input type="text" name="enroll" placeholder="Enrollment Number" />
    <input type="email" name="email" placeholder="Email Id" />
    <input type="number" name="mobile" placeholder="Mobile Number" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Complaint</h2>
    <h3 class="fs-subtitle">Enter your complaint in maximum 200 words</h3>
    <input type="text" name="ctype" placeholder="Complaint Type" />
    <textarea name="complaint" placeholder="Complaint"rows="12" ></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit_student" class="submit action-button" value="Submit" />
  </fieldset>
</form>

</body>
</html>