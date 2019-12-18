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

    public function ch_text()
    {
        // ihanyv 目录
        $ihanyv = dirname(dirname(__FILE__));
        // src 目录
        $src = dirname($ihanyv);

        // dompdf-ch-tool 目录
        $dompdf = dirname($src);

        // ihanyv 目录
        $ihanyvS = dirname($dompdf);

        // vendor 目录
        $vendor = dirname($ihanyvS);

        //dompdf\dompdf\src\FrameReflower
        // 本地text.php 目录
        $local = $ihanyv. '/DompdfChTool/Text.php';
        // text.php 目录
        $target = $vendor.'/dompdf/dompdf/src/FrameReflower/Text.php';

        system("cp $local $target");
    }
}