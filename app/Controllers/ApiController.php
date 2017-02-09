<?php
namespace Demo\Controllers;

class ApiController
{
	public function show()
	{
		// The variable authenticated is set to true in the ApiVerification middleware class.
		response()->json([
            'authenticated' => request()->authenticated
        ]);
	}

}