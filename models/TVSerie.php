<?php
require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';

class TVSerie extends Production
{
    public $numero_stagioni;

    function __construct(string $_title, string $_language, int $_vote, Genre $_genre, int $numero_stagioni)
    {
 
        parent::__construct($_title, $_language, $_vote, $_genre);

        $this->numero_stagioni = $numero_stagioni;
    }

    function getAdditionalData() {
        return [
            'stagioni' => $this->numero_stagioni
        ];
    }
}