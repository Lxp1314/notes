批量删除
redis-cli -h 10.96.173.180 -p 6379 -n 15 keys "[0-9]*" | xargs redis-cli -h 10.96.173.180 -p 6379 -n 15 del
