<?php

declare(strict_types=1);

namespace Yiisoft\Html\Tag;

use Yiisoft\Html\Tag\Base\ContentTag;

/**
 * @link https://www.w3.org/TR/html52/grouping-content.html#the-p-element
 */
final class P extends ContentTag
{
    protected function getName(): string
    {
        return 'p';
    }
}