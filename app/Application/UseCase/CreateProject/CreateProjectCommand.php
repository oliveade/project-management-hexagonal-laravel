<?php

namespace App\Application\UseCase\CreateProject;

final class CreateProjectCommand
{
    public function __construct(
        public readonly string $name
    ) {}
}
