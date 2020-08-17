<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherController extends Controller
{
    public function sendNotification()
    {
        //Remember to change this with your cluster name.
        $options = array(
            'cluster' => 'eu', 
            'encrypted' => true
        );

       //Remember to set your credentials below.
        $pusher = new Pusher(
            'd3d57fcef93c51082ee8',
            'b34eca7d37564bdc9ddf',
            '1001753',
            $options
        );

        $message = [
            "La camara del salón ha detectado un intruso!"
        ];
		
        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notify', 'notify-event', $message); 

        return 'Simulación en linea enviada!';
    }
}
