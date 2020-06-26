<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;

class PostsService
{
    protected $http;

    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    public function all()
    {
        return $this->endpointRequest('https://jsonplaceholder.typicode.com/posts');
    }

    private function endpointRequest(string $url)
    {
        try {
            $response = $this->http::get($url);
        } catch (\Exception $e) {
            return [];
        }
        return $this->response_handler($response->body());
    }

    private function response_handler(string $response)
    {
        if ($response) {
            return json_decode($response);
        }
        return [];
    }
}
