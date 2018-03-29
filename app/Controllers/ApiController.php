<?php
namespace Demo\Controllers;

class ApiController
{
    /**
     * @return string
     * @throws \Pecee\Exceptions\InvalidArgumentException
     */
    public function show(): string
	{
		// The variable authenticated is set to true in the ApiVerification middleware class.
		return response()->json([
            'authenticated' => request()->authenticated
        ]);
	}

}