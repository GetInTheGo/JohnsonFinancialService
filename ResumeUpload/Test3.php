<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
//first copy the file to the magic place where we can convert it to a pdf on the fly
copy("/Applications/MAMP/htdocs/JohnsonFinancialService/test.docx", "/Applications/MAMP/htdocs/JohnsonFinancialService/LibreOffice/cde-package/cde-root/home/robert/Desktop/test.docx");
//change to that directory
chdir('/Applications/MAMP/htdocs/JohnsonFinancialService/LibreOffice/cde-package/cde-root/home/robert');
//the magic command that does the conversion
//$myCommand = "/home/anpac/public_html/LibreOffice/cde-package/libreoffice.cde --headless -convert-to pdf /home/anpac/public_html/LibreOffice/cde-package/cde-root/home/robert/Desktop/test.docx -outdir /home/anpac/public_html/LibreOffice/cde-package/cde-root/home/robert/Desktop/";
$myCommand = "./libreoffice.cde --headless -convert-to pdf Desktop/test.docx -outdir Desktop/";
exec ($myCommand,$output);
var_dump($output);
//copy the file back
//copy("Desktop/".str_replace(".docx", ".pdf", $_POST["filename"]), "../../../../../documents/".str_replace(".docx", ".pdf", $_POST["filename"]));
//delete all the files out of the magic place where we can convert it to a pdf on the fly
//$files1 = scandir('Desktop');
//my files that I generated all happened to start with a number.
//$pattern = '/^[0-9]/';
//foreach ($files1 as $value)
//{
//preg_match($pattern, $value, $matches);
//if(count($matches) > 0)
//{
//unlink("Desktop/".$value);
//}
//}
//changing the header to the location of the file makes it work well on androids
//header( 'Location: '.str_replace(".docx", ".pdf", $_POST["filename"]) );
?>