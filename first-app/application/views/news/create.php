<a href="<?php echo site_url('news/'); ?>">
  <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
    <i class="material-icons">replay</i>
  </button>
</a>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>


    <div class="mdl-textfield mdl-js-textfield">
      <label class="mdl-textfield__label" for="title">Title</label>
      <input class="mdl-textfield__input" type="input" name="title">
    </div>

    <div class="mdl-textfield mdl-js-textfield">
      <label class="mdl-textfield__label" for="text">Text</label>
      <input class="mdl-textfield__input" type="input" name="text">
    </div>

    <input type="submit" name="submit" value="Create news item" />

</form>
