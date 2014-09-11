<?php
require '../lib/FtpClient/FtpClient.php';
require '../lib/FtpClient/FtpException.php';
require '../lib/FtpClient/FtpWrapper.php';

// https://github.com/Nicolab/php-ftp-client


try
{
	$ftp = new \FtpClient\FtpClient();

	$host = "192.168.1.31";
	$login = "root";
	$password = "helios";

	$current_directory = '/usr/home/test/kenji2';

	// FTP
	$ftp->connect($host, false, 21);
	// FTPS
	// $ftp->connect($host, true, 22);
	$ftp->login($login, $password);

	// size of a given directory
	$size = $ftp->dirSize($current_directory);
	echo($size);

	$nlist = $ftp->nlist($current_directory, true);
	print_r($nlist);





}catch (Exception $e) {
	echo '捕捉した例外: ',  $e->getMessage(), "\n";
}
