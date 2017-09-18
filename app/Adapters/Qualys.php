<?php
namespace App\Adapters;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Qualys
{
    /**
     * Username
     *
     * @var string
     */
    private $username;

    /**
     * Password
     *
     * @var string
     */
    private $password;

    /**
     * IdentiFlow constructor.
     */
    public function __construct()
    {
        $this->username   = 'dtbts3nb';
        $this->password   = 'DotBits@2017';
        $this->api_v1_url = "https://qualysapi.qg3.apps.qualys.com";
        $this->api_v2_url = "https://qualysapi.qg3.apps.qualys.com/api/2.0/fo";

        $this->client = new Client([
           // You can set any number of default request options.

           'verify'   => true
       ]);
    }

    /**
     * Make a post request to qualys
     *
     * @param string $uri
     * @param array $array
     * @param string $version
     *
     * @return array
     */
    public function get($uri, $array, $version = 'v1')
    {
        try {

            $url = $this->api_v1_url . '/' . $uri;

            if($version == 'v2'){
                $url = $this->api_v2_url . '/' . $uri;
            }

            $url .= '?' . http_build_query($array);


            $response = $this->client->request('GET', $url, [
                'headers' => [
                    'X-Requested-With: PHP curl',
                    'Content-Type: text/xml'
                ],
                'auth' => [$this->username, $this->password]
            ]);

            $result = $response->getBody();
            $result = $result->getContents();

            $xml   = simplexml_load_string($result, 'SimpleXMLElement', LIBXML_NOCDATA);

            $array = json_decode(json_encode($xml), true);

            return [
                'status'  => 'success',
                'data'    => $array,
                'message' => 'Successfully launched.'
            ];

        } catch (RequestException $e) {

            return [
                'status'  => 'failure',
                'data'    => 0,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Make a post request to qualys
     *
     * @param string $uri
     * @param array $array
     * @param string $version
     *
     * @return array
     */
    public function post($uri, $array, $version = 'v1')
    {
        try {

            $url = $this->api_v1_url . '/' . $uri;

            if($version == 'v2'){
                $url = $this->api_v2_url . '/' . $uri;
            }

            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Content-Type: application/json'
                ],
                'auth' => [$this->username, $this->password],
                'json' => $array
            ]);

            dd($response);


        } catch (RequestException $e) {
            return [
                'status'  => 'failure',
                'code'    => 0,
                'message' => $e->getMessage()
            ];
        }
    }
}