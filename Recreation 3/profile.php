<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require_once('nav.php'); ?>
	<h1>My Website Content</h1>
	<hr>
	<table>
		<tr>
<?php
$img1 = $_FILES['img1']['tmp_name'];
$imgd1 = "../img/company/logoimage.jpg";
move_uploaded_file($img1, $imgd);
$Username = $_POST['User-name'];
$company = $_POST['comp-name'];
$head = $_POST['heading'];
$head2 = $_POST['heading2'];
$head3 = $_POST['heading3'];
$head4 = $_POST['heading4'];
$sh = $_POST['sub-heading'];
$img2 = $_FILES['img2']['tmp_name'];
$imgd2 = "../img/company/heroimage.jpg";
move_uploaded_file($img2, $imgd);
$img3 = $_FILES['img3']['tmp_name'];
$imgd3 = "../img/company/sideimage.jpg";
move_uploaded_file($img3, $imgd);
$img4 = $_FILES['img4']['tmp_name'];
$imgd4 = "../img/company/image4.jpg";
move_uploaded_file($img4, $imgd);
$img5 = $_FILES['img5']['tmp_name'];
$imgd5 = "../img/company/image5.jpg";
move_uploaded_file($img5, $imgd);
$img6 = $_FILES['img6']['tmp_name'];
$imgd6 = "../img/company/image6.jpg";
move_uploaded_file($img6, $imgd);
$img7 = $_FILES['img7']['tmp_name'];
$imgd7 = "../img/company/image7.jpg";
move_uploaded_file($img7, $imgd);
$img8 = $_FILES['img8']['tmp_name'];
$imgd8 = "../img/company/image8.jpg";
move_uploaded_file($img8, $imgd);
$img9 = $_FILES['img9']['tmp_name'];
$imgd9 = "../img/company/image9.jpg";
move_uploaded_file($img9, $imgd);
$img10 = $_FILES['img10']['tmp_name'];
$imgd10 = "../img/company/image10.jpg";
move_uploaded_file($img10, $imgd);
$img11 = $_FILES['img10']['tmp_name'];
$imgd11 = "../img/company/image11.jpg";
move_uploaded_file($img11, $imgd);
$it = $_POST['img-text'];
$it2 = $_POST['img-text2'];
$it3 = $_POST['img-text3'];
$it4 = $_POST['img-text4'];
$it5 = $_POST['img-text5'];
$it6 = $_POST['img-text6'];
$it7 = $_POST['img-text7'];
$it8 = $_POST['img-text8'];
$it9 = $_POST['img-text9'];
$it10 = $_POST['img-text10'];
$it11 = $_POST['img-text11'];
$it12 = $_POST['img-text12'];
$it13 = $_POST['img-text13'];
$it14 = $_POST['img-text14'];
$it15 = $_POST['img-text15'];
$it16 = $_POST['img-text16'];
$st = $_POST['sub-text'];
$st2 = $_POST['sub-text2'];
$button = $_POST['button'];
$button2 = $_POST['button2'];
$button3 = $_POST['button3'];
$des = $_POST['description'];
$ct = $_POST['contact-title'];
$cd = $_POST['contact-des'];
$cp = $_POST['contact-phone'];
$ce = $_POST['contact-email'];
$cb = $_POST['contact-button'];
$fb = $_POST ['facebook'];
$ig = $_POST ['instagram'];
$tw = $_POST ['twitter'];
$yt = $_POST ['youtube'];
?>
		
