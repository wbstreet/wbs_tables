DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_tables`;
CREATE TABLE  `{TABLE_PREFIX}mod_wbs_tables` (
    `table_id` INT(11) NOT NULL AUTO_INCREMENT,
    `table_sql_name` VARCHAR(255) NOT NULL,
    `table_name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (table_id)
){TABLE_ENGINE=MyISAM};

DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_tables_field`;
CREATE TABLE `{TABLE_PREFIX}mod_wbs_tables_field` (
    `table_field_id` INT(11) NOT NULL AUTO_INCREMENT,
    `table_id` INT(11) NOT NULL, -- TODO extern key
    `table_field_sql_name` VARCHAR(255) NOT NULL,
    `table_field_name` VARCHAR(255) NOT NULL,
    `table_field_type` INT(1) NOT NULL,
    PRIMARY KEY (table_field_id)
){TABLE_ENGINE=MyISAM};

DROP TABLE IF EXISTS `{TABLE_PREFIX}mod_wbs_tables_field_type`;
CREATE TABLE `{TABLE_PREFIX}mod_wbs__field_type` (
){TABLE_ENGINE=MyISAM};
        
