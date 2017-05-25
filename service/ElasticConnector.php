<?php
class ElasticConnector
{
	public function __construct()
	{
		//Define Scroll API
	}
	public function formFinalQuery(ElasticQuery $typeofelastciquery)
	{
		$query = $typeofelastciquery->getQuery(); 
		$result=$this->getCompaigns($query);
   		return $result;//create query
	}

   	//SCROLL CALL FOR FETCHING REQUIRED POOL
	public function scrollCall()
	{
		$this->executeQuery();
		//SCROLL_API_CALL to ELASTIC

		//The response which is obtained from scroll API will be dumped into the amazon kniesis.
	} 

	private function getCompaigns()
	{
		$this->executeQuery();

	}

	private function executeQuery()
	{
		//run

	}


}

?>