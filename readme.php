<?php

$redis = new Redis();
$redis->connect("127.0.0.1", 6379);
$redis->set("key1", "value1");
$redis->get("key1");
$redis->close();

$wei_bo = new Weibo();
$wei_info = [];
