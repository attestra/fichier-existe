<?php
declare(strict_types=1);

namespace Attestra\FichierExiste;

final class FichierExiste
{
    private string $filepath;

    public function __construct(
        string $filepath
    ) {
        $this->filepath = $filepath;
    }

    public function fichierExiste(): bool
    {
        return file_exists($this->filepath);
    }

    public function getFilePath(): string
    {
        return $this->filepath;
    }

    public function setFilePath(string $filepath): self
    {
        $this->filepath = $filepath;

        return $this;
    }
}
