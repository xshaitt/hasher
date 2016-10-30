<?php
namespace FirstShuai\Hasher;
/**
 * Created by PhpStorm.
 * User: FirstShuai
 * Date: 2016/10/28
 * Time: 下午3:09
 */
class MD5Hasher
{
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return md5($value . $salt);
    }

    public function check($value, $hasherValer, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return $hasherValer === md5($value . $salt);
    }
}