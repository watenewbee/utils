<?php
if (!function_exists('random_code')) {
    /**
     * 随机码
     * @param int $limit
     * @return string
     */
    function random_code(int $limit = 4): string
    {
        return strtoupper(substr(md5(uniqid()), 8, $limit));
    }
}
if (!function_exists('order_no')) {
    /**
     * 生成一个订单号
     * @return string
     */
    function order_no(): string
    {
        return date('YmdHis') . mt_rand(10, 99) . mt_rand(1000, 9999);
    }
}
if (!function_exists('rand_string')) {
    /**
     * 随机数
     * @param int $length 长度
     * @param string $seeds
     * @return void
     */
    function rand_string(int $length = 4, string $seeds = '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY'): string
    {
        $seeds_all = str_split($seeds);
        $value = '';
        for ($i = 0; $i < $length; $i++) {
            $value .= $seeds_all[array_rand($seeds_all)];
        }
        return $value;
    }
}