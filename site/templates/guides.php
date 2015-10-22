<?php snippet('header') ?>

<main class="main text" role="main">

  <h1 class="alpha"><?php echo $page->title() ?></h1>

  <ul>
    <?php foreach($page->children()->visible() as $item): ?>
    <li>
      <h2 class="delta"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
    </li>
    <?php endforeach ?>
  </ul>

</main>

<?php snippet('footer') ?>
