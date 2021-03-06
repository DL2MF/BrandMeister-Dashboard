    <div class="modal hide fade" id="modal_config">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#config_tab_general" data-toggle="tab">General</a></li>
                    <li><a href="#config_tab_lh" data-toggle="tab">LastHeard</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="config_tab_general">
                    <form class="form-horizontal">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label" for="optionsCheckbox2"> Display alerts</label> 
                          <div class="controls">
                            <label class="checkbox"><input type="checkbox" id="alerts_enabled"></label>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">API Timeout </label>
                          <div class="controls">
                            <input type="input" id="json_timeout">
                            <p class="help-block">Maximum timeout is 60 seconds</p>
                          </div>
                        </div>
                      <fieldset>
                    </form>
                  </div>
                  <div class="tab-pane" id="config_tab_lh">
                    <div class="checkbox">
                      <label><input type="checkbox" id="datetime"> Display date/time per QSO</label>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" onclick="saveSettings();" class="btn btn-primary">Save changes</a>
        </div>
    </div>
