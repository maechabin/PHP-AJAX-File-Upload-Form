<?php
/*
if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
 
	if (move_uploaded_file($_FILES["file"]["tmp_name"], "csv/" . $_FILES["file"]["name"])) {
 
		chmod("csv/" . $_FILES["file"]["name"], 0644);
 
	}
 
}
*/
class Upload {

	private function upload_file() {

		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

	}

	public function init() {

		$this->upload_file();

	}

}

$upload = new Upload();
$upload->init();
?>