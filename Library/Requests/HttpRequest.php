<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 12:58
 */

namespace GlamyTest\Library\Requests;

use GlamyTest\Library\IRequest;
use GlamyTest\Library\Exceptions\MethodNotFoundException;

class HttpRequest implements IRequest
{
    protected $url;
    protected $params;

    /**
     * HttpRequest constructor.
     * @param string $method
     * @param string $url
     * @param array $params
     * @throws MethodNotFoundException
     */
    public function __construct(string $method, string $url, array $params = [])
    {
        $method = strtolower($method);

        if(!method_exists($this, $method)) {
            throw new MethodNotFoundException($method);
        }

        $this->url = $url;
        $this->params = $params;

        return call_user_func_array([$this, $method], []);
    }

    /**
     * @return string
     */
    public function get(): string
    {
        return $this->curl('get', $this->url, $this->params);
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @return string
     */
    protected function curl(string $method, string $url, array $params = []) : string
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);

        if($method == 'get') {
            $url .= http_build_query($params);
        }

        curl_setopt($ch, CURLOPT_URL, $url);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}