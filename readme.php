<?php

$redis = new Redis();
$redis->connect("127.0.0.1", 6379);
$redis->set("key1", "value1");
$redis->get("key1");
$redis->close();

$wei_bo = new Weibo();
$wei_info = [];

# git merge dev 合并
# git branch -d dev 分支命令,删除
# remote push hell
