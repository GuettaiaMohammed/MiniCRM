<?php

namespace App\Rules;

use Illuminate\Http\UploadedFile;
use Illuminate\Contracts\Validation\Rule;

class MinImageRule implements Rule
{
    protected $minWidth;
    protected $minHeight;

    public function __construct(int $minWidth, int $minHeight)
    {
        $this->minWidth = $minWidth;
        $this->minHeight = $minHeight;
    }

    public function passes($attribute, $value)
    {
        // Ensure the value is an uploaded file
        if ($value instanceof UploadedFile) {
            [$width, $height] = getimagesize($value->getPathname());
            return $width >= $this->minWidth && $height >= $this->minHeight;
        }

        return false;
    }

    public function message()
    {
        return "The :attribute must be at least {$this->minWidth}x{$this->minHeight} pixels.";
    }
}
