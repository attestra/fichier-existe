<?php

declare(strict_types=1);

namespace Attestra\FichierExiste\Tests;

use Attestra\FichierExiste\FichierExiste;

final class FichierExisteTest extends TestCase
{
    /**
     * @testdox Write as $resultClass with content type $contentType
     * @dataProvider writerProvider
     */
    public function testFichierExiste(): void
    {
        $fichierExiste = new FichierExiste(__DIR__.'/assets/fichier.txt');

        $this->assertTrue($fichierExiste->fichierExiste());
    }

    public function testFichierExistePas(): void
    {
        $fichierExiste = new FichierExiste(__DIR__.'/assets/fichier_existe_pas.txt');

        $this->assertFalse($fichierExiste->fichierExiste());
    }

}
