<?php
	
	class orang{

		public $nama;
		public $tempatlahir;
		public $umur;
		public $kelas;
		public $status;
		public $maen;
	
	public function __construct($nama,$tempatlahir,$umur,$kelas,$status,$maen){
		$this->nama = $nama;
		$this->tempatlahir = $tempatlahir;
		$this->umur = $umur;
		$this->kelas = $kelas;
		$this->status = $status;
		$this->maen = $maen;
	 }
		function get_nama(){
    	  return $this->nama;
	 }
		function get_tempatlahir(){
    	  return $this->tempatlahir;
     }
		function get_umur(){
    	  return $this->umur;
	 }
		function get_kelas(){
    	  return $this->kelas;
	 }
		function get_status(){
    	  return $this->status;
    
	
	 }
		function get_maen(){
    	  return $this->maen;
    
}}
?>