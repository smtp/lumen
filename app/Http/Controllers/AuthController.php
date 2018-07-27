<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Illuminate\Http\Request;
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
        return view('index');
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
            setcookie('rehive_token', $response->data->token);
            Log::debug('login successful', ['data' => $login->getBody()]);

            sleep(1);

            return redirect()->route('dashboard');

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
                            'Authorization' => 'Token ' . $this->request->cookie('rehive_token'),
                        ]
                ]
            );
            Log::debug('logout successful', ['data' => $logout->getBody()]);
            return view('index');

        } catch (\Exception $exception) {
            Log::error($exception);
        }
    }
}
