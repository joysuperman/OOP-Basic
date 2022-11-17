<?php 
/**
 * construct
 */
class Fund
{
	private $fund;

	function __construct($intFund)
	{
		$this-> fund = $intFund;
	}

	public function addFund($money)
	{
		$this-> fund += $money;
	}

	public function deductFund()
	{
       $this-> fund -= $money;
	}

	public function notification($notification)
	{
       $this-> notice = $notification;
	}
    
    public function totlaFund()
    {
    	echo "<h1>Total Fund is {$this -> fund}</h1>";
    	echo "<sup>{$this-> notification("Sucess!")}</sup>";
    }
}
     
$ourFund = new Fund(100);
// $ourFund -> fund = 50; //Without Protected
$ourFund -> totlaFund();
$ourFund -> addFund(10);
$ourFund -> totlaFund();
$ourFund -> deductFund(10);
$ourFund -> totlaFund();