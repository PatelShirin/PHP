<?php
return "
Upload New Images</h1>
<form method='post' action='index.php?page=upload' enctype='multipart/formdata'>
<label>Find a jpg image to Upload</label>
<input type='file' name='image-data' accept='image/jpeg'/>
<input type='submit' value='upload' name='new image'/>
</form>
";