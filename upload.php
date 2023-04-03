<?php
session_start();
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $name=$_SESSION['fhnev'];
    $name = str_replace(' ', '', $name);

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('docx', 'txt', 'pptx', 'pdf');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($filesize<1000000){
                $newFileName=$name."_fordulo1".'.'.$fileActualExt;
                $fileDestination='UPLOADS/'.$newFileName;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "Fájl sikeresen feltöltve";
                
            }
            else{
                echo "A feltöltendő fájl túl nagy";
            }
        }
        else{
            echo "Hiba történt a fájl feltöltésénél";
        }

    }
    else{
        echo "A fájl nem megfelelő kiterjesztésű. A következő típusú állományokat lehet feltölteni: .docx, .txt, .pptx, .pdf";
    }

}
?>