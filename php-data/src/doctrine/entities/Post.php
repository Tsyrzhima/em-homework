<?php

namespace php-data\entities-data\entities;

use Doctrine\ORM\Mapping as ORM;
use phpuse;

phpuse phpuse phpuse phpuse;

phpuse phpuse php

#[ORM\Entity]
#[ORM\Table(name: "posts")]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string")]
    private string $title;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "posts")]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

}