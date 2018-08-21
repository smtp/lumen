<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * @var GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var $company
     */
    protected $company;

    /**
     * @var $request
     */
    protected $request;

    /**
     * AuthController constructor.
     *
     * @param GuzzleHttp\Client $guzzleHttp
     * @param Request $request
     */
    public function __construct(GuzzleHttp\Client $guzzleHttp, Request $request)
    {
        $this->client = new $guzzleHttp;
        $this->company = 'carlngwenya';
        $this->request = $request;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function login() {
        return view('pages.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function auth() {
        $input = Input::get();
        $input['company'] = $this->company;
        try {
            $login = $this->client->request('POST', 'https://api.rehive.com/3/auth/login/', [
                'form_params' => $input,
            ]);
            $response = json_decode($login->getBody());

            session(['rehive_token' => $response->data->token]);

            Log::debug('login successful', ['data' => $login->getBody()]);

            sleep(1);

            return redirect()->route('pages.dashboard');

        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }

    /**
     * @return \Illuminate\View\View
     */
    public function logout() {
        try {
            $logout = $this->client->request(
                'POST',
                'https://api.rehive.com/3/auth/logout/',
                [
                    'headers' =>
                        [
                            'Authorization' => 'Token ' . session()->get('rehive_token'),
                        ],
                ]
            );
            Log::debug('logout successful', ['data' => $logout->getBody()]);
            view()->share('message', 'Successfully logged out');

            return view('pages.index');

        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }
}
