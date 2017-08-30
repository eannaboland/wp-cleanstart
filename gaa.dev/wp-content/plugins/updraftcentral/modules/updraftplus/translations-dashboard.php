<?php

if (!defined('UD_CENTRAL_DIR')) die('Security check');

global $wp_locale;
$day_selector = '';
for ($day_index = 0; $day_index <= 6; ++$day_index) {
	$selected = '';
	$day_selector .= "\n\t<option value='".$day_index."' $selected>".$wp_locale->get_weekday($day_index).'</option>';
}

$mday_selector = '';
for ($mday_index = 1; $mday_index <= 28; ++$mday_index) {
	$selected = '';
	$mday_selector .= "\n\t<option value='".$mday_index."' $selected>".$mday_index.'</option>';
}

// Dashboard translations for the UpdraftPlus module
return array(
	'create' => __('Create', 'updraftcentral'),
	'nofileschosen' => __('You have chosen to backup files, but no file entities have been selected', 'updraftcentral'),
	'notableschosen' => __('You have chosen to backup a database, but no tables have been selected', 'updraftcentral'),
	'excludedeverything' => __('If you exclude both the database and the files, then you have excluded everything!', 'updraftcentral'),
	'backup_start_failed' => __('The backup appears not to have started.', 'updraftcentral').' '.__("You may find more information in your web browser's JavaScript console.", 'updraftcentral'),
	'backupstarted' => __('The backup has begun', 'updraftcentral'),
	'lastlogline' => __('Last log message', 'updraftcentral'),
	'backupnow' => __('Backup now', 'updraftcentral'),
	'logfile' => __('Log file', 'updraftcentral'),
	'downloadlog' => __('Download log', 'updraftcentral'),
	'delete' => __('Delete', 'updraftcentral'),
	'version_none' => __('none', 'updraftcentral'),
	'deleted' => __('Deleted', 'updraftcentral'),
	'entity_deleted' => __('This item has been deleted.', 'updraftcentral'),
	'needs_download' => __('This item needs downloading from the remote storage (which will be attempted).', 'updraftcentral'),
	'deletebackupset' => __('Delete backup set', 'updraftcentral'),
	'delete_not_found' => __('Could not find that job - perhaps it has already finished?', 'updraftcentral'),
	'delete_deleted' => __('Job deleted', 'updraftcentral'),
	'existingbackups' => __('Existing Backups', 'updraftcentral'),
	'rescanning' => __('Rescanning (looking for backups that you have uploaded manually into the internal backup store)...', 'updraftcentral'),
	'rescanningremote' => __('Rescanning remote and local storage for backup sets...', 'updraftcentral'),
	'raw' => __('Raw backup history', 'updraftcentral'),
	'delete_areyousure_singular' => sprintf(__('Are you sure that you wish to remove %s from UpdraftPlus?', 'updraftcentral'), __('this backup set', 'updraftcentral')),
	'delete_areyousure_plural' => sprintf(__('Are you sure that you wish to remove %s from UpdraftPlus?', 'updraftcentral'), __('these backup sets', 'updraftcentral')),
	'also_delete_from_remote' => __('Also delete from remote storage', 'updraftcentral'),
	'deleting_please_allow_time' => __('Deleting... please allow time for any communications with the remote storage to complete.', 'updraftcentral'),
	'download_verb' => _x('Download', '(verb)', 'updraftcentral'),
	'begun_looking' => __('Begun looking for this entity', 'updraftcentral'),
	'download_start_failed' => __('The download failed to start', 'updraftcentral'),
	'file_ready' => __('File ready.', 'updraftcentral'),
	'you_should' => __('You should:', 'updraftcentral'),
	'delete_from_server' => __('Delete from your web server', 'updraftcentral'),
	'download_to_computer' => __('Download to your computer', 'updraftcentral'),
	'and_then' => __('and then, if you wish,', 'updraftcentral'),
	'download_failed' => __('The download request did not succeed.', 'updraftcentral'),
	'restore_backup' => __('Restore backup', 'updraftcentral'),
	'pre_restore_message' => __("You will now be taken to the site's dashboard, to allow you to choose restoration options. Note that depending upon what you restore, and the state of the site when the backup was taken, restoring may cause your UpdraftCentral connection to be broken. In that case, you will need to re-create it after restoring.", 'updraftcentral'),
	'day_selector' => $day_selector,
	'mday_selector' => $mday_selector,
	'day' => __('day', 'updraftcentral'),
	'in_the_month' => __('in the month', 'updraftcentral'),
	'days' => __('day(s)', 'updraftcentral'),
	'hours' => __('hour(s)', 'updraftcentral'),
	'weeks' => __('week(s)', 'updraftcentral'),
	'for_backups_older_than' => __('For backups older than', 'updraftcentral'),
	'enter_the_directory' => __('Enter the directory:', 'updraftcentral'),
	'remove' => __('Remove', 'updraftcentral'),
	'send_only_on_warnings' => __('Send a report only when there are warnings/errors', 'updraftcentral'),
	'whole_backup' => __('When the Email storage method is enabled, also send the entire backup', 'updraftcentral'),
	'email_size_limits' => esc_attr(sprintf(__('Be aware that mail servers tend to have size limits; typically around %s Mb; backups larger than any limits will likely not arrive.', 'updraftcentral'), '10-20')),
	'host' => __('Host', 'updraftcentral'),
	'username' => __('Username', 'updraftcentral'),
	'password' => __('Password', 'updraftcentral'),
	'database' => __('Database', 'updraftcentral'),
	'table_prefix' => __('Table prefix', 'updraftcentral'),
	'backup_tables_with_prefixes' => __('If you enter a table prefix, then only tables that begin with this prefix will be backed up.', 'updraftcentral'),
	'test_connection' => __('Test connection...', 'updraftcentral'),
	'backup_external_database' => __('Backup external database', 'updraftcentral'),
	'testing' => __('Testing...', 'updraftcentral'),
	'test_settings' => __('Test %s Settings', 'updraftcentral'),
	'testing_settings' => __('Testing %s Settings...', 'updraftcentral'),
	'settings_test_result' => __('%s settings test result:', 'updraftcentral'),
	'counting' => __('Counting...', 'updraftcentral'),
	'update_quota_count' => __('Update quota count', 'updraftcentral'),
	'disconnecting' => __('Disconnecting...', 'updraftcentral'),
	'connect' => __('Connect', 'updraftcentral'),
	'connecting' => __('Connecting...', 'updraftcentral'),
	'disconnect' => __('Disconnect', 'updraftcentral'),
	'create_new_iam_user_and_bucket' => __('Create new IAM user and S3 bucket', 'updraftcentral'),
	'create' => __('Create', 'updraftcentral'),
	'trying' => __('Trying...', 'updraftcentral'),
	'now_using_iam' => __('You are now using a IAM user account to access your bucket.', 'updraftcentral').' <strong>'.__('Do remember to save your settings.', 'updraftcentral').'</strong>',
	'settings_saved' => __('Settings saved', 'updraftcentral'),
	'admin_username' => __('Admin Username', 'updraftcentral'),
	'new_api_user' => __('New API user', 'updraftcentral'),
	'admin_api_key' => __('Admin API Key', 'updraftcentral'),
	'new_users_username' => __('New User\'s Username', 'updraftcentral'),
	'new_users_email' => __('New User\'s Email Address', 'updraftcentral'),
	'container' => __('Cloud Files Container', 'updraftcentral'),
	'uk_or_us' => __('US or UK Rackspace Account', 'updraftcentral'),
	'storage_region' => __('Cloud Files Storage Region:', 'updraftcentral'),
	'new_api_user_desc' => __('Enter your Rackspace admin username/API key (so that Rackspace can authenticate your permission to create new users), and enter a new (unique) username and email address for the new user and a container name.', 'updraftcentral'),
	'missing_data_attributes' => __('Please upgrade the version of UpdraftPlus on this site to properly show the progress percentage and messages', 'updraftcentral'),
	'backup_using' => __('Backup using', 'updraftcentral'),
);
