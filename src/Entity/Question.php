<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idCategorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?string
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?string $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getQuestion(): ?int
    {
        return $this->question;
    }

    public function setQuestion(int $question): self
    {
        $this->question = $question;

        return $this;
    }
}