<?php
error_reporting(-1);
echo $img1;
echo $img2;
echo $img3;
echo $img4;
echo $img5;
echo $img6;
echo $img7;
echo $img8;
echo $img9;
echo $img10;
echo $img11;
echo '<tr><td><img src="' . $imgd1 . '" alt="error"></td></tr>';
echo '<tr><td>Username:</td><td>' . $Username . '</td></tr>';
echo '<tr><td>Company Name:</td><td>' . $company . '</td></tr>';
echo '<tr><td>Main Text:</td><td>' . $head . '</td></tr>';
echo '<tr><td>Description Paragraph:</td><td>' . $des . '</td></tr>';
echo '<tr><td>Button Name:</td><td>' . $button . '</td></tr>';
echo '<tr><td>Button Name:</td><td>' . $button2 . '</td></tr>';
echo '<tr><td>Second Title:</td><td>' . $head2 . '</td></tr>';
echo '<tr><td>Sub Text:</td><td>' . $st . '</td></tr>';
echo '<tr><td><img src="' . $imgd2 . '" alt="error"></td></tr>';
echo '<tr><td>Button Name:</td><td>' . $button3 . '</td></tr>';
echo '<tr><td>Third Title:</td><td>' . $head3 . '</td></tr>';
echo '<tr><td>Sub Heading:</td><td>'. $sh . '</td></tr>';
echo '<tr><td>Description Paragraph:</td><td>'. $st2 . '</td></tr>';
echo '<tr><td><img src="' . $imgd3 . '" alt="error"></td></tr>';
echo '<tr><td>Another Main Title:</td><td>'. $head4 . '</td></tr>';
echo '<tr><td><img src="' . $imgd4 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it2 . '</td></tr>';
echo '<tr><td><img src="' . $imgd5 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it3 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it4 . '</td></tr>';
echo '<tr><td><img src="' . $imgd6 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it5 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it6 . '</td></tr>';
echo '<tr><td><img src="' . $imgd7 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it7 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it8 . '</td></tr>';
echo '<tr><td><img src="' . $imgd8 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it9 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it10 . '</td></tr>';
echo '<tr><td><img src="' . $imgd9 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it11 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it12 . '</td></tr>';
echo '<tr><td><img src="' . $imgd10 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it13 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it14 . '</td></tr>';
echo '<tr><td><img src="' . $imgd11 . '" alt="error"></td></tr>';
echo '<tr><td>Title In Image:</td><td>' . $it15 . '</td></tr>';
echo '<tr><td>Text In Image:</td><td>' . $it16 . '</td></tr>';
echo '<tr><td>Contact Title:</td><td>' . $ct . '</td></tr>';
echo '<tr><td>Contact Description:</td><td>' . $cd . '</td></tr>';
echo '<tr><td>Phone Number:</td><td>' . $cp . '</td></tr>';
echo '<tr><td>Contact Email:</td><td>' . $ce . '</td></tr>';
echo '<tr><td>Contact Us Button:</td><td>' . $cb . '</td></tr>';
echo '<tr><td>Facebook Link:</td><td>' . $fb . '</td></tr>';
echo '<tr><td>Instagram Link:</td><td>' . $tw . '</td></tr>';
echo '<tr><td>Twitter Link:</td><td>' . $ig . '</td></tr>';
echo '<tr><td>Youtube Link:</td><td>' . $yt . '</td></tr>';
?>
</tr>
	</table>
	<hr>
	<?php require_once('footer.php'); ?>
	<?php 
  $info = array(

  				img1 => $imgd1,
  				Username => $Username,
  				comp-name => $Company,
				heading => $head,
				heading2 => $head2,
				heading3 => $head3,
				heading4 => $head4,
				sub-heading => $sh,
				img2 => $imgd2,
				img3 => $imgd3,
				img4 => $imgd4,
				img5 => $imgd5,
				img6 => $imgd6,
				img7 => $imgd7,
				img8 => $imgd8,
				img9 => $imgd9,
				img10 => $imgd10,
				img11 => $imgd11,
				img-text => $it,
				img-text2 => $it2,
				img-text3 => $it3,
				img-text4 => $it4,
				img-text5 => $it5,
				img-text6 => $it6,
				img-text7 => $it7,
				img-text8 => $it8,
				img-text9 => $it9,
				img-text10 => $it10,
				img-text11 => $it11,
				img-text12 => $it12,
				img-text13 => $it13,
				img-text14 => $it14,
				img-text15 => $it15,
				img-text16 => $it16,
				sub-text => $st,
				sub-text2 => $st2,
				button => $button,
				button2 => $button2,
				button3 => $button3,
				description => $des,
				contact-title => $ct, 
				contact-des => $cd,
				contact-phone => $cp,
				contact-email => $ce,
				contact-button => $cb,
				facebook => $fb,
				instagram => $ig,
				twitter => $tw,
				youtube => $yt,
 );
print_r($info);
echo json_encode($info);
// $save = fopen('profile.json', mode)pen
  // fwrite($save, $jasonformat)
  // fclose($save)

?>
</body>
</html>