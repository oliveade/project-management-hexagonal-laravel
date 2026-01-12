<?php

namespace App\Application\UseCase\AddTask;

use App\Domain\Project\Entity\Task;
use App\Domain\Project\Repository\ProjectRepository;

final class AddTaskHandler
{
    public function __construct(
        private ProjectRepository $repository
    ) {}

    public function handle(AddTaskCommand $command): void
    {
        $project = $this->repository->getById($command->projectId);

        if (!$project) {
            throw new \DomainException('Project not found');
        }

        $project->addTask(new Task($command->title));

        $this->repository->save($project);
    }
}
