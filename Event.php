<?php
namespace Plugin\AddThis;

class Event
{
    public static function ipBeforeController()
    {
        $pubId = ipGetOption('AddThis.addThisUid');
        if ($pubId){
            $pubOption = "#pubid=".$pubId;
        }else{
            $pubOption = '';
        }

        ipAddJs('http://s7.addthis.com/js/300/addthis_widget.js'.$pubOption);
        ipAddJsVariable('addthis_config', array("data_track_addressbar"=>true));
    }
}