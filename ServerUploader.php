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

		$config['hostname'] = '52.163.***.**';
		$config['username'] = 'root';
		$config['password'] = 'toor';
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
