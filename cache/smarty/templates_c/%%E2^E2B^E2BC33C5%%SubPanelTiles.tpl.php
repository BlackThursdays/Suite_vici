<?php /* Smarty version 2.6.29, created on 2018-10-19 16:58:37
         compiled from include/SubPanel/tpls/SubPanelTiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/SubPanel/tpls/SubPanelTiles.tpl', 2, false),)), $this); ?>
<br>
    <script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/SubPanel/SubPanelTiles.js'), $this);?>
"></script>
    <script>
        <?php echo '
    if(document.DetailView != null &&
        document.DetailView.elements != null &&
        document.DetailView.elements.layout_def_key != null &&
        typeof document.DetailView.elements[\'layout_def_key\'] != \'undefined\'){
            document.DetailView.elements[\'layout_def_key\'].value = \''; ?>
<?php echo $this->_tpl_vars['layout_def_key']; ?>
<?php echo '\';
    }
        '; ?>

    </script>
            <ul class="noBullet" id="subpanel_list">
            <?php $_from = $this->_tpl_vars['subpanel_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['subpanel_tab']):
?>
                <li class="noBullet" id="whole_subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
">
                    <!--subpanel-title -->
                    <div id="subpanel_title_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" <?php if (empty ( $this->_tpl_vars['sugar_config']['lock_subpanels'] ) || $this->_tpl_vars['sugar_config']['lock_subpanels'] == false): ?> onmouseover="this.style.cursor = 'move';" <?php endif; ?>>
                        <?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['get_form_header']; ?>

                    </div>

                    <!--subpanel-body -->
                    <div cookie_name="<?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['cookie_name']; ?>
" id="subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" style="display:<?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['div_display']; ?>
">

                        <script>document.getElementById("subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" ).cookie_name="<?php echo $this->_tpl_vars['subpanel_tab']['cookie_name']; ?>
";</script>

                        <?php if ($this->_tpl_vars['tabs_properties'][$this->_tpl_vars['i']]['div_display'] != 'none'): ?>
                            <script>SUGAR.util.doWhen("typeof(markSubPanelLoaded) != 'undefined'", function() <?php echo '{ markSubPanelLoaded(\''; ?>
<?php echo $this->_tpl_vars['subpanel_tab']; ?>
<?php echo '\');}'; ?>
);</script>
                                                    <?php endif; ?>

                        <div id="list_subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
"><?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['subpanel_body']; ?>
</div>
                    </div>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>

<?php if ($this->_tpl_vars['show_container']): ?>
    </ul>
    <?php if (! empty ( $this->_tpl_vars['selected_group'] )): ?>
                </td></tr></table>
    <?php endif; ?>
<?php endif; ?>

<?php if (empty ( $this->_tpl_vars['sugar_config']['lock_subpanels'] ) || $this->_tpl_vars['sugar_config']['lock_subpanels'] == false): ?>
        <script>
        <?php echo '
        var SubpanelInit = function() {
            SubpanelInitTabNames('; ?>
<?php echo $this->_tpl_vars['tab_names']; ?>
<?php echo ');
        }
        var SubpanelInitTabNames = function(tabNames) {
            subpanel_dd = new Array();
            j = 0;
            for(i in tabNames) {
                subpanel_dd[j] = new ygDDList(\'whole_subpanel_\' + tabNames[i]);
                subpanel_dd[j].setHandleElId(\'subpanel_title_\' + tabNames[i]);
                subpanel_dd[j].onMouseDown = SUGAR.subpanelUtils.onDrag;
                subpanel_dd[j].afterEndDrag = SUGAR.subpanelUtils.onDrop;
                j++;
            }
            YAHOO.util.DDM.mode = 1;
        }
        currentModule = \''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '\';
        SUGAR.util.doWhen(
                "typeof(SUGAR.subpanelUtils) == \'object\' && typeof(SUGAR.subpanelUtils.onDrag) == \'function\'" +
                " && document.getElementById(\'subpanel_list\')",
                SubpanelInit
        );
        '; ?>

    </script>
<?php endif; ?>
<script>
    var ModuleSubPanels = <?php echo $this->_tpl_vars['module_sub_panels']; ?>
;
    <?php echo '

    var updateSubpanelGroup = function() {
        // Filter subpanels to show the current tab
        if (typeof SUGAR.subpanelUtils.currentSubpanelGroup !== "undefined") {
            SUGAR.subpanelUtils.loadSubpanelGroup(SUGAR.subpanelUtils.currentSubpanelGroup);
            clearCheckSubpanelGroup();
        }
    };

    var checkSubpanelGroup =  setInterval(updateSubpanelGroup, 100);

    var clearCheckSubpanelGroup = function() {
        clearInterval(checkSubpanelGroup);
    };
    '; ?>

</script>

    