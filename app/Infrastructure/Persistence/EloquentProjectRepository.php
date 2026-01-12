<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Project\Entity\Project;
use App\Domain\Project\Repository\ProjectRepository;
use App\Domain\Project\ValueObject\ProjectId;

final class EloquentProjectRepository implements ProjectRepository
{
    public function save(Project $project): void
    {
        // ProjectModel::updateOrCreate(...)
    }

    public function getById(ProjectId $id): ?Project
    {
        return null;
    }
}
