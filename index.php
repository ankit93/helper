



<?php
foreach (glob("php/*.php") as $filename) {
	
    echo "  <a href='$filename'>$filename</a><br /> ";
}

echo "css <br/>";
foreach (glob("css/*.*") as $filename) {
	
    echo "  <a href='$filename'>$filename</a><br /> ";
}

echo "js <br/>";

foreach (glob("/php/*.{html,htm}") as $filename) {
	
    echo "  <a href='php/$filename.php'>$filename</a> <br />";
}
?>
