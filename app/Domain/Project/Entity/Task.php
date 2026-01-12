<?php

namespace App\Domain\Project\Entity;

use App\Domain\Project\ValueObject\TaskStatus;

final class Task
{
    private string $title;
    private TaskStatus $status;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->status = TaskStatus::TODO;
    }

    public function start(): void
    {
        if ($this->status !== TaskStatus::TODO) {
            throw new \DomainException('Task cannot be started');
        }

        $this->status = TaskStatus::IN_PROGRESS;
    }

    public function complete(): void
    {
        if ($this->status !== TaskStatus::IN_PROGRESS) {
            throw new \DomainException('Task cannot be completed');
        }

        $this->status = TaskStatus::DONE;
    }

    public function status(): TaskStatus
    {
        return $this->status;
    }
}
