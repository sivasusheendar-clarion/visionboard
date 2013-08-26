<div class="headerbar">
	<h1><?php echo lang('payments'); ?></h1>

	<div class="pull-right">
		<a class="btn btn-primary" href="<?php echo site_url('payments/form'); ?>"><i class="icon-plus icon-white"></i> <?php echo lang('new'); ?></a>
	</div>
	
	<div class="pull-right">
		<?php echo pager(site_url('payments/index'), 'mdl_payments'); ?>
	</div>

</div>

<?php $this->layout->load_view('layout/alerts'); ?>

<div id="filter_results">
	<?php $this->layout->load_view('payments/partial_payment_table'); ?>
</div>