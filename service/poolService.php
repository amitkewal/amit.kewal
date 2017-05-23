<?php
class poolService
{
	public function __construct()
	{
		//Define Scroll API
	}
	public function createQuery()
	{
	//fetching the campaign Criterias
   	$resultCampaign=new campaignCriteria();
	$result=$resultCampaign->fetchCriteria($request);
   	
   	return $query =create($result);//create query
	}

   	//SCROLL CALL FOR FETCHING REQUIRED POOL
	public function scrollCall()
	{
		$this->createQuery();
		SCROLL_API_CALL to ELASTIC

		//The response which is obtained from scroll API will be dumped into the amazon kniesis.
	}

	public function kinesisENQueue()
	{

	}

}

?>