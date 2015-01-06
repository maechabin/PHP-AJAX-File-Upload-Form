<?php
class Upload {

	private function upload_file() {

		if (is_uploaded_file($_FILES["file"]["tmp_name"])) {

			if (move_uploaded_file( $_FILES["file"]["tmp_name"], "upload/" . basename($_FILES["file"]["name"])) ) {

				chmod("upload/" . $_FILES["file"]["name"], 0644);

			}

		}

	}

	public function init() {

		$this->upload_file();

	}

}

$upload = new Upload();
$upload->init();
?>