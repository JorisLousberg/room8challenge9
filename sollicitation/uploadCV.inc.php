<?php 

$name1= $_FILES['CV']['name']; //name + file extention(.jpg, .png...)
$tmp_name= $_FILES['CV']['tmp_name']; //file var + tmp_name
$position= strpos($name1, ".");
$fileextension= substr($name1, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name1)) {
    $path= '../db_docs/CV/'; //the path given is where the images will be uploaded into that location
    if (empty($name1))
        { echo "Please choose a file"; } //if no image is uploaded it will display this
    else if (!empty($name1)){
         if (($fileextension !== "pdf") && //checks if the file extention is matches the given ones
            ($fileextension !== "pdf") && 
            ($fileextension !== "pdf") && 
            ($fileextension !== "pdf"))
        { echo "The file extension must be .pdf, or .bmp in order to be uploaded"; }//prints out the file isnt the right type
    else if (($fileextension == "pdf") || ($fileextension == "pdf") || ($fileextension == "pdf") || ($fileextension == "pdf"))
       { if (move_uploaded_file($tmp_name, $path.$name1)) {echo 'Uploaded!'. $name1; }}}} //it uploads the image and gives a message confirming it did
?>
