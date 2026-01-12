<?php

namespace App\Application\UseCase\CreateProject;

use App\Domain\Project\Entity\Project;
use App\Domain\Project\Repository\ProjectRepository;
use App\Domain\Project\ValueObject\ProjectId;

final class CreateProjectHandler
{
    public function __construct(
        private ProjectRepository $repository
    ) {}

    public function handle(CreateProjectCommand $command): ProjectId
    {
        $project = new Project(
            ProjectId::generate(),
            $command->name
        );

        $this->repository->save($project);

        return $project->id();
    }
}
