<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?= debug($post) ?>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->PostID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->PostID], ['confirm' => __('Are you sure you want to delete # {0}?', $post->PostID)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->PostID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PostTitle') ?></th>
            <td><?= h($post->PostTitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostAuthor') ?></th>
            <td><?= h($post->PostAuthor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostContent') ?></th>
            <td><?= h($post->PostContent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostDesc') ?></th>
            <td><?= h($post->PostDesc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostThread') ?></th>
            <td><?= h($post->PostThread) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostID') ?></th>
            <td><?= $this->Number->format($post->PostID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostDate') ?></th>
            <td><?= h($post->PostDate) ?></td>
        </tr>
    </table>
</div>
