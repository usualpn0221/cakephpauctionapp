<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->Charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $this->name , '/' , $this->request->auction ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <?= $this->Html->css('base.css') ?>
  <?= $this->Html->css('auction.css') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body>
  <nav class="top-bar titlebar" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns name">
      <li>
          <h1><?= $this->Html->link(__('Auction! ['.$authuser['username'].']'),['auction' => 'index']) ?>
          </h1>
      </li>
    </ul>
    <div class="top-bar-secton">
      <ul class="right">
        <li><a target="_blank" href="https://plus.google.com/+TuyanoSYODA">about</a>
        </li>
      </ul>
    </div>
  </nav>
  <?= $this->Flash->render() ?>
  <div class="container clearfix">
    <div class="auctions index medium-9 columns content">
      <?= $this->fetch('content') ?>
    </div>
    <nav class="large-2 medium-3 columns sidebar" id="actions-sidebar">
      <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('あなたの落札情報'),['action' => 'home']) ?></li>
        <li><?= $this->Html->link(__('あなたの出品情報'),['action' => 'home2']) ?></li>
        <li><?= $this->Html->link(__('商品を出品する'),['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('商品リストを見る'),['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('logout'), ['action' => 'logout']) ?> </li>
      </ul>
    </nav>
  </div>
  <footer>
  </footer>
</body>
</html>
