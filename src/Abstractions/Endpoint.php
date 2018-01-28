<?php 

namespace BitGrail\Abstractions;

/**
 * Class to comunicate with BitGrailExchange.
 * That class follow the Api Documentation at https://bitgrail.com/api-documentation
 * Same calls of thet API are authenticated. Generate your apiKey and Secret at https://bitgrail.com/api-keys
 */

use \BitGrail\Exceptions\BitGrailException;


abstract class Endpoint
{
    protected $base = 'https://api.bitgrail.com/v1/';
    protected $authenticated = true;
    
    public function call($params = []) {

        $url = $this->base.$this->endpoint;

        set_error_handler(
            create_function(
                '$severity, $message, $file, $line',
                'throw new \BitGrail\Exceptions\BitGrailException($message);'
            )
        );


        if ($this->authenticated === true) {
            $data =  $this->privateCall($url, $params);
        }

        if ($this->authenticated !== true) {
            $data =  $this->publicCall($url, $params);
        }

        if ($data->success != 1) {
            throw new BitGrailException($data->response->error);
        }

        restore_error_handler();

        return $data->response;
    }

    /**
     * Used to make private calls to de API
     * @param  string $url Endpoint address to be used 
     * @param  array $data Data to be sent
     * @return array  Response Array
     */
    private function privateCall($url, $data = []) 
    {
        $this->loadCredentials();

        $params = array_merge([
            'nonce' => date('YmdHis')
        ],$data);

        $params = http_build_query ($params);
    
        $signature = hash_hmac ('sha512', $params, $this->secret);
        $headers =  "Content-type: application/x-www-form-urlencoded\r\n".
                    "KEY: $this->key\r\n".
                    "SIGNATURE: $signature";
                   
        
    
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'content' => $params,
                'header' => $headers
            ]
        ]);
    
        // Open the file using the HTTP headers set above
        return json_decode(file_get_contents($url, null, $context));
    }

    /**
     * Used to make public calls to de API
     * @param  string $url Endpoint address to be used 
     * @param  array $data Data to be sent
     * @return array       Response Array
     */
    private function publicCall($url)
    {
        return json_decode(file_get_contents($url));
    }

    private function loadCredentials()
    {
        $key = getenv('BITGRAIL_API_KEY');
        $secret = getenv('BITGRAIL_API_SECRET');

        if (empty($key) || empty($secret)) {
            throw new BitGrailException('Key or Secret is empty, use putenv to define it');
        }

        $this->key = $key;
        $this->secret = $secret;

    }

}