<?php

namespace App\Domain\Project\Entity;

use App\Domain\Project\ValueObject\ProjectId;

final class Project
{
    private ProjectId $id;
    private string $name;

    /** @var Task[] */
    private array $tasks = [];

    public function __construct(ProjectId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
    }

    public function tasks(): array
    {
        return $this->tasks;
    }

    public function id(): ProjectId
    {
        return $this->id;
    }
}
