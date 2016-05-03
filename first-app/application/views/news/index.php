<a class="pull-right" href="<?php echo site_url('news/create'); ?>">
  <div id="tt1" class="icon material-icons">add</div>
  <div class="mdl-tooltip" for="tt1">
    add New
  </div>
</a>

<div class="news">
<?php foreach ($news as $news_item): ?>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp news-item">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text"><?php echo $news_item->title; ?></h2>
    </div>
    <div class="mdl-card__supporting-text">
      <?php echo $news_item->text; ?>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
          href="<?php echo site_url('news/'.$news_item->slug); ?>">
        View new
      </a>
    </div>
    <div class="mdl-card__menu">
      <a href="<?php echo site_url('news/delete/'.$news_item->id); ?>">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">delete_forever</i>
        </button>
      </a>
    </div>
  </div>
<?php endforeach; ?>
</div>
