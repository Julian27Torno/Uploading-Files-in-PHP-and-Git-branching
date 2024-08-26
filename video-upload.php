<?php
if (isset($_FILES['video_file'])) {
    $fileName = $_FILES['video_file']['name'];
    $fileTmp = $_FILES['video_file']['tmp_name'];
    $fileType = $_FILES['video_file']['type'];

    
    if (strpos($fileType, 'video') !== false) {
        $uploadDir = "uploads/";

       
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $filePath = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmp, $filePath)) {
            echo "<script type='text/javascript'>
                    window.open('$filePath', '_blank');
                    window.location.href = 'index.php'; // Redirect back to the form page or wherever needed
                  </script>";
            exit;
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please upload a valid video file.";
    }
} else {
    echo "No file was uploaded.";
}
?>
