<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $projets = [
            [
                'titre' => 'Mon portfolio',
                'description' => 'Présentation de mon profil et de mes compétences.',
                'technologie' => 'HTML, CSS, JavaScript, Laravel',
            ],
            [
                'titre' => 'Formulaire de contact',
                'description' => 'Un formulaire pour permettre aux visiteurs de me contacter.',
                'technologie' => 'Laravel, PHP, MySQL',
            ],
            [
                'titre' => 'Site web personnel',
                'description' => 'Un site web pour présenter mes réalisations.',
                'technologie' => 'HTML, CSS, JavaScript',
            ],
        ];

        return view('portfolio', compact('projets'));
    }
}
