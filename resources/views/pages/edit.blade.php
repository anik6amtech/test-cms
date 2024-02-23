
<?php

function getPhpFiles($directory) {
    $result = [];

    // Get all files and directories in the specified directory
    $contents = scandir($directory);

    // Remove "." and ".." from the list
    $contents = array_diff($contents, array('.', '..'));

    // Iterate through each item in the directory
    foreach ($contents as $item) {
        $path = $directory . '/' . $item;

        // Check if the item is a directory
        if (is_dir($path)) {
            // Recursively get PHP files from subdirectories
            $result = array_merge($result, getPhpFiles($path));
        } else {
            // Check if the file has a PHP extension
            if (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
                $result[] = $path;
            }
        }
    }

    return $result;
}

$baseDirectory = 'themes';
$phpFiles = getPhpFiles($baseDirectory);
$files = '';
foreach ($phpFiles as $file) {
   if (in_array($file, array('template.php'))) continue;//skip template files
   $pathInfo = pathinfo($file);
//    dd($pathInfo);
   $filename = $pathInfo['filename'];
   $folder = preg_replace('@/.+?$@', '', $pathInfo['dirname']);
   $subfolder = preg_replace('@^.+?/@', '', $pathInfo['dirname']);

   if ($filename == 'index' && $subfolder) {
	   $filename = $subfolder;
   }
   $url = $pathInfo['dirname'] . '/' . $pathInfo['basename'];
   $name = $filename;
   $title = ucfirst($name);

  $files .= "{name:'$name', file:'$file', title:'$title',  url: '$url', folder:'$subfolder'},";
}


//replace files list from html with the dynamic list from demo folder
$html = str_replace('= defaultPages;', " = [$files];", $html);

?>

{!! $html !!}

