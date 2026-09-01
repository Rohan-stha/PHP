<?php
// फाइल अपलोड प्रशोधन गर्ने ब्याकइन्ड लजिक
$message = ""; // सन्देश वा त्रुटिहरू राख्नका लागि खाली भ्यारिएबल

if (isset($_FILES['fileToUpload'])) {
    $errors = array();
    
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp  = $_FILES['fileToUpload']['tmp_name'];    
    
    // १. एक्स्टेन्सन निकाल्ने र क्र्यास रोक्ने सही तरिका
    $file_parts = explode('.', $file_name);
    $file_ext   = strtolower(end($file_parts));

    $extensions = array("jpeg", "jpg", "png", "pdf");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "This extension file is not allowed. Please choose a JPEG, PNG, or PDF file.";
    }
    
    // २. २ MB साइज लिमिट चेक
    if ($file_size > 2097152) {
        $errors[] = 'File size must be less than 2 MB';
    }

    // ३. यदि कुनै त्रुटि छैन भने अपलोड गर्ने
    if (empty($errors) == true) {
        // सुरक्षाका लागि अपलोड फोल्डर छ कि छैन चेक गर्ने र नभए आफैँ बनाउने
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        // फाइलको नाम सुरक्षित र युनिक बनाउने
        $secure_file_name = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", $file_name);
        
        if (move_uploaded_file($file_tmp, "uploads/" . $secure_file_name)) {
            $message = "<p class='success'>Success! File uploaded safely as: <b>" . $secure_file_name . "</b></p>";
        } else {
            $message = "<p class='error'>Error: Could not upload the file. Check folder permissions.</p>";
        }
    } else {
        // सबै त्रुटिहरूलाई एउटै म्यासेजमा जोड्ने
        foreach ($errors as $error) {
            $message .= "<p class='error'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f4f4f4;
        }
        .upload-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        input[type="file"] {
            display: block;
            margin: 20px 0;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .note {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
        }
        
        .success { color: green; font-weight: bold; margin-top: 15px; }
        .error { color: red; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload Document</h2>
    
    <!-- 
      action मा हामीले खाली छोड्न सक्छौँ वा खाली राख्दा यसले आफैँलाई (यही .php फाइललाई) बुझाउँछ।
    -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileSelect">Select File to Upload:</label>
        <input type="file" name="fileToUpload" id="fileSelect" required>
        <input type="submit" value="Upload File">
    </form>
    
    <!-- यहाँ अपलोडको नतिजा वा गल्तीहरू देखिनेछन् -->
    <?php echo $message; ?>
    
    <div class="note">
        * Allowed formats: JPG, JPEG, PNG, PDF.<br>
        * Maximum file size: 2 MB.
    </div>
</div>

</body>
</html>
