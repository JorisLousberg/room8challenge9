<?php 

$name2= $_FILES['LETTER']['name']; //name + file extention(.jpg, .png...)
$tmp_name= $_FILES['LETTER']['tmp_name']; //file var + tmp_name
$position= strpos($name2, ".");
$fileextension= substr($name2, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name2)) {
    $path2= '../db_docs/nl/Motivationletter/'; //the path given is where the images will be uploaded into that location
    if (empty($name2))
        { echo "Please choose a file"; } //if no image is uploaded it will display this
    else if (!empty($name2)){
         if (($fileextension !== "pdf") && //checks if the file extention is matches the given ones
            ($fileextension !== "pdf") && 
            ($fileextension !== "pdf") && 
            ($fileextension !== "pdf"))
        { echo "The file extension must be .pdf, or .bmp in order to be uploaded"; }//prints out the file isnt the right type
    else if (($fileextension == "pdf") || ($fileextension == "pdf") || ($fileextension == "pdf") || ($fileextension == "pdf"))
       { if (move_uploaded_file($tmp_name, $path2.$name2)) {echo 'Uploaded!'. $name2; }}}} //it uploads the image and gives a message confirming it did
?>
 