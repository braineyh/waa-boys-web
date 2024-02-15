<?php
// $folder = $_GET['folder'];
$files = glob("uploads/assignments/*.*");
for ($i = 0; $i < count($files); $i++) {
    $file = $files[$i];
    $supported_file = array(
        'pdf',
        'doc',
        'docx'
    );

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
        echo '<a href="' . $file . '">' . basename($file) . '</a><br />';
    } else {
        continue;
    }
}
