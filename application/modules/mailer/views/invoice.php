<form method="post" class="form-horizontal">

	<div class="headerbar">
		<h1><?php echo lang('email_invoice'); ?></h1>
		<div class="pull-right">
            <button class="btn btn-primary" name="btn_send" value="1"><i class="icon-envelope icon-white"></i> <?php echo lang('send'); ?></button>
            <button class="btn btn-danger" name="btn_cancel" value="1"><i class="icon-remove icon-white"></i> <?php echo lang('cancel'); ?></button>
		</div>
	</div>
	
	<div class="content">
		
		<?php $this->layout->load_view('layout/alerts'); ?>

        <div class="control-group">
            <label class="control-label"><?php echo lang('invoice_template'); ?>: </label>
            <div class="controls">
                <select name="invoice_template">
                    <option value=""></option>
                    <?php foreach ($invoice_templates as $invoice_template) { ?>
                    <option value="<?php echo $invoice_template; ?>" <?php if ($this->mdl_settings->setting('default_invoice_template') == $invoice_template) { ?>selected="selected"<?php } ?>><?php echo $invoice_template; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('from_name'); ?>: </label>
            <div class="controls">
                <input type="text" name="from_name" id="from_name" value="<?php echo $invoice->user_name; ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('from_email'); ?>: </label>
            <div class="controls">
                <input type="text" name="from_email" id="from_email" value="<?php echo $invoice->user_email; ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('to_email'); ?>: </label>
            <div class="controls">
                <input type="text" name="to_email" id="to_email" value="<?php echo $invoice->client_email; ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('cc'); ?>: </label>
            <div class="controls">
                <input type="text" name="to_cc" id="to_cc" value="">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('bcc'); ?>: </label>
            <div class="controls">
                <input type="text" name="to_bcc" id="to_bcc" value="">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('subject'); ?>: </label>
            <div class="controls">
                <input type="text" name="subject" id="subject" value="<?php echo lang('invoice'); ?> #<?php echo $invoice->invoice_number; ?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('body'); ?>: </label>
            <div class="controls">
                <textarea name="body" style="width: 450px; height: 200px;"><?php echo $body; ?></textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo lang('guest_url'); ?>: </label>
            <div class="controls">
                <?php echo auto_link(site_url('guest/view/invoice/' . $invoice->invoice_url_key)); ?>
            </div>
        </div>

	</div>

</form>