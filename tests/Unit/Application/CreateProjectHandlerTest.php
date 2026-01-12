<?php

namespace Tests\Unit\Application;

use App\Application\UseCase\CreateProject\CreateProjectCommand;
use App\Application\UseCase\CreateProject\CreateProjectHandler;
use PHPUnit\Framework\TestCase;

class CreateProjectHandlerTest extends TestCase
{
    public function test_project_is_created(): void
    {
        $repository = new FakeProjectRepository();
        $handler = new CreateProjectHandler($repository);

        $command = new CreateProjectCommand('My project');
        $projectId = $handler->handle($command);

        $this->assertNotNull($projectId);
        $this->assertNotNull($repository->getById($projectId));
    }
}
