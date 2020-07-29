<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Logo extends Model
{
    protected $guarded = [];
    public function validateLogoData()
    {
        return request()->validate([
            'path' => 'file|required',
        ]);
    }

    public function hasLogo($value)
    {
        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function getLogoPath($value)
    {
        if ($value == null) {
            return null;
        } else {
            $path = Storage::putFile('images/', $value);
            return $value->storeAs("public", $path);
        }
    }

    public function LogoData()
    {
        $data = $this->validateLogoData();
        $result = $this->hasLogo($data['path']);
        $value = $this->getLogoPath($result);
        return   array('path' => $value);
    }
}
