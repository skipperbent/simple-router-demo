<?php
namespace Demo\Controllers;

use Pecee\Controllers\IResourceController;

class ApiController implements IResourceController
{
    /**
     * @throws \Pecee\Exceptions\InvalidArgumentException
     */
    public function show($id): void
	{
		// The variable authenticated is set to true in the ApiVerification middleware class.
		response()->json([
            'authenticated' => request()->authenticated
        ]);
	}

    public function index(): void
    {
        throw new \ErrorException('This is an exception thrown');
    }

    public function store(): void
    {
        response()->json([
            'method' => 'store'
        ]);
    }

    public function create(): void
    {
        response()->json([
            'method' => 'create'
        ]);
    }

    /**
     * View
     * @param mixed $id
     */
    public function edit($id): void
    {
        response()->json([
            'method' => sprintf('edit: %s', $id),
        ]);
    }

    /**
     * @param mixed $id
     */
    public function update($id): void
    {
        response()->json([
            'method' => sprintf('update: %s', $id),
        ]);
    }

    /**
     * @param mixed $id
     */
    public function destroy($id): void
    {
        response()->json([
            'method' => sprintf('destroy: %s', $id),
        ]);
    }
}