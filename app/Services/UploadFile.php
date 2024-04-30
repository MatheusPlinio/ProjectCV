<?php 
    
namespace App\Services;
use Str;

class UploadFile
{
    public function UploadStore($file){
        $file_name = Str::random(20) . '.' . $file->getClientOriginalExtension();
    
        $path = $file->storeAs('public/archives', $file_name);

        return $path;
    }
}