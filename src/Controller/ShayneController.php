<?php
// src/Controller/ShayneController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShayneController
{
    /**
     * @Route("/", name="shayne_home")
     */
    public function index(): Response
    {
        $html = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>This is Shayne's Symfony project</title>
            </head>
            <body>
                <h1>This is Shayne's Symfony project</h1>
            </body>
            </html>
        HTML;

        return new Response($html);
    }
}