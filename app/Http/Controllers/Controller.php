<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static function computeRewards($history, $spent) {
        $count = 0;
        $reward = 0;

        if($history >= 2000) {
            for($i = 100; $i <= $spent; $i++) {
                if(($i % 100) == 0) {
                    $count++;
                }
            }
            $reward = $count * 20;
        }else if($history >= 1000) {
            for($i = 100; $i <= $spent; $i++) {
                if(($i % 100) == 0) {
                    $count++;
                }
            }
            $reward = $count * 15;
        }else if($history >= 125) {
            for($i = 100; $i <= $spent; $i++) {
                if(($i % 100) == 0) {
                    $count++;
                }
            }
            $reward = $count * 10;
        }
        return $reward;
    }
}
