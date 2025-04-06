<?php
// Define the uploads directory
$uploadsDir = 'uploads/';

// Create the directory if it doesn't exist
if (!file_exists($uploadsDir)) {
    mkdir($uploadsDir, 0755, true);
}

// Get the page name from the form
$page = isset($_POST['page']) ? $_POST['page'] : 'unknown';

// Set the target filename based on the page
$targetFilename = $uploadsDir . $page . '.jpg';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadedFile = $_FILES['image'];
    
    // Check if a file was uploaded
    if ($uploadedFile['error'] === 0) {
        // Check file type
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        $fileType = $uploadedFile['type'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Move the uploaded file to our uploads directory
            if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilename)) {
                // Redirect back to the original page
                header("Location: {$page}.php?upload=success");
                exit;
            } else {
                $error = "Failed to save the uploaded file.";
            }
        } else {
            $error = "Invalid file type. Only JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        $error = "Error uploading file. Error code: " . $uploadedFile['error'];
    }
    
    // If we reach here, there was an error
    header("Location: {$page}.php?upload=error&message=" . urlencode($error));
    exit;
}

// If no file was uploaded or form wasn't submitted, redirect to home
header("Location: index.php");
exit;
?>
