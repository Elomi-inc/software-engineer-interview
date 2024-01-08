<?php

namespace Interview;

use DateTime;

class Availability {

    public function __construct(public string $start, public string $end)
    {
        //
    }

    public function options(int $intervalMinutes): array
    {
        return [];
    }

    public function exclude(string $start, string $end): static
    {
        return $this;
    }
}