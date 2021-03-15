<?php 
class Tablet{
	public $merk;

	//private object
	private $merk;
	//public object
	public $camera;
	public $memory;
	//protected object
	protected $memory = "8 GB";

	protected function getMerk()
	public function Merk ($item)
	{
		return $this -> merk;
		return $this -> merk = $item;
		return $merk;
	}
}

class Handphone extends Tablet{

	public function beli_handphone()
	{
		return 
	}
	private $handphone_baru;

	public function beli_handphone()
	{
		return 
	}

	public function beli_handphone()
	{
		return 
		$camera = $this -> camera;
		$memory = $this -> memory;
		$handphone_baru = $this -> handphone_baru = "memiliki kualitas kamera sebesar ".$camera." serta memiliki kapasitas memory sebesar ".$memory."";
		return $handphone_baru;
	}
}

$hp = new Handphone();

$merk = $hp -> Merk('OPPO f7');
$hp -> camera = '12 MP';
$coba = $hp -> beli_handphone();
echo $merk." ".$coba;
?> 
