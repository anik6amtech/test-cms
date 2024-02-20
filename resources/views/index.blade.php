
<?php


//search for html files in demo and my-pages folders
$htmlFiles = glob('{themes/*.php}',  GLOB_BRACE);
$files = '';
foreach ($htmlFiles as $file) {
   if (in_array($file, array('new-page-blank-template.html', 'editor.html'))) continue;//skip template files
   $pathInfo = pathinfo($file);
   $filename = $pathInfo['filename'];
   $folder = preg_replace('@/.+?$@', '', $pathInfo['dirname']);
   $subfolder = preg_replace('@^.+?/@', '', $pathInfo['dirname']);
   if ($filename == 'index' && $subfolder) {
	   $filename = $subfolder;
   }
   $url = $pathInfo['dirname'] . '/' . $pathInfo['basename'];
   $name = $filename;
   $title = ucfirst($name);

  $files .= "{name:'$name', file:'$file', title:'$title',  url: '$url', folder:'$folder'},";
}


//replace files list from html with the dynamic list from demo folder
$html = str_replace('= defaultPages;', " = [$files];", $html);

?>

{!! $html !!}

