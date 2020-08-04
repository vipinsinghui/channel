<?php
error_reporting(0); 
if((isset($_POST['name'])&&($_POST['name']!='')) && (isset($_POST['email'])&&($_POST['email']!='')))
{
@extract($_POST);
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$number=$_REQUEST['number'];
$city=$_REQUEST['city'];
$comments=$_REQUEST['comments'];


        if (preg_match("/(http|www|viagra|porn|sex|canada|.com)/i", "$message"))
		{
    		?>
			<script type="text/javascript">
            alert("Sorry! Can't send your request because considered spam");
            document.location.href='<? echo $_SERVER['HTTP_REFERER'];?>';
            </script>
            <?php
		}	
		else 
		{
			
		$message = "
		<html><table  border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style='border:1px solid #666666; border-top:0px; border-left:0px; border-right:0px'>
		<tr bgcolor='#EBEBEB'><td colspan=\"4\"><font size=\"+2\">Enquiry From Digital Edge Inc. </font></tr>
		<tr><td colspan=\"4\">Details are given below:</td></tr>
		<tr><td colspan=\"4\">&nbsp;</td></tr>
		<tr><td valign=\"top\"><strong>Name</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$name</td></tr>
		<tr><td valign=\"top\"><strong>Contact Number</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$number</td></tr>
		<tr><td valign=\"top\"><strong>City</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$city</td></tr>
		<tr><td valign=\"top\"><strong>Email Id</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\" colspan=\"2\">$email</td></tr>
	<tr><td valign=\"top\"><strong>Message</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\" colspan=\"2\">$comments</td></tr>
		</table>
		</html>";

$to="inquiry@sanitizationonrent.com,harish.digiedge@gmail.com";
// $to="harish.digiedge@gmail.com";
$from = "no-reply@sanitizationonrent.com"; 
$subject ="Enquiry From Digital Edge Inc.";
$message = $message;

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From:$from\r\n";
	if(mail("$to", "$subject", "$message", "$headers"))
		{
 header("Location: thankyou.html");
		?>
		<!--<script type="text/javascript">
		alert("Your mail has been sent to our executives.we will get back to you as soon as possible.");
		document.location.href='<? echo $_SERVER['HTTP_REFERER'];?>'; 
		</script>-->
        
        <?php
        }
		
		
		else
		{
	 	?>
		<script type="text/javascript">
		alert("Sorry Your query can't be send.Try later");
		document.location.href='<? echo $_SERVER['HTTP_REFERER'];?>'; 
		</script>
		<?php
		}
	}
}
		
else
{
	?>
		<script type="text/javascript">
		alert("Sorry some Mendatory fiels are Blank Your query can't be send.Try later");
		document.location.href='<? echo $_SERVER['HTTP_REFERER'];?>'; 
		</script>
		<?php
}
?>
