<?php
class koneksi {
	private $server = "localhost";
	private $username = "id4929112_bayu123";
	private $password = "1212bayu";
	private $db = "id4929112_uyab";
	private $hubungan;

	function ambilKoneksi(){
		$hubungan = new mysqli($this->server, $this->username, $this->password, $this->db);
		return $hubungan;

	}

}

?>