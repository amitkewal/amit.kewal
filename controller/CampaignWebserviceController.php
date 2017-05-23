<?php
//fetching the active campaign from the database

class CampaignWebserviceController extends Controller {
   
   
   //Fecth details for single campaign item
   public function getEligbleCampaignByItem(Request $request){
       $campaign_item = $request['item'];
       $resultCampaign=new campaignMetadata();
         swith($item){
            case "banner":
            //do banner related stuff only
            //no if condition in core algorithm
            //expection: logger object and ES profile data will be available here
         }
       $result=$resultCampaign->getQualifiedCampaignsByItem($campaign_item);
       return $json;
   }

   //fetch details for given list of campaign items
   public function getEligbleCampaignByItems(Request $request){
       $campaign_item = $request['items'];
       $resultCampaign=new campaignMetadata();
         swith($item){
            case "banner":
            //do banner related stuff only
            //no if condition in core algorithm
            //expection: logger object and ES profile data will be available here
         }
       $result=$resultCampaign->getQualifiedCampaignsByItems($campaign_item);
       return $json;
   }
  

}