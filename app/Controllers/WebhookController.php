<?php

namespace App\Controllers;
class WebhookController
{
    public function handel($request){

        $method = str_replace('_','',ucwords($request->type,'_'));
        if (method_exists($this,$handel='handel'.$method)){
            $this->{$handel}($request);
        }
    }

    private function handelCardDecided($request){
        var_dump($request->type);
    }
}
