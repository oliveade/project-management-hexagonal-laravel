<?php

namespace Tests\Unit\Domain;

use App\Domain\Project\Entity\Task;
use App\Domain\Project\ValueObject\TaskStatus;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function test_task_is_created_with_todo_status(): void
    {
        $task = new Task('My task');

        $this->assertEquals(TaskStatus::TODO, $task->status());
    }

    public function test_task_can_be_started(): void
    {
        $task = new Task('My task');

        $task->start();

        $this->assertEquals(TaskStatus::IN_PROGRESS, $task->status());
    }

    public function test_task_can_be_completed(): void
    {
        $task = new Task('My task');

        $task->start();
        $task->complete();

        $this->assertEquals(TaskStatus::DONE, $task->status());
    }
}
