
<div id="dialog-box">
	<div id="dialog-message"></div>
	<table id="table_access">

		<?php if (isset($url)) : ?>
			<tr><td>asdf</td></tr>
			<tr><td>
				<input type="radio" name="radio_pub" id="private" value="registered" checked />
				<label for="private"><?php p($l->t('Registered users only')); ?></label>
			</td></tr>

			<tr><td>
				<input type="radio" name="radio_pub" id="public" value="public">
				<label for="public"><?php p($l->t('Public access')); ?></label>

			</td></tr>

			<tr><td>
				<input type="radio" name="radio_pub" id="select" value="select">
				<label for="select"><?php p($l->t('Select')); ?></label>
			</td></tr>

		<?php endif; ?>

		<tr>
			<td>
				<div class="scroll_div">
					<table id="table_groups">
							<tr>
								<th><?php p($l->t('Groups')); ?></th>
							</tr>
						<?php $groups = OC_Group::getUserGroups(OC_User::getUser()); ?>
						<?php foreach($groups as $gid) : ?>
							<tr>
								<td class="cl_group_item"><?php echo $gid; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</td>
			<td>
				<div class="scroll_div">
					<table id="table_users">
						<tr>
							<th><?php p($l->t('Users')); ?></th>
						</tr>
						<?php $users = OC_User::getUsers(); ?>
						<?php foreach ($users as $uid) : ?>
							<tr>
								<td class="cl_user_item" id="user_<?php echo $uid; ?>" ><?php echo OCP\User::getDisplayName($uid); ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</td>
		</tr>
	</table>
	<a id="button_close_access"><?php p($l->t('Close')); ?></a>
</div>