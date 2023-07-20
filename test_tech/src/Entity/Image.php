<?php

// src/Entity/Image.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageUrl;

    /**
     * @ORM\Column(type="text")
     */
    private $imageText;

    // Getter and Setter for imageUrl
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    // Getter and Setter for imageText (if not already present)
     public function getImageText(): ?string
     {
        return $this->imageText;
     }

     public function setImageText(?string $imageText): self
     {
         $this->imageText = $imageText;

     return $this;
     }

    // ... Other getter and setter methods (if applicable)
}

