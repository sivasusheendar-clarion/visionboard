<div class="headerbar">
	<h1><?php echo lang('users'); ?></h1>

	<div class="pull-right">
		<a class="btn btn-primary" href="<?php echo site_url('/admin/users/edit'); ?>"><i class="icon-plus icon-white"></i> <?php echo lang('new'); ?></a>
	</div>
	
	<div class="pull-right">
		<?php echo pager(site_url('users/index'), 'mdl_users'); ?>
	</div>

</div>

<?php echo $this->layout->load_view('layout/alerts'); ?>

<table class="table table-striped">

	<thead>
		<tr>
			<th><?php echo lang('name'); ?></th>
            <th><?php echo lang('user_type'); ?></th>
			<th><?php echo lang('email_address'); ?></th>
			<th><?php echo lang('options'); ?></th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($users as $user) { ?>
		<tr>
			<td><?php echo $user->name; ?></td>
            <td></td>
			<td><?php echo $user->email; ?></td>
			<td>
				<div class="options btn-group">
					<a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <?php echo lang('options'); ?></a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo site_url('/admin/users/edit/' . $user->id); ?>">
								<i class="icon-pencil"></i> <?php echo lang('edit'); ?>
							</a>
						</li>
                        <?php if ($user->id <> 1) { ?>
						<li>
							<a href="<?php echo site_url('/users/delete/' . $user->id); ?>" onclick="return confirm('<?php echo lang('delete_record_warning'); ?>');">
								<i class="icon-trash"></i> <?php echo lang('delete'); ?>
							</a>
						</li>
                        <?php } ?>
					</ul>
				</div>
			</td>
		</tr>
		<?php } ?>
	</tbody>

</table>