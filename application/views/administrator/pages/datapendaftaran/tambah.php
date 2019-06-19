<!-- page content -->
<div class="right_col" role="main">
<div class="">
<div class="page-title">
    <div class="title_left">
    <h3>Form advanced</h3>
    </div>

    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
        </span>
        </div>
    </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <!-- form input mask -->
    <div class="col-md-6 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Input Mask</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
            </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left">

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Mask</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone mask</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Custom Mask</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Serial Number</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">TaxID Mask</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Credit Card Mask</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>
            </div>
            <div class="ln_solid"></div>

            <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            </div>

        </form>
        </div>
    </div>
    </div>
    <!-- /form input mask -->

    <!-- form color picker -->
    <div class="col-md-6 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
        <h2>Color Picker</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
            </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left">

            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="demo1 form-control" value="#5367ce" />
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="input-group demo2">
                <input type="text" value="#e01ab5" class="form-control" />
                <span class="input-group-addon"><i></i></span>
                </div>
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Horizontal bar</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control demo colorpicker-element" data-horizontal="true" id="demo_forceformat" value="#8fff00">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Vertical bar</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control demo colorpicker-element" id="demo_forceformat3" value="#8fff00">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Inline picker</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="well">
                <div id="demo_cont" class="demo demo-auto inl-bl colorpicker-element" data-container="#demo_cont" data-color="rgba(150,216,62,0.55)" data-inline="true"></div>
                <div class="demo demo-auto inl-bl colorpicker-element" data-container="true" data-color="rgb(50,216,62)" data-inline="true" style="margin-left:20px;"></div>
                </div>
            </div>
            </div>

        </form>
        </div>
    </div>
</div>