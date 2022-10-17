<?php

namespace AsiaNovel\GetActor;

use Flarum\Extend;
use Flarum\Api\Serializer\UserSerializer;
use Flarum\Post\Event\Posted;
use Flarum\Post\Event\Restored as PostRestored;
use Flarum\Post\Event\Hidden as PostHidden;
use Flarum\Discussion\Event\Started;
use Flarum\Discussion\Event\Restored as DiscussionRestored;
use Flarum\Discussion\Event\Hidden as DiscussionHidden;
use Flarum\User\Event\Saving;
use Flarum\Likes\Event\PostWasLiked;
use Flarum\Likes\Event\PostWasUnliked;

$extend = [
    (new Extend\Routes('api'))
        ->get('/asianovel/get-actor', 'asianovel.get-actor', Api\Controller\AsiaNovelActorController::class),

];



return $extend;
