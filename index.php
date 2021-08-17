<html>
    <body>
        <form name="form" method="post">
        <textarea name="textarea"></textarea><br/>
         
            <input type="submit" id="search-submit" value="submit" />
        </form>
    </body>
</html>
<?php
    if(isset($_POST['textarea'])) { //only do file operations when appropriate
        $a = $_POST['textarea'];
        $myFile = "t.txt";
        $fh = fopen($myFile, 'w') or die("can't open file");
        fwrite($fh, $a);
        fclose($fh);
    }
?>