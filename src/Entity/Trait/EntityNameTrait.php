<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

trait EntityNameTrait
{
    /**
     * @var string|null
     *
     * @ORM\Column(length=100)
     *
     * @Assert\NotBlank
     * @Assert\Length(max=100)
     */
    private $name;

    /**
     * @var string|null
     *
     * @Gedmo\Slug(fields={"name"})
     *
     * @ORM\Column(length=100, unique=true)
     */
    private $slug;

    public function __toString()
    {
        return $this->name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
}
