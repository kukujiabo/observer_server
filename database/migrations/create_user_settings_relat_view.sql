create view v_user_setting_relat as select a.*, b.setting_name, b.comment as c_name from user_config_settings a, user_settings b where a.setting_id = b.id;

