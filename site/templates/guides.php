<?php snippet('header') ?>

<main class="main text" role="main">

  <h1 class="alpha"><?php echo $page->title() ?></h1>

  <div class="guides">
    <?php foreach($page->children()->visible() as $item): ?>
    <article class="guide col-2-6">
      <div class="guide-box">
        <h1 class="beta"><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h1>
        <div class="guide-description">
          <?php echo $item->description()->kt() ?>
        </div>
      </div>
    </article>
    <?php endforeach ?>
  </div> 

</main>

<?php snippet('footer') ?>
