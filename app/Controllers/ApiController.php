<?php
namespace Demo\Controllers;

use Pecee\Controllers\IResourceController;

class ApiController implements IResourceController
{
    /**
     * @return string
     * @throws \Pecee\Exceptions\InvalidArgumentException
     */
    public function show($id): string
	{
		// The variable authenticated is set to true in the ApiVerification middleware class.
		return response()->json([
            'authenticated' => request()->authenticated
        ]);
	}

    /**
     * @return string|null
     */
    public function index(): ?string
    {
        return response()->json([
            'method' => 'index'
        ]);
    }

    /**
     * @return string|null
     */
    public function store(): ?string
    {
        return response()->json([
            'method' => 'store'
        ]);
    }

    /**
     * @return string|null
     */
    public function create(): ?string
    {
        return response()->json([
            'method' => 'create'
        ]);
    }

    /**
     * View
     * @param mixed $id
     * @return string|null
     */
    public function edit($id): ?string
    {
        return response()->json([
            'method' => sprintf('edit: %s', $id),
        ]);
    }

    /**
     * @param mixed $id
     * @return string|null
     */
    public function update($id): ?string
    {
        return response()->json([
            'method' => sprintf('update: %s', $id),
        ]);
    }

    /**
     * @param mixed $id
     * @return string|null
     */
    public function destroy($id): ?string
    {
        return response()->json([
            'method' => sprintf('destroy: %s', $id),
        ]);
    }
}