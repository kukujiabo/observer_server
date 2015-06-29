create VIEW v_sets_data_view as
select
a.id as t_id, 
a.user_id as uid, 
a.mechine_id as mid,
a.data as t_data, 
a.seq as seq,
b.id as h_id, 
b.data as h_data,
b.created_at as datetime
from temperatures a, humidities b
where a.seq = b.seq;

