<?php
  use_helper('I18N');

  $icon = '';
  if(sfTwitterBootstrap::getProperty('use_icons_in_button', false))
  {
    $icon = '<i class="icon-off icon-white"></i> ';
  }
?>

<div class="mod login">
  <div class="inner">
    <div class="hd center"></div>
    <div class="bd">
      <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="form-horizontal">
        <?php echo $form->renderHiddenFields(); ?>
        <fieldset class="loginFieldset">
          <legend><?php echo sfTwitterBootstrap::getProperty('site'); ?></legend>
          <?php echo $form['username']->renderRow() ?>
          <?php echo $form['password']->renderRow() ?>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary"><?php echo $icon . __('Sign in') ?></button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
