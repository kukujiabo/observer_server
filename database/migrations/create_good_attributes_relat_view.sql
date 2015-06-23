create view v_good_attributes_view as select 
a.id, 
a.good_code, 
a.attr_code, 
a.value, 
a.unit, 
a.ext_1, 
a.active, 
a.created_at, 
a.updated_at, 
b.aname
from 
good_attributes a,
attributes b
where 
a.attr_code = b.acode;
