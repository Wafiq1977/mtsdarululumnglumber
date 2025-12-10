<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Config\Services;

class RateLimitFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $ip = $request->getIPAddress();
        $uri = $request->getUri()->getPath();

        // Skip rate limiting for admin routes and assets
        if (strpos($uri, '/admin') === 0 || strpos($uri, '/assets') === 0) {
            return;
        }

        $cache = Services::cache();
        $key = 'rate_limit_' . md5($ip . $uri);

        $attempts = $cache->get($key) ?? 0;
        $maxAttempts = 100; // Max requests per hour
        $decayTime = 3600; // 1 hour

        if ($attempts >= $maxAttempts) {
            return Services::response()->setStatusCode(429)->setBody('Too Many Requests');
        }

        $cache->save($key, $attempts + 1, $decayTime);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}