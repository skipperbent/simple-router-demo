<?php
namespace Demo\Middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class ApiVerification implements IMiddleware
{
	public function handle(Request $request) : void
	{
		// Do authentication
		$request->authenticated = true;
	}

}