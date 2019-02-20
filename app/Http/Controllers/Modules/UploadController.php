<?php

namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    public function getUniqName($file)
    {
        $originalName = $this->getRegularName($file->getClientOriginalName());

        $uniqName = uniqid('img-') . '-' . $originalName;

        return $uniqName;
    }

    public function getRegularName($name)
    {
        $characters = ['_',' '];

        $name = preg_replace(['/ +/' , '/_+/'], ' ', $name);

        $name = str_replace( $characters, '-', $name );

        return $name;
    }
}
