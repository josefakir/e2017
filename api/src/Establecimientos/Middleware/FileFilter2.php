<?php

namespace Establecimientos\Middleware;

class FileFilter2 {
	protected $allowedFiles = ['image/jpeg','image/png'];
	public function __invoke($request, $response, $next){
		$files = $request->getUploadedFiles();
		$newfile = $files['fachada'];
		$newfile_type = $newfile->getClientMediaType();
		if($newfile->getSize()>0){
			if(!in_array($newfile_type, $this->allowedFiles)) {
				return $response->withStatus(415);
			}
		}
		$response = $next($request , $response);
		return $response;
	}
}