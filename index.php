<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSV Reader</title>
</head>

<body>
<?php
if (($handle = fopen("file.csv", "r")) !== FALSE) {
	
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		
        for ($c=0; $c < count($data); $c++) {
            echo $data[$c].' ';
        }
		
		 echo "<br />\n";
		
    }
    fclose($handle);
}
?>
</body>
</html>