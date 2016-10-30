<?php
require_once '/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use FirstShuai\Hasher\MD5Hasher;

/**
 * Created by PhpStorm.
 * User: FirstShuai
 * Date: 2016/10/30
 * Time: 下午9:25
 */
class MD5HasherTest extends TestCase
{
    protected $hasher;
    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }
    public function testMD5HasherMake()
    {
        $passwordOne = md5('123456');
        $passwordTwo = $this->hasher->make('123456');
        $this->assertEquals($passwordOne,$passwordTwo);
    }
}