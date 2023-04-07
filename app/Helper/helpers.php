<?php

use Illuminate\Support\Facades\File;

/** Handle file uploading */

function handleUpload($inputName, $model = null){

  try {
        if(request()->hasFile($inputName)){
            //Logic to delete the previous image, to  prevent storage
            if($model && File::exists(public_path($model->{$inputName}))){
                File::delete(public_path($model->{$inputName}));
            }
            $file = request()->file($inputName);
            $fileName = rand().$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            $filePath = "/uploads/". $fileName;

            // dd($imagePath);

            return $filePath;
        }
  } catch (\Exception $e) {
    throw $e;
  }

}