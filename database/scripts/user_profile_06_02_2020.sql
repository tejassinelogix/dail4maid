ALTER TABLE `user_profiles` ADD `client_type` VARCHAR(255) NULL AFTER `code`, ADD `source_call` VARCHAR(255) NULL AFTER `client_type`, ADD `crew_name` VARCHAR(255) NULL AFTER `source_call`, ADD `date` VARCHAR(255) NULL AFTER `crew_name`;