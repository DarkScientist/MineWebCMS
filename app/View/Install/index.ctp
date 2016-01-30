<div class="col-xs-12 col-sm-9">

    <div class="tab-content">
        <div class="tab-pane active" id="tabsleft-tab1">
            <h1><?= $Lang->get('INSTALL__STEP_1_TITLE') ?></h1>
            <p><?= $Lang->get('INSTALL__STEP_1_DESC') ?></p>
            <br>
            <p>
                <?php 
                $write = is_writable(ROOT);
                $write_config = is_writable(ROOT.'/config/');
                $write_tmp = is_writable(ROOT.'/app/tmp/');
                $write_plugin = is_writable(ROOT.'/app/Plugin/');
                if($write && $write_config && $write_tmp && $write_plugin) { ?>
                    <form id="step1">
                        <div class="ajax-msg-step1"></div>
                        <?php if($step1_ok) { ?>
                            <input type="hidden" name="step1" value="true">
                        <?php } ?>
                        <div class="form-group">
                            <label>License key</label>
                            <input type="text" name="key" class="form-control"<?php if($step1_ok) { ?> value="***********************" disabled<?php } ?>>
                        </div>
                        <ul class="pager wizard">
                            <li class="previous disabled"><a href="javascript:;"><?= $Lang->get('GLOBAL__PREVIOUS') ?></a></li>
                            <li class="next" style="display: inline;"><a id="tabsleft-link" href="javascript:;"><?= $Lang->get('GLOBAL__NEXT') ?></a></li>
                            <li class="next finish hidden" style="display: none;"><a href="javascript:;"><?= $Lang->get('GLOBAL__END') ?></a></li>
                        </ul>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-danger"><?= $Lang->get('CANT_WRITE') ?></div>
                <?php } ?>
            </p>
        </div>
        <div class="tab-pane" id="tabsleft-tab2">
            <h1><?= $Lang->get('INSTALL__STEP_2_TITLE') ?></h1>
            <p><?= $Lang->get('INSTALL__STEP_2_DESC') ?></p>
            <p>
                <form id="step3">
                    <div class="ajax-msg-step3"></div>
                    <div class="form-group">
                        <label><?= $Lang->get('USER__USERNAME') ?></label>
                        <input type="text" class="form-control" name="pseudo"<?php if(!empty($admin_pseudo)) { echo ' value="'.$admin_pseudo.'"'; } ?> placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
                      </div>
                      <div class="form-group">
                        <label><?= $Lang->get('USER__PASSWORD') ?></label>
                        <input type="password" class="form-control" name="password"<?php if(!empty($admin_password)) { echo ' value="*********"'; } ?> placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
                      </div>
                      <div class="form-group">
                        <label><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
                        <input type="password" class="form-control" name="password_confirmation"<?php if(!empty($admin_password)) { echo ' value="*********"'; } ?> placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
                      </div>
                      <div class="form-group">
                        <label><?= $Lang->get('USER__EMAIL') ?></label>
                        <input type="email" class="form-control" name="email"<?php if(!empty($admin_email)) { echo ' value="'.$admin_email.'"'; } ?> placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
                      </div>
                       <?php if(!empty($admin_pseudo)) { ?>
                            <input type="hidden" name="step3" value="true">
                        <?php } ?>
                        <div id="input"></div>
                        <li class="next finish hidden" style="display: none;"><a href="javascript:;"><?= $Lang->get('GLOBAL__END') ?></a></li>
                                        <ul class="pager wizard">
                        <li class="previous disabled"><a href="javascript:;"><?= $Lang->get('GLOBAL__PREVIOUS') ?></a></li>
                        <li class="next" style="display: inline;"><a id="tabsleft-link" href="javascript:;"><?= $Lang->get('GLOBAL__NEXT') ?></a></li>
                        <li class="next finish hidden" style="display: none;"><a href="javascript:;"><?= $Lang->get('GLOBAL__END') ?></a></li>
                    </ul>
                </form>
            </p>
        </div>
        <div class="tab-pane" id="tabsleft-tab3">
            <h1><?= $Lang->get('INSTALL__STEP_3_TITLE') ?></h1>
            <div class="alert alert-success"><?= $Lang->get('INSTALL__STEP_3_DESC') ?></div>
            <p>
                <a href="<?= $this->Html->url(array('controller' => 'install', 'action' => 'end')) ?>" class="btn btn-block btn-success"><?= $Lang->get('INSTALL__GO_TO_INDEX') ?></a>
                <ul class="pager wizard">
                    <li class="previous disabled"><a href="javascript:;"><?= $Lang->get('GLOBAL__PREVIOUS') ?></a></li>
                    <li class="next" style="display: inline;"><a id="tabsleft-link" href="javascript:;"><?= $Lang->get('GLOBAL__NEXT') ?></a></li>
                </ul>
            </p>
        </div>
        
        <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
        </div>

        
    </div>
          
</div><!-- /.col-xs-12 main -->