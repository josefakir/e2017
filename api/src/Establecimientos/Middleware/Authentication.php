<?php

namespace Establecimientos\Middleware;
use Establecimientos\Models\Usuario;

class Authentication {
	public function __invoke($request, $response, $next){

		

        if ($_SESSION['aut']!=true) {
            return $response->withStatus(401);
        }

        //$request = $request->withAttribute('user_id', $user->details->id);
        $response = $next($request, $response);

        return $response;
	}
}