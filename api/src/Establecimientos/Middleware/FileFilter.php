<?php

namespace Establecimientos\Middleware;

class FileFilter {
	protected $allowedFiles = ['image/jpeg','image/png'];
	public function __invoke($request, $response, $next){
		$files = $request->getUploadedFiles();
		$newfile = $files['imagen'];
		$newfile_type = $newfile->getClientMediaType();

		$newfile2 = $files['logoDesclub'];
		if($newfile->getSize()>0 and $newfile2->getSize()>0){
			$newfile_type2 = $newfile2->getClientMediaType();
			if(!in_array($newfile_type, $this->allowedFiles) or !in_array($newfile_type2, $this->allowedFiles) ){
				return $response->withStatus(415);
			}
		}
		$response = $next($request , $response);
		return $response;
	}
}