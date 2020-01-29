<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Input;
use App\Except\Handler;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function AcceptOnlyPut(Request $request) {
        $data = $request->input('str');

        $response = is_string($data) ? str_split($data) : 'error';
        $check = is_string($data) ? 200 : 420;

        return response(json_encode($response), $check);
    }

    public function get_reward_level($spent, $recent) {
        
        $compute = $this->computeRewards($spent, $recent);

        return response()->json(['reward'=>$compute]);
    }
}
