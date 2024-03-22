<?php

return [

    // 允许使用的顶级域名
    'allowed_tlds' => ['dev', 'local', 'test', 'localhost','1'],// 注意重点在数组中添加了 localhost，之后刷新页面就可以了。

    // 用户模型
    'user_model' => App\Models\User::class
];