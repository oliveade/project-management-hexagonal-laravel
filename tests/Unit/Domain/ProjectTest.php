<?php

namespace Tests\Unit\Domain;

use App\Domain\Project\Entity\Project;
use App\Domain\Project\Entity\Task;
use App\Domain\Project\ValueObject\ProjectId;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function test_task_can_be_added_to_project(): void
    {
        $project = new Project(ProjectId::generate(), 'Test project');

        $project->addTask(new Task('Task 1'));

        $this->assertCount(1, $project->tasks());
    }
}
