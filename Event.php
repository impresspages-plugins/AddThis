<?php
namespace Plugin\AddThis;

class Event
{
    public static function ipBeforeController()
    {

        $data['data_track_addressbar'] = true;

        ipAddJsVariable("addthis_config", $data);

        ipAddJs('http://s7.addthis.com/js/300/addthis_widget.js');
    }
}