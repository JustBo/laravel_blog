<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageUploadService
{
    public static function upload($request, $name, $path, $existedPath=null )
    {
        if ($request->hasFile($name)) {
          // Get file
          $file = $request->file($name);
          // Get filename with extension
          $filenameWithExt = $file->getClientOriginalName();
          // Get file name
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          // Get extension
          $extension = $file->getClientOriginalExtension();
          // Create new filename
          $filenameToStore = $filename.'_'.time().'.'.$extension;

          $icon = Image::make($file)->resize(1024,600);
          $created_path = Storage::put($path.'/'.$filenameToStore, $icon->stream());

          if( $existedPath != null && $existedPath != 'default.jpg' ){
            self::delete( $path, $existedPath );
          }
        }else{
          $filenameToStore = $existedPath == null ? 'default.jpg' : $existedPath;
        }
        return $filenameToStore;
    }

    public static function delete( $path, $name )
    {
      return Storage::delete($path.'/'.$name);
    }



}
