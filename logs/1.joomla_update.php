#
#<?php die('Forbidden.'); ?>
#Date: 2017-05-25 10:04:33 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2017-05-25T10:04:33+00:00	INFO 36.234.169.38	update	更新由使用者 AEdes (584) 開始進行. 舊版本是 3.4.8.
2017-05-25T10:04:33+00:00	INFO 36.234.169.38	update	從 https://downloads.joomla.org/cms/joomla3/3-7-2/Joomla_3.7.2-Stable-Update_Package.zip 下載更新檔案.
2017-05-25T10:05:58+00:00	INFO 36.234.169.38	update	檔案 Joomla_3.7.2-Stable-Update_Package.zip 已成功下載.
2017-05-25T10:05:58+00:00	INFO 36.234.169.38	update	開始新版本的安裝.
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	最後的安裝.
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-07-01 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `session_id` varchar(191) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-07-01 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` MODIFY `series` varchar(191) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-13 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-26 執行查詢。查詢文字為： ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_tag`;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-26 執行查詢。查詢文字為： ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_type`;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-10-30 執行查詢。查詢文字為： UPDATE `#__menu` SET `title` = 'com_contact_contacts' WHERE `client_id` = 1 AND 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-04 執行查詢。查詢文字為： DELETE FROM `#__menu` WHERE `title` = 'com_messages_read' AND `client_id` = 1;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-04 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-05 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2015-11-05 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-02-26 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__utf8_conversion` (   `converted` tinyint(4) NOT N
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-02-26 執行查詢。查詢文字為： INSERT INTO `#__utf8_conversion` (`converted`) VALUES (0);
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` DROP INDEX `idx_link_old`;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `old_url` VARCHAR(2048) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `referer` VARCHAR(2048) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.0-2016-03-01 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` ADD INDEX `idx_old_url` (`old_url`(100));
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.1-2016-03-25 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` MODIFY `user_id` varchar(150) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.5.1-2016-03-29 執行查詢。查詢文字為： UPDATE `#__utf8_conversion` SET `converted` = 0  WHERE (SELECT COUNT(*) FROM `#_
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `name` = 'Joomla! Core' WHERE `name` = 'Joomla Core
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `name` = 'Joomla! Extension Directory' WHERE `name`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/list.x
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/jed/list.xm
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/language/tr
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-01 執行查詢。查詢文字為： UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/extens
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-06 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-08 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-08 執行查詢。查詢文字為： UPDATE `#__update_sites_extensions` SET `extension_id` = 802 WHERE `update_site_
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-04-09 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `id`;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-05-06 執行查詢。查詢文字為： DELETE FROM `#__extensions` WHERE `type` = 'library' AND `element` = 'simplepie'
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-05-06 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-06-01 執行查詢。查詢文字為： UPDATE `#__extensions` SET `protected` = 1, `enabled` = 1  WHERE `name` = 'com_a
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.0-2016-06-05 執行查詢。查詢文字為： ALTER TABLE `#__languages` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `lang_id
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.3-2016-08-15 執行查詢。查詢文字為： ALTER TABLE `#__newsfeeds` MODIFY `link` VARCHAR(2048) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.6.3-2016-08-16 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-06 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-22 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields` (   `id` int(10) unsigned NOT NULL AUTO_I
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_categories` (   `field_id` int(11) NOT NUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_groups` (   `id` int(10) unsigned NOT NULL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__fields_values` (   `field_id` int(10) unsigned NO
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-08-29 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-09-29 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-10-01 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-10-02 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `client_id` tinyint(3) unsigned DEFAULT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-04 執行查詢。查詢文字為： ALTER TABLE `#__extensions` CHANGE `enabled` `enabled` TINYINT(3) NOT NULL DEFAU
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-19 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` ADD COLUMN `client_id` int(11) NOT NULL DEFAULT 0;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-19 執行查詢。查詢文字為： UPDATE `#__menu` SET `published` = 1 WHERE `menutype` = 'main' OR `menutype` = '
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-21 執行查詢。查詢文字為： ALTER TABLE `#__languages` DROP INDEX `idx_image`;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-24 執行查詢。查詢文字為： ALTER TABLE `#__extensions` ADD COLUMN `package_id` int(11) NOT NULL DEFAULT 0 C
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-24 執行查詢。查詢文字為： UPDATE `#__extensions` AS `e1` INNER JOIN (SELECT `extension_id` FROM `#__extens
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2016-11-27 執行查詢。查詢文字為： ALTER TABLE `#__modules` MODIFY `content` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_alias` varchar(400) CHARACTER SET utf8
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` varchar(255) NOT NUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_params` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metadata` varchar(2048) NOT NULL DEFAU
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_language` char(7) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NOT NULL DEFAULT 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NOT NULL DEFAUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_content_item_id` int(10) unsigned NOT 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_images` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_urls` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_xreference` varchar(50) NOT NULL DEFAU
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-08 執行查詢。查詢文字為： ALTER TABLE `#__ucm_content` MODIFY `core_type_id` int(10) unsigned NOT NULL DEF
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `title` varchar(255) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `description` mediumtext NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `params` text NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metadesc` varchar(1024) NOT NULL DEFAULT '' 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '' C
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `metadata` varchar(2048) NOT NULL DEFAULT '' 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-09 執行查詢。查詢文字為： ALTER TABLE `#__categories` MODIFY `language` char(7) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-15 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-17 執行查詢。查詢文字為： UPDATE `#__menu` SET `menutype` = 'main', `client_id` = 1  WHERE `menutype` = 'm
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-01-31 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-02 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-15 執行查詢。查詢文字為： ALTER TABLE `#__redirect_links` MODIFY `comment` varchar(255) NOT NULL DEFAULT '
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `name` varchar(255) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `alias` varchar(400) CHARACTER SET utf8m
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname1` varchar(255) NOT NULL DEFAUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname2` varchar(255) NOT NULL DEFAUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `sortname3` varchar(255) NOT NULL DEFAUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `language` varchar(7) NOT NULL;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-02-17 執行查詢。查詢文字為： ALTER TABLE `#__contact_details` MODIFY `xreference` varchar(50) NOT NULL DEFAUL
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE `#__languages` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 0
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE `#__menu_types` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE  `#__content` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-03 執行查詢。查詢文字為： ALTER TABLE  `#__newsfeeds` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-09 執行查詢。查詢文字為： UPDATE `#__categories` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.publis
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-09 執行查詢。查詢文字為： UPDATE `#__menu` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.published) >
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-03-19 執行查詢。查詢文字為： ALTER TABLE `#__finder_links` MODIFY `description` text;
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-04-10 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	從檔案 3.7.0-2017-04-19 執行查詢。查詢文字為： UPDATE `#__extensions` SET `params` = '{"multiple":"0","first":"1","last":"100",
2017-05-25T10:07:57+00:00	INFO 36.234.169.38	update	刪除可移除的檔案和目錄.
2017-05-25T10:08:00+00:00	INFO 36.234.169.38	update	最後的安裝.
2017-05-25T10:08:00+00:00	INFO 36.234.169.38	update	刪除可移除的檔案和目錄.
2017-05-25T10:08:02+00:00	INFO 36.234.169.38	update	安裝後清除.
2017-05-25T10:08:02+00:00	INFO 36.234.169.38	update	更新到版本 3.7.2 已完成.
2019-08-05T02:21:21+00:00	INFO 125.224.86.243	update	更新由使用者 AEdes (584) 開始進行. 舊版本是 3.7.2.
2019-08-05T02:21:24+00:00	INFO 125.224.86.243	update	從 https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.10-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20190805%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20190805T022112Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=ab3c4b87bffc8473e69b53c88cadf5d9b09483c4241de6e63f6a67a8d6cee0f4 下載更新檔案.
2019-08-05T02:21:26+00:00	INFO 125.224.86.243	update	檔案 Joomla_3.9.10-Stable-Update_Package.zip 已成功下載.
2019-08-05T02:21:26+00:00	INFO 125.224.86.243	update	開始新版本的安裝.
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	最後的安裝.
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.7.3-2017-06-03 執行查詢。查詢文字為： ALTER TABLE `#__menu` MODIFY `checked_out_time` datetime NOT NULL DEFAULT '0000-
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.7.4-2017-07-05 執行查詢。查詢文字為： DELETE FROM `#__postinstall_messages` WHERE `title_key` = 'COM_CPANEL_MSG_PHPVER
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.0-2017-07-28 執行查詢。查詢文字為： ALTER TABLE `#__fields_groups` ADD COLUMN `params` TEXT  NOT NULL  AFTER `orderi
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.0-2017-07-31 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.2-2017-10-14 執行查詢。查詢文字為： ALTER TABLE `#__content` ADD INDEX `idx_alias` (`alias`(191));
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.4-2018-01-16 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` DROP INDEX `series_2`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.4-2018-01-16 執行查詢。查詢文字為： ALTER TABLE `#__user_keys` DROP INDEX `series_3`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.6-2018-02-14 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.6-2018-02-14 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.8-2018-05-18 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.8.9-2018-06-19 執行查詢。查詢文字為： UPDATE `#__extensions` SET `enabled` = '1' WHERE `name` = 'mod_sampledata';
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-02 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-02 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__privacy_requests` (   `id` int(10) unsigned NOT N
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-03 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__action_logs` (   `id` int(10) unsigned NOT NULL A
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__action_logs_extensions` (   `id` int(10) unsigned
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： INSERT INTO `#__action_logs_extensions` (`id`, `extension`) VALUES (1, 'com_bann
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__action_log_config` (   `id` int(10) unsigned NOT 
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-05 執行查詢。查詢文字為： INSERT INTO `#__action_log_config` (`id`, `type_title`, `type_alias`, `id_holder
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-19 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-20 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-24 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-24 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__privacy_consents` (   `id` int(10) unsigned NOT N
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-05-27 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-02 執行查詢。查詢文字為： ALTER TABLE `#__content` ADD COLUMN `note` VARCHAR(255) NOT NULL DEFAULT '';
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-02 執行查詢。查詢文字為： UPDATE `#__content_types` SET `field_mappings` =  '{"common":{"core_content_item
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-12 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-13 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-14 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-06-17 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-07-09 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-07-10 執行查詢。查詢文字為： INSERT INTO `#__action_log_config` (`id`, `type_title`, `type_alias`, `id_holder
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-07-11 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-08-12 執行查詢。查詢文字為： ALTER TABLE `#__privacy_consents` ADD COLUMN `state` INT(10) NOT NULL DEFAULT 1 
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-08-28 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `session_id` varbinary(192) NOT NULL;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-08-28 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `guest` tinyint(3) unsigned DEFAULT 1;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-08-28 執行查詢。查詢文字為： ALTER TABLE `#__session` MODIFY `time` int(11) NOT NULL DEFAULT 0;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-08-29 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-09-04 執行查詢。查詢文字為： CREATE TABLE IF NOT EXISTS `#__action_logs_users` (   `user_id` int(11) UNSIGNED
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-15 執行查詢。查詢文字為： ALTER TABLE `#__action_logs` ADD INDEX `idx_user_id` (`user_id`);
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-15 執行查詢。查詢文字為： ALTER TABLE `#__action_logs` ADD INDEX `idx_user_id_logdate` (`user_id`, `log_da
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-15 執行查詢。查詢文字為： ALTER TABLE `#__action_logs` ADD INDEX `idx_user_id_extension` (`user_id`, `exte
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-15 執行查詢。查詢文字為： ALTER TABLE `#__action_logs` ADD INDEX `idx_extension_item_id` (`extension`, `it
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-20 執行查詢。查詢文字為： ALTER TABLE `#__privacy_requests` DROP INDEX `idx_checkout`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-20 執行查詢。查詢文字為： ALTER TABLE `#__privacy_requests` DROP COLUMN `checked_out`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-20 執行查詢。查詢文字為： ALTER TABLE `#__privacy_requests` DROP COLUMN `checked_out_time`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.0-2018-10-21 執行查詢。查詢文字為： INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.3-2019-01-12 執行查詢。查詢文字為： UPDATE `#__extensions`  SET `params` = REPLACE(`params`, '"com_categories",', '"
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.3-2019-01-12 執行查詢。查詢文字為： INSERT INTO `#__action_logs_extensions` (`extension`) VALUES ('com_checkin');
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.3-2019-02-07 執行查詢。查詢文字為： INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.7-2019-04-23 執行查詢。查詢文字為： ALTER TABLE `#__session` ADD INDEX `client_id_guest` (`client_id`, `guest`);
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.7-2019-04-26 執行查詢。查詢文字為： UPDATE `#__content_types` SET `content_history_options` = REPLACE(`content_histo
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.8-2019-06-11 執行查詢。查詢文字為： UPDATE #__users SET params = REPLACE(params, '",,"', '","');
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.8-2019-06-15 執行查詢。查詢文字為： ALTER TABLE `#__template_styles` DROP INDEX `idx_home`;
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.8-2019-06-15 執行查詢。查詢文字為： ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id` (`client_id`);
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.8-2019-06-15 執行查詢。查詢文字為： ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id_home` (`client_id`, `h
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	從檔案 3.9.10-2019-07-09 執行查詢。查詢文字為： ALTER TABLE `#__template_styles` MODIFY `home` char(7) NOT NULL DEFAULT '0';
2019-08-05T02:21:32+00:00	INFO 125.224.86.243	update	刪除可移除的檔案和目錄.
2019-08-05T02:21:33+00:00	INFO 125.224.86.243	update	安裝後清除.
2019-08-05T02:21:33+00:00	INFO 125.224.86.243	update	更新到版本 3.9.10 已完成.
