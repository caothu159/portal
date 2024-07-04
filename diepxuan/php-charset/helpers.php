<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-05-27 07:47:51
 */

use Diepxuan\Charset\VnEncoding;

if (!function_exists('vn_convert_encoding')) {
    /**
     * Convert Vietnamese encoding to another.
     *
     * @param mixed $string
     * @param mixed $from
     * @param mixed $to
     */
    function vn_convert_encoding(string $string, $from = 'unicode', $to = 'ascii'): string
    {
        try {
            return (string) new VnEncoding($string, $from, $to);
        } catch (Throwable $th) {
            return '';
        }
    }
}
