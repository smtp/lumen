<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use Illuminate\Http\Request;
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
     * @return mixed
     */
    public function dashboard() {
        try {
            $userData = $this->client->request(
                'GET',
                'https://api.rehive.com/3/user/',
                [
                    'headers' =>
                        [
                            'Authorization' => 'Token ' . $this->request->cookie('rehive_token'),
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

            return view('dashboard', ['user' => $user]);

        } catch (\Exception $exception) {
            Log::error($exception);
            var_dump('get data failed');
        }
    }
}
