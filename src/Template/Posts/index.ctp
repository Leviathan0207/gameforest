<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<?php debug($posts); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts index large-9 medium-8 columns content">
    <h3><?= __('Posts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('PostID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostTitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostAuthor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostContent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostDesc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PostThread') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->PostID) ?></td>
                <td><?= h($post->PostTitle) ?></td>
                <td><?= h($post->PostDate) ?></td>
                <td><?= h($post->PostAuthor) ?></td>
                <td><?= h($post->PostContent) ?></td>
                <td><?= h($post->PostDesc) ?></td>
                <td><?= h($post->PostThread) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $post->PostID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->PostID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->PostID], ['confirm' => __('Are you sure you want to delete # {0}?', $post->PostID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
