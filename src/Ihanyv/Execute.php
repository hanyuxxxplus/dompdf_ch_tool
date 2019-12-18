<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/18 0018
 * Time: 14:25
 */

namespace Ihanyv;

class Execute
{
    public static function load_font()
    {
        $vendorDir = dirname(dirname(__FILE__));
        $baseDir   = dirname($vendorDir);
        $loadPhp   = $baseDir . '/src/Ihanyv/DompdfChTool/load_font.php ';
        $fontArr   = [
            'simsong',
            'pingfang'
        ];
        foreach ($fontArr as $k => $v) {
            $fontRPath = $baseDir . '/src/Ihanyv/Font/' . $v . '.ttf';
            $font      = " '$v' " . $fontRPath;
            system('php ' . $loadPhp . $font);
        }
    }
}