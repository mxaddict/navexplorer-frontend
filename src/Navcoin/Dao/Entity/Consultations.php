<?php

namespace App\Navcoin\Dao\Entity;

use App\Navcoin\Common\Entity\IteratorEntity;
use App\Navcoin\Common\Entity\IteratorEntityInterface;
use App\Navcoin\Common\Entity\Paginated;

class Consultations extends IteratorEntity implements IteratorEntityInterface
{
    use Paginated;

    public function setSupportedTypes()
    {
        $this->supportedTypes = [Consultation::class];
    }

    public function limit(int $limit) {
        $this->setElements(array_slice($this->getElements(), 0, $limit));
    }
}

