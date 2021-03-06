<?php
\OCP\Util::addStyle('polls', 'page0');
\OCP\Util::addScript('polls', 'page0');
?>

<form name="create_poll" method="POST">
	<input type="hidden" name="j" value="page1"/>

	<div class="new_poll">
		<h1><?php p($l->t('Create new poll')); ?></h1>
		<label for="text_title" class="label_h1 input_title"><?php p($l->t('Title')); ?></label>
		<input type="text" id="text_title" name="text_title"/>
		<label for="text_desc" class="label_h1 input_title"><?php p($l->t('Description')); ?></label>
		<textarea cols="50" rows="5" id="text_desc" name="text_desc"></textarea>

		<div class="input_title"><?php p($l->t('Access')); ?></div>

		<input type="radio" name="radio_pub" id="private" value="registered" checked />
		<label for="private"><?php p($l->t('Registered users only')); ?></label>

		<input type="radio" name="radio_pub" id="public" value="public">
		<label for="public"><?php p($l->t('Public access')); ?></label>

		<input type="radio" name="radio_pub" id="select" value="select">
		<label for="select">Select...</label>

		<input type="hidden" name="access_group_ids" value="" />

        <br>

		<input type="submit" id="submit_create_poll" value="<?php p($l->t('Next')); ?>" />
	</div>


	<div id="dialog-overlay"></div>
	<div id="dialog-box">
		<div id="dialog-message"></div>

		<table id="table_access">
			<tr>
				<td>
					<table id="table_groups">
						<tr>
							<th>Groups</th>
						</tr>
							<?php

							$groups = OC_Group::getUserGroups(OC_User::getUser());
							foreach($groups as $gid) {
								echo '<tr><td class="cl_group_item">' . $gid . '</td></tr>';
							}

							?>
							?>
					</table>
				</td>
				<td>
					<table id="table_users">
						<tr>
							<th>Users</th>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<a id="button_close_access">Close</a>
	</div>

</form>

