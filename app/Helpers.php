<?php

function getDomainName(): string
{
    $domain = \Illuminate\Support\Str::of(request()->getHost())
        ->lower()
        ->explode('.')
        ->first();

    $allowedDomains = array_column(\App\Enums\RegisteredDomains::cases(), 'value');
    
    if (! in_array($domain, $allowedDomains)) {
        throw new \Exception('Domain not registered');    
    }
    return $domain;
}