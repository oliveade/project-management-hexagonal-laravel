<?php

namespace Tests\Unit\Application;

use App\Domain\Project\Entity\Project;
use App\Domain\Project\Repository\ProjectRepository;
use App\Domain\Project\ValueObject\ProjectId;

class FakeProjectRepository implements ProjectRepository
{
    private array $projects = [];

    public function save(Project $project): void
    {
        $this->projects[$project->id()->value()] = $project;
    }

    public function getById(ProjectId $id): ?Project
    {
        return $this->projects[$id->value()] ?? null;
    }
}
