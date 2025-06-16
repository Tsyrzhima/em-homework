<?php

namespace Architecture\Repositories;

interface UserRepositoryInterface
{
    public function getAll(): ?array;
}