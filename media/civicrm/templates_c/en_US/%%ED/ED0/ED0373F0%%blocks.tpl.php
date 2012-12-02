<?php /* Smarty version 2.6.26, created on 2012-11-22 19:01:46
         compiled from CRM/Block/blocks.tpl */ ?>
<?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<div class="block <?php echo $this->_tpl_vars['block']['name']; ?>
" id="<?php echo $this->_tpl_vars['block']['id']; ?>
">
   <h2 class="title"><?php echo $this->_tpl_vars['block']['subject']; ?>
</h2>
   <div class="content">
      <?php echo $this->_tpl_vars['block']['content']; ?>

   </div>
</div>
<?php endforeach; endif; unset($_from); ?>