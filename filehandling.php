<?php 
// $file = "file:///Users/komalgarg/Downloads/pdf.pdf";
// $handle = fopen($file,'r');
// $content = fread($handle,filesize($file));
// print_r($content);
// fclose($handle);
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" />
    <input type="submit" name="SubmitButton"/>
</form> 
<?php 
if(isset($_POST['SubmitButton'])){
    $file = $_FILES['fileToUpload']['name'];
    $path = "/Applications/XAMPP/xamppfiles/htdocs/". $file;
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path)) {  
        echo "File uploaded successfully!";  
    } else{  
        echo "Sorry, file not uploaded, please try again!";  
    }  
}
?> 