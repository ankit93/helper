

<?php 
    foreach (glob("images/*.{jpg,png,gif}",GLOB_BRACE) as $image)    {
     echo "<img src='$image' />";
    }
