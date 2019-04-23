<!-----------------------php------------------------------>
<?php
	$pattern="";
	$text="";
	$repText="";
	$replacedText="";
	$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	$pattern=$_POST["pattern"];
    
	$text=$_POST["text"];
    
	$replaceText=$_POST["replaceText"];
    
	$replacedText=preg_replace($pattern, $repText, $text);
        if(preg_match($pattern, $text)) {
            $match="Match!";
        } else {
            $match="Does not match!";
        }
    }
?>
<!----------------------------main part---------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $repText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>