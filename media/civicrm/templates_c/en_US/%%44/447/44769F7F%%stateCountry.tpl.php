<?php /* Smarty version 2.6.26, created on 2012-11-22 19:02:58
         compiled from CRM/common/stateCountry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/common/stateCountry.tpl', 44, false),)), $this); ?>
<?php if ($this->_tpl_vars['config']->stateCountryMap): ?>
<script language="javaScript" type="text/javascript">
<?php $_from = $this->_tpl_vars['config']->stateCountryMap; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stateCountryMap']):
?>
  <?php if ($this->_tpl_vars['stateCountryMap']['country'] && $this->_tpl_vars['stateCountryMap']['state_province']): ?>
    <?php echo '
    cj(function() {
        countryID       = '; ?>
"<?php echo $this->_tpl_vars['stateCountryMap']['country']; ?>
"<?php echo '
        // sometimes we name != id, hence if element does not exists
        // fetch the id
        if ( cj( \'#\' + countryID ).length == 0 ) {
          countryID = cj( \'select[name="\' + countryID + \'"]\' ).prop(\'id\');
        }

        stateProvinceID = '; ?>
"<?php echo $this->_tpl_vars['stateCountryMap']['state_province']; ?>
"<?php echo '
        if ( cj( \'#\' + stateProvinceID ).length == 0 ) {
          stateProvinceID = cj( \'select[name="\' + stateProvinceID + \'"]\' ).prop(\'id\');
        }

        callbackURL     = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/jqState','h' => 0), $this);?>
"<?php echo '

        cj( \'#\' + countryID ).chainSelect( \'#\' + stateProvinceID, callbackURL, null );
    });
    '; ?>

  <?php endif; ?>
  
  <?php if ($this->_tpl_vars['stateCountryMap']['state_province'] && $this->_tpl_vars['stateCountryMap']['county']): ?>
    <?php echo '
    cj(function() {
        stateProvinceID = '; ?>
"<?php echo $this->_tpl_vars['stateCountryMap']['state_province']; ?>
"<?php echo '
        if ( cj( \'#\' + stateProvinceID ).length == 0 ) {
          stateProvinceID = cj( \'select[name="\' + stateProvinceID + \'"]\' ).prop(\'id\');
        }

        countyID       = '; ?>
"<?php echo $this->_tpl_vars['stateCountryMap']['county']; ?>
"<?php echo '
        if ( cj( \'#\' + countyID ).length == 0 ) {
          countyID = cj( \'select[name="\' + countyID + \'"]\' ).prop(\'id\');
        }

        callbackURL     = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/jqCounty','h' => 0), $this);?>
"<?php echo '
        
        cj( \'#\' + stateProvinceID ).chainSelect( \'#\' + countyID, callbackURL, null );
    });
    '; ?>

  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</script>
<?php endif; ?>