<?php

namespace App\Application\UseCase\AddTask;

use App\Domain\Project\ValueObject\ProjectId;

final class AddTaskCommand
{
    public function __construct(
        public readonly ProjectId $projectId,
        public readonly string $title
    ) {}
}
