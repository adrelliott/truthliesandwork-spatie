<?php

function getDomainName(): string
{
    $domain = \Illuminate\Support\Str::of(request()->getHost())
        ->lower()
        ->explode('.')
        ->first();

    // if (! in_array($domain, \App\Enums\RegisteredDomains::getValues())) {
    //     return $domain;
    // }
    else "noooo";
}