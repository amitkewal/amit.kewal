<?php
//fetching the active campaign from the database

class CampaignWebserviceController extends Controller {
   
   
   //Fecth details for single campaign item
   public function getEligbleCampaignByItem(Request $request){
       $campaign_item = $request['item'];
       switch($campaign_item)
       {
         case "banner":
            $banner = new BannerElasticQuery();
            $banner->createQuery();
            $esConnector = new ElasticConnector($banner);
       }
       return $json;
   }

   //fetch details for given list of campaign items
   public function getEligbleCampaigns(Request $request){

       return $json;
   }
  

}