<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function changeLocale($lang)
    {
        $prev_uri_segments = $this->previousSegments(url()->previous());
        $prev_uri_segments = array_replace($prev_uri_segments, array(0 => $lang));

        return redirect()->to(implode('/', $prev_uri_segments));
    }

    /**
     * Get all of the segments for the previous uri.
     *
     * @return array
     */
    private function previousSegments($uri)
    {
        $segments = explode('/', str_replace(''.url('').'', '', $uri));

        return array_values(array_filter($segments, function ($value) {
            return $value !== '';
        }));
    }
}
