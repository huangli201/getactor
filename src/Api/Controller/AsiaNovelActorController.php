<?php


namespace AsiaNovel\GetActor\Api\Controller;

use Flarum\Extension\ExtensionManager;
use Flarum\Http\RequestUtil;
use Flarum\Tags\Tag;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AsiaNovelActorController implements RequestHandlerInterface
{


    public function __construct()
    {
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $actor = RequestUtil::getActor($request);
        return new JsonResponse([
            'isGuest' => $actor->isGuest()
        ]);
    }

   
}
