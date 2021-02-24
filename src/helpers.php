<?php

use Carbon\Carbon;

if (! function_exists('carbon')) {
    /**
     * Returns the Carbon instance
     *
     * @return Carbon
     */
    function carbon() : Carbon
    {
        return new Carbon;
    }
}

if (! function_exists('timestamp')) {
    /**
     * Get current time stamp
     *
     * @return integer
     */
    function timestamp()
    {
        return carbon()->now()->timestamp;
    }
}