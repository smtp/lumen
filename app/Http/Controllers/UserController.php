<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
     * @var $user
     */
    protected $user;

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

    private function getUserData() {
        try {
            $userData = $this->client->request(
                'GET',
                'https://api.rehive.com/3/user/',
                [
                    'headers' =>
                        [
                            'Authorization' => 'Token ' . session()->get('rehive_token'),
                        ]
                ]
            );

            $data = json_decode($userData->getBody());
            $user['username'] = $data->data->username;
            $user['first_name'] = $data->data->first_name;
            $user['last_name'] = $data->data->last_name;
            $user['nationality'] = $data->data->nationality;
            $user['language'] = $data->data->language;
            $user['birth_date'] = $data->data->birth_date;
            $user['id_number'] = $data->data->id_number;
            $user['email'] = $data->data->email;
            $user['status'] = $data->data->status;

            $this->user = $user;

            view()->share('user', $user);
        } catch (\Exception $exception) {
            Log::error($exception);
            var_dump('get data failed');
        }
    }

    public function create() {
        $input = Input::get();
        $input['company'] = $this->company;

        try {
            $signUp = $this->client->request('POST', 'https://api.rehive.com/3/auth/register/', [
                'form_params' => $input,
            ]);


            $response = json_decode($signUp->getBody());
            setcookie('rehive_token', $response->data->token);
            Log::debug('login successful', ['data' => $signUp->getBody()]);

//            $this->client->request('POST', 'https://api.rehive.com/3/accounts/', [
//                'headers' =>
//                    [
//                        'Authorization' => 'Token ' . $this->request->cookie('rehive_token'),
//                    ],
//                'form_params' => [
//                    'name' => null
//                ],
//            ]);

            return redirect()->route('pages.user');

        } catch (GuzzleHttp\Exception\ClientException $exception) {
//            $response = $exception->get;
//
//            dd($response);
//            return view('sign-up')->withInput(Input::all())->withErrors('message', $response->message);

            Log::error($exception);
        }
    }


    /**
     * @return mixed
     */
    public function dashboard() {
        $this->getUserData();
        return view('pages.dashboard');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function signUp() {
        return view('pages.sign-up');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function notifications() {
        $this->getUserData();
        return view('pages.notifications');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function user() {
        $this->getUserData();
        return view('pages.user');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deposit() {
        $this->getUserData();
        return view('pages.deposit');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     */
    public function storeDeposit() {
        $input = Input::get();
        $input['currency'] = 'ZAR';
        $input['reference'] = random_bytes(16);

        try {
            $data = $this->client->request(
                'POST',
                'https://api.rehive.com/3/transactions/credit/',
                [
                    'headers' =>
                        [
                            'Authorization' => 'Token ' . $this->request->cookie('rehive_token'),
                        ],
                    'form_params' => $input,
                ]
            );

            $data = json_decode($data->getBody());
//            $user['username'] = $data->data->username;

            $this->getUserData();
            return redirect()->route('pages.deposit');
        } catch (\Exception $exception) {
            Log::error($exception);
            var_dump('get data failed');
        }
    }
}
