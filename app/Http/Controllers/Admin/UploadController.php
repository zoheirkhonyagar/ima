<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\UploadController as uploadModule;

class UploadController extends uploadModule
{
    public function uploadImageSubject()
    {
        $file = request()->file('upload');
        if ($file->getClientOriginalExtension() == 'mp3') {
            // $this->validate(request() , [
            //     'upload' => 'required|mimes:mpga,mp2,mp2a,mp3,m2a,m3a',
            // ]);

            $audioPath = "/uploads/audio/";
            $file = request()->file('upload');
            $filename = $this->getUniqName($file);
            $file->move(public_path($audioPath) , $filename);
            $url = $audioPath . $filename;

            return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
        } else {
            $this->validate(request() , [
                'upload' => 'required|mimes:jpeg,png,bmp',
            ]);
            $imagePath = "/uploads/";
            $file = request()->file('upload');
            $filename = $this->getUniqName($file);
            $file->move(public_path($imagePath) , $filename);
            $url = $imagePath . $filename;
            return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
        }

    }

    public function uploadAudio($file) {

        $this->validate(request() , [
            'upload' => 'required|mimes:mpga,mp2,mp2a,mp3,m2a,m3a',
        ]);

        $audioPath = "/uploads/audio/";
        $file = request()->file('upload');
        $filename = $this->getUniqName($file);
        $file->move(public_path($audioPath) , $filename);
        $url = $audioPath . $filename;

        return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
    }
}
