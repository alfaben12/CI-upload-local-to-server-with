<?php
class ServerUploader{
	/*
		Author : Thariq Alfa
	*/
    public function __construct(){
        $this->CI =& get_instance();
    }

    function ServerUpload($param = array()){
        $this->CI->load->library('ftp');

		$config['hostname'] = '52.163.205.84';
		$config['username'] = 'reseller';
		$config['password'] = 'e447d709ef43d9a80e8300332c4dcae4';
		$config['debug'] = TRUE;

		$this->CI->ftp->connect($config);
		$file = $param['file_path'];
		$name = $param['name'];
		$this->CI->ftp->upload($file, $param['target_path']. $name, 'ascii', 0775);
		$this->CI->ftp->close(); 
    }
}

/* USED */
/*
	$this->load->library('serveruploader');
	$param = array(
		'file_path' => 'Users/macair4/Downloads/node.png,
		'name' => 'node.png',
		'target_path' => '/public_html/'
	);
	$this->serveruploader->ServerUpload($param);
*/