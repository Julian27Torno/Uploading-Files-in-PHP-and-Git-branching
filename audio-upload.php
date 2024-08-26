<?php
if (isset($_FILES['audio_file'])) {
    $fileName = $_FILES['audio_file']['name'];
    $fileTmp = $_FILES['audio_file']['tmp_name'];
    $fileType = $_FILES['audio_file']['type'];

    if (strpos($fileType, 'audio') !== false) {
        $uploadDir = "uploads/";

      
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $filePath = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmp, $filePath)) {
      
            echo "<script type='text/javascript'>
                    window.open('$filePath', '_blank');
                    window.location.href = 'index.php'; 
                  </script>";
            exit;
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please upload a valid audio file.";
    }
} else {
    echo "No file was uploaded.";
}
?>