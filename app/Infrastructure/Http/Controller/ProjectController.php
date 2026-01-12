<?php

namespace App\Infrastructure\Http\Controller;

use App\Application\UseCase\CreateProject\CreateProjectCommand;
use App\Application\UseCase\CreateProject\CreateProjectHandler;
use App\Application\UseCase\AddTask\AddTaskCommand;
use App\Application\UseCase\AddTask\AddTaskHandler;
use App\Domain\Project\ValueObject\ProjectId;
use Illuminate\Http\Request;

final class ProjectController
{
    public function create(Request $request, CreateProjectHandler $handler)
    {
        $command = new CreateProjectCommand(
            $request->input('name')
        );

        $projectId = $handler->handle($command);

        return response()->json([
            'project_id' => $projectId->value()
        ], 201);
    }

    public function addTask(string $projectId, Request $request, AddTaskHandler $handler)
    {
        $command = new AddTaskCommand(
            new ProjectId($projectId),
            $request->input('title')
        );

        $handler->handle($command);

        return response()->json([], 204);
    }
}
