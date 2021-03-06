<?php
//complete source code for views/gallery.php
//function call
return showImages();

//function defintion
function showImages(){
	$out = "<h1>Image Gallery</h1>";
	$out .= "<ul id='images'>";
	$folder = "img";
	$filesInFolder = new DirectoryIterator( $folder);
	
	while ( $filesInFolder->valid() ) {
		$file = $filesInFolder->current();
		$filename = $file->getFilename();
		$src = "$folder/$filename";
		$fileInfo = new Finfo( FILEINFO_MIME_TYPE );
		$mimeType = $fileInfo->file( $src );
		
		if ( $mimeType === 'image/jpeg' ) {
			$out .= "<li><img src='$src' height=150 width=150/></li>";
		}
		$filesInFolder->next();
	}
	$out .= "</ul>";
	return $out;
}

