<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

// ==== Step 1: Setup Google Client ====
$client = new Google_Client();
$client->setAuthConfig('credential.json');
$client->addScope(Google_Service_Drive::DRIVE_FILE); // Use a safer scope
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$client->setRedirectUri('http://localhost/upload.php');

// ==== Step 2: Handle Logout ====
if (isset($_GET['logout'])) {
    unset($_SESSION['access_token']);
    session_destroy();
    echo "Logged out. <a href='upload.php'>Start Again</a>";
    exit;
}

// ==== Step 3: Authenticate User ====
if (!isset($_SESSION['access_token'])) {
    if (!isset($_GET['code'])) {
        $authUrl = $client->createAuthUrl();
        echo "<a href='$authUrl'>🔐 Connect with Google</a>";
        exit;
    } else {
        try {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            if (isset($token['error'])) {
                throw new Exception($token['error_description']);
            }
            $_SESSION['access_token'] = $token;
        } catch (Exception $e) {
            echo "⚠️ Auth Error: " . $e->getMessage();
            exit;
        }
    }
}

// ==== Step 4: Set the Access Token ====
$client->setAccessToken($_SESSION['access_token']);

if ($client->isAccessTokenExpired()) {
    echo "⚠️ Token expired. <a href='?logout=1'>Reconnect</a>";
    exit;
}

// ==== Step 5: Upload Image ====
$driveService = new Google_Service_Drive($client);

$imagePath = 'your_image.jpg'; // 👈 Replace with your image file
$imageName = basename($imagePath);
$mimeType = mime_content_type($imagePath);

$fileMetadata = new Google_Service_Drive_DriveFile([
    'name' => $imageName,
]);

$content = file_get_contents($imagePath);

$file = $driveService->files->create($fileMetadata, [
    'data' => $content,
    'mimeType' => $mimeType,
    'uploadType' => 'multipart',
    'fields' => 'id'
]);

$fileId = $file->id;

// ==== Step 6: Make Public ====
$permission = new Google_Service_Drive_Permission([
    'type' => 'anyone',
    'role' => 'reader'
]);
$driveService->permissions->create($fileId, $permission);

// ==== Step 7: Get Shareable Link ====
$fileInfo = $driveService->files->get($fileId, [
    'fields' => 'webViewLink, webContentLink'
]);

echo "<h2>✅ Image Uploaded Successfully</h2>";
echo "🖼️ <strong>Direct Image URL:</strong> <a href='{$fileInfo->webContentLink}' target='_blank'>{$fileInfo->webContentLink}</a><br>";
echo "📁 <strong>View Link (Google Drive):</strong> <a href='{$fileInfo->webViewLink}' target='_blank'>{$fileInfo->webViewLink}</a><br>";
echo "<br><a href='?logout=1'>🔄 Logout / Reset</a>";
?>
