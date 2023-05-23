<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyAppCheckToken;
use Exception;
use Kreait\Firebase\Factory;

class AppCheckController extends Controller
{
    public function index()
    {
        return view('app-check');
    }

    public function verifyAppCheckToken(VerifyAppCheckToken $request)
    {
        $appId = null;
        $errorMessage = null;
        try {
            $token = (new Factory())
                ->withServiceAccount($request->validated('service_account_json'))
                ->createAppCheck()
                ->verifyToken($request->validated('app_check_token'));
            $appId = $token->appId;
            info($appId);
        } catch (Exception $exception) {
            $errorMessage = $exception->getMessage();
            info($errorMessage);
        }
        return back()
            ->withInput()
            ->with('appId', $appId)
            ->with('errorMessage', $errorMessage);
    }
}
