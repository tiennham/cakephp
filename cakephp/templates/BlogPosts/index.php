<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BlogPost> $blogPosts
 */
?>
<div class="blogPosts index content">
    <?= $this->Html->link(__('New Blog Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Blog Posts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blogPosts as $blogPost): ?>
                <tr>
                    <td><?= $this->Number->format($blogPost->id) ?></td>
                    <td><?= h($blogPost->name) ?></td>
                    <td><?= $blogPost->has('category') ? $this->Html->link($blogPost->category->name, ['controller' => 'Categories', 'action' => 'view', $blogPost->category->id]) : '' ?></td>
                    <td><?= h($blogPost->created) ?></td>
                    <td><?= h($blogPost->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $blogPost->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blogPost->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
