<?php
/**
 * Discord Notifications extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Tyler Olsen, https://github.com/rootslinux
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * This file contains the language strings for the ACP settings page for this extension.
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP Extension Settings Page
	'DN_ACP_DESCRIPTION'			=> 'These settings allow for various forum events to send notification messages to a Discord server.',

	'DN_MAIN_SETTINGS'				=> 'Main Settings',
	'DN_MASTER_ENABLE'				=> 'Enable Discord Notifications',
	'DN_WEBHOOK_URL'				=> 'Discord Webhook URL',
	'DN_WEBHOOK_DESCRIPTION'		=> 'The URL of the webhook generated by the Discord server. See <a href="https://support.discordapp.com/hc/en-us/articles/228383668-Intro-to-Webhooks">this article</a> to learn how to create a new webhook.',
	'DN_POST_PREVIEW_LENGTH'		=> 'Post Preview Length',
	'DN_POST_PREVIEW_DESCRIPTION'	=> 'Specify the number of characters to display in a post preview (10 - 2000). A zero value disables post preview.',
	'DN_TEST_MESSAGE'				=> 'Test Message',
	'DN_TEST_MESSAGE_TEXT'			=> 'This is a test: Hello Discord!',
	'DN_TEST_DESCRIPTION'			=> 'A message to send to Discord to verify that the connection with phpBB is functioning.',
	'DN_SEND_TEST'					=> 'Send Test Message',
	'DN_SEND_TEST_DESCRIPTION'		=> 'Sends the contents of the test message to the Discord webhook. Use this to verify that your webhook is properly functioning.',

	'DN_TYPE_SETTINGS'				=> 'Notification Types',
	'DN_TYPE_DESCRIPTION'			=> 'Select which types of notifications should generate messages that get sent to Discord',
	'DN_POST_CREATE'				=> 'Post created',
	'DN_POST_UPDATE'				=> 'Post updated',
	'DN_POST_DELETE'				=> 'Post deleted',
	'DN_POST_LOCK'					=> 'Post locked',
	'DN_POST_UNLOCK'				=> 'Post unlocked',
	'DN_TOPIC_CREATE'				=> 'Topic created',
	'DN_TOPIC_UPDATE'				=> 'Topic updated',
	'DN_TOPIC_DELETE'				=> 'Topic deleted',
	'DN_TOPIC_LOCK'					=> 'Topic locked',
	'DN_TOPIC_UNLOCK'				=> 'Topic unlocked',
	'DN_USER_CREATE'				=> 'User created',
	'DN_USER_DELETE'				=> 'User deleted',

	'DN_FORUM_SETTINGS'				=> 'Notification Forums',
	'DN_FORUM_DESCRIPTION'			=> 'Select which forums should generate notifications for forum-specific events, such as those related to posts and topics',

	// Messages that appear after a user tries to send a test message
	'DN_TEST_SUCCESS'				=> 'Success! Check your Discord server and you should see the test message displayed there.',
	'DN_TEST_FAILURE'				=> 'There was a problem with sending the test message. Check your webhook URL and verify your server meets the extension requirements.',
	'DN_TEST_BAD_MESSAGE'			=> 'Please enter at least one character for the test message',
	'DN_TEST_BAD_WEBHOOK'			=> 'The text entered for the webhook URL is not a valid URL. Please check this setting and try again.',

	// Success/Failure messages that can be generated once the user saves
	'DN_SETTINGS_SAVED'				=> 'Discord Notification settings modified successfully.',
	'DN_MASTER_WEBHOOK_REQUIRED'	=> 'A valid Discord webhook URL is required to enable notifications.',
	'DN_WEBHOOK_URL_INVALID'		=> 'Discord webhook URL must be a full and valid URL.',
	'DN_POST_PREVIEW_INVALID'		=> 'Post preview length must be a number between 10 and 2000, or 0 to disable previews.',
));
