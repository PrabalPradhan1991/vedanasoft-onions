<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function uploadAPI($file, $upload_directory, $asset_type) {
        try
        {
            $file->store($upload_directory);
            $filename = $file->hashName();
            $response['status'] = true;
            $response['message'] = '';
            $response['filename'] = $filename;    
            $response['original_filename'] = $file->getClientOriginalName();
            $response['mime_type'] = mime_content_type(base_path().'/storage/app/'.$upload_directory.'/'.$filename);
            $response['url'] = route('get-asset', [$upload_directory, $filename]); 
        }
        catch(\Exception $e)
        {
            $response['status'] = false;
            $response['message'] = $e->getMessage();
            $response['filename'] = NULL;
            $response['url'] = NULL;
        }

        return $response;
    }

    private function getAssetHandlers($filename)
    {
        $path = base_path().'/storage/app/videos/'.$filename;
        $filename = $filename;
        
        if(\File::exists($path) && is_file($path) && !is_null($filename))
        {
            $handler = new \Symfony\Component\HttpFoundation\File\File($path);    
        }
        
        return ['path' => $path, 'handler' => $handler];
    }

    public function getVideoAsset($filename)
    {
        //get-video-from-link
        $data = $this->getAssetHandlers($filename);

        $path= $data['path'];
        $handler = $data['handler'];
        
        $fullsize = filesize($data['path']);
        $size = $fullsize;
        $stream = fopen($data['path'], "r");
        $response_code = 200;
        $headers = array("Content-type" => 'video/mp4');
        
        // Check for request for part of the stream
        $range = app('request')->header('Range');
        //app('request')->header('pubapi');
        if($range != null) {
            $eqPos = strpos($range, "=");
            $toPos = strpos($range, "-");
            $unit = substr($range, 0, $eqPos);
            $start = intval(substr($range, $eqPos+1, $toPos));
            $success = fseek($stream, $start);
            if($success == 0) {
                $size = $fullsize - $start;
                $response_code = 206;
                $headers["Accept-Ranges"] = $unit;
                $headers["Content-Range"] = $unit . " " . $start . "-" . ($fullsize-1) . "/" . $fullsize;
            }
        }
        
        $headers["Content-Length"] = $size;

        return \Response::stream(function () use ($stream) {
            fpassthru($stream);
        }, $response_code, $headers);
    }

    public function getAsset($directory, $filename) {
        $data['path'] = base_path().'/storage/app/'.$directory.'/'.$filename;

        
        if(\File::exists($data['path']) && is_file($data['path']) && !is_null($filename))
        {
            $data['handler'] = new \Symfony\Component\HttpFoundation\File\File($data['path']);    
        }
        else
        {
            $data['handler'] = new \Symfony\Component\HttpFoundation\File\File(base_path().''.DS.'storage'.DS.'app'.DS.'images'.DS.'no-images'.DS.'no-img-product-brand.png');
            $path = base_path().''.DS.'storage'.DS.'app'.DS.'images'.DS.'no-images'.DS.'no-img-product-brand.png';    
        }

        $path= $data['path'];
        $handler = $data['handler'];
        $filename = 'vid.mp4';
        
        $lifetime = 31556926; //'.DS.'/ One year in seconds

        /**
        * Prepare some header variables
        */
        $file_time = $handler->getMTime(); // Get the last modified time for the file (Unix timestamp)

        $header_content_type = $handler->getMimeType();
        $header_content_length = $handler->getSize();
        $header_etag = md5($file_time . $path);
        $header_last_modified = gmdate('r', $file_time);
        $header_expires = gmdate('r', $file_time + $lifetime);

        
        $headers = array(
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
            'Last-Modified' => $header_last_modified,
            'Cache-Control' => 'must-revalidate',
            'Expires' => $header_expires,
            'Pragma' => 'public',
            'Etag' => $header_etag,
        );

        /**
        * Is the resource cached?
        */

        $h1 = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $header_last_modified;
        $h2 = isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $header_etag;

        if ($h1 || $h2) {
            return \Response::make('', 304, $headers); // File (image) is cached by the browser, so we don't have to send it again
        }


        $headers = array_merge($headers, array(
            'Content-Type' => $header_content_type,
            'Content-Length' => $header_content_length
        ));

        
        return \Response::make(file_get_contents($path), 200, $headers);   
    }
}