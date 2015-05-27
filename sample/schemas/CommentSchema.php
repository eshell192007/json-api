<?php

/**
 * Copyright 2015 info@neomerx.com (www.neomerx.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use \Neomerx\JsonApi\Schema\SchemaProvider;

/**
 * @package Neomerx\Samples\JsonApi
 */
class CommentSchema extends SchemaProvider
{
    protected $resourceType = 'comments';
    protected $baseSelfUrl  = 'http://example.com/comments/';

    protected $isShowSelfInIncluded = true;

    public function getId($comment)
    {
        /** @var Comment $comment */
        return $comment->commentId;
    }

    public function getAttributes($comment)
    {
        /** @var Comment $comment */
        return [
            'body' => $comment->body,
        ];
    }

    public function getRelationships($comment)
    {
        /** @var Comment $comment */
        return [
            'author' => [self::DATA => $comment->author],
        ];
    }
}
