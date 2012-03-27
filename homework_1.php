<html>
<head>
<style type="text/css">
#prime{color:black;}
#nprime{color:blue;}
.negative{color:red;}
</style>
</head>
<body>
<?php
$element = $_GET["number"];
function numberTest(){
global $element;
	if(!is_numeric($element)){
	?>
	<p class="negative">
	<?php
	echo "The parameter is not a number";
	?>
	</p>
	<?php
	}
	else{
		if($element>19999 || $element<0){
		?>
		<p class="negative">
		<?php
		echo "The parameter is not within the range [0,19999]";
		?>
		</p>
		<?php
		}
		else{
			if(isPrime($element)){
			?>
			<p id="prime">
			<?php
			echo "Digit $element is prime";
			?>
			</p>
			<?php
			}
			else{
			?>
			<p id="nprime">
			<?php
			echo "Digit $element is not prime!";
			?>
			</p>
			<?php
			}
		}
	}
}
function isPrime($number)
{
        if ($number < 2) {
                return false;
        }
        for ($i=2; $i<=($number / 2); $i++) {
                if($number % $i == 0) { 
                        return false;
                }
        }
        return true;
}
numberTest();
?>
</body>
</html>