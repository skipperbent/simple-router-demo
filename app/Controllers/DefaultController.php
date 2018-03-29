<?php
namespace Demo\Controllers;

class DefaultController
{
	public function home(): string
	{
		// implement
		return sprintf('DefaultController -> index (?fun=%s)', input('fun'));
	}

	public function contact(): string
	{
        return 'DefaultController -> contact';
	}

	public function companies($id = null): string
	{
        return 'DefaultController -> companies -> id: ' . $id;
	}

    public function notFound(): string
    {
        return 'Page not found';
    }

}