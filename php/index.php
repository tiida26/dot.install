<?php

// 変数 : データにつけるラベル(変更可能)

// 定数 : 変更不可

define("ADMIN_EMAIL", "ambo.sun@gmail.com");    // 通例 で 定数は大文字で書くことが多い
define("LIST_COUNT", 15);

$admin_email = "ambo.sun@gmail.com";

echo ADMIN_EMAIL;    // 定数を展開するときは $ が要らないっぽい。。。。
echo $admin_email;
