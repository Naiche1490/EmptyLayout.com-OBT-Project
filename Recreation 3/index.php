
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
*{
	font-family: sans-serif;
	color:#555;
	box-sizing: border-box;
}

label, input, p{
	font-size:16px;
}

nav{
	padding:10px;
	background: #555;
	
}

nav h1{
	display: inline-block;
	color: white;
}

nav ul{
	display: inline-block;

}

nav li{
	list-style: none;
	display: inline-block;
}

nav a{
	display:block;
	background:#777;
	padding:10px;
	border-radius: 5px;
	text-decoration: none;
	color:#fff;
}

table{
	border: 1px #000 solid;
	padding:5px;
	margin:0 auto;
	width:90%;
}

table td{
	border: 1px #ddd solid;
	padding:10px;

}

nav a:hover{
	background:#333;
}

footer {
	text-align: center;
}

footer a{
	text-decoration: none;
	color:#000;
	padding:10px;
}
	
</style>
<head>
<link rel="stylesheet" href="style.css">
 <title>Clean Lab Empty layout User Content</title>
<h1>Website user input form</h1>
<nav>
	<h1>Insert Empty Layout Content</h1>
	<ul>
		<li>
			<a href="../index.html">HOME</a>
		</li>
		<li>
			<a href="../LOGIN/login.php">LOGIN</a>
		</li>
		<li>
			<a href="../LOGIN/register.php">Register New User</a>
		</li>
	</ul>
</nav>
  </head>
  <body>


<form action="up.php" method="post" enctype="multipart/form-data">


<table>

<tr><td>logo Image</td><td><input name="img1" type="file" /></td></tr>

<tr><td>User</td><td><input type="text" name="User-name" /></td></tr>
	
<tr><td>Company name</td><td><input type="text" name="comp-name" /></td></tr>
	
<tr><td>Main Text</td><td><input type="text" name="heading" /></td></tr>
	
<tr><td>Description Paragraph</td><td><input type="text" name="description" /></td></tr>         
	
<tr><td>Button Name</td><td><input type="text" name="button" /></td></tr>
	
<tr><td>Button Name</td><td><input type="text" name="button2" /></td></tr>
	
<tr><td>Second Main Title</td><td><input type="text" name="heading2" /></td></tr>
	
<tr><td>Sub Text</td><td><input type="text" name="sub-text" /></td></tr>
	
<tr><td> Hero Image</td><td><input name="img2" type="file" /></td></tr>
	
<tr><td>Button Name</td><td><input type="text" name="button3" /></td></tr>
	
<tr><td>Third Main Title</td><td><input type="text" name="heading3" /></td></tr>
	
<tr><td>Sub Main Text</td><td><input type="text" name="sub-heading" /></td></tr>
	
<tr><td>Description Paragraph</td><td><input type="text" name="sub-text2" /></td></tr>
	
<tr><td>Image on the side</td><td><input name="img3" type="file" /></td></tr>
	
<tr><td>Another Main Title</td><td><input type="text" name="heading4" /></td></tr>
	
<tr><td>Fourth Image</td><td><input name="img4" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text2" /></td></tr>
	
<tr><td>Fifth Image</td><td><input name="img5" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text3" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text4" /></td></tr>
	
<tr><td>Sixth Image</td><td><input name="img6" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text5" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text6" /></td></tr>
	
<tr><td>Seventh Image</td><td><input name="img7" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text7" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text8" /></td></tr>
	
<tr><td>Eigth Image</td><td><input name="img8" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text9" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text10" /></td></tr>
	
<tr><td>Ninth Image</td><td><input name="img9" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text11" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text12" /></td></tr>
	
<tr><td>Tenth Image</td><td><input name="img10" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text13" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text14" /></td></tr>
	
<tr><td>Eleventh Image</td><td><input name="img11" type="file" /></td></tr>
	
<tr><td>Title-in-image</td><td><input type="text" name="img-text15" /></td></tr>
<tr><td>Text-in-image</td><td><input type="text" name="img-text16" /></td></tr>
	
<tr><td>Contact Title</td><td><input type="text" name="contact-title" /></td></tr>
	
<tr><td>Contact Description</td><td><input type="text" name="contact-des" /></td></tr>
	
<tr><td>Phone Number</td><td><input type="text" name="contact-phone" /></td></tr>
	
<tr><td>Contact Email</td><td><input type="text" name="contact-email" /></td></tr>
	
<tr><td>Contact Us Button</td><td><input type="text" name="contact-button" /></td></tr>
	
<tr><td>Facebook Link</td><td><input type="text" name="facebook" /></td></tr>
    
<tr><td>Instagram Link</td><td><input type="text" name="instagram" /></td></tr>

<tr><td>Twitter Link</td><td><input type="text" name="twitter" /></td></tr>
    
<tr><td>Youtube Link</td><td><input type="text" name="youtube" /></td></tr>
	
<input type="hidden" name="max_size" value="1000000" />
<!-- <tr><td>Image 1</td><td><input name="img1" type="file" /></td></tr>
 -->
</table>
<input type="submit" name="go" value="Submit" />
</form>

</body>
</html>
