<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BlogPost> $blogPosts
 */

foreach ($blogPosts as $blogPost) {
    unset($blogPost->modified);
}
echo json_encode(compact('blogPosts'));
