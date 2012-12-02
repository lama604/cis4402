<?php /* Smarty version 2.6.26, created on 2012-11-22 19:05:25
         compiled from CRM/PCP/Form/PCP/PCP.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/PCP/Form/PCP/PCP.tpl', 30, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 8): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/PCP/Form/PCP/Delete.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <div id="pcp" class="crm-block crm-form-block crm-pcp-search-form-block">
        <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Campaign Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout-compressed">
	    <tr>
		    <td><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['form']['page_type']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['page_type']['html']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['form']['page_id']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['page_id']['html']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['event_id']['label']; ?>
<br /><?php echo $this->_tpl_vars['form']['event_id']['html']; ?>
</td>
	    </tr>
        </table>
        <div class="crm-submit-buttons"><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</div>
    </div>
<?php endif; ?>