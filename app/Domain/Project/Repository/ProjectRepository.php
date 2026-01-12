<?php

namespace App\Domain\Project\Repository;

use App\Domain\Project\Entity\Project;
use App\Domain\Project\ValueObject\ProjectId;

interface ProjectRepository
{
    public function save(Project $project): void;

    public function getById(ProjectId $id): ?Project;
}
