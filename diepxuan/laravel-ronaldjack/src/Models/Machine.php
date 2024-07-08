<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-07-07 21:14:55
 */

namespace Diepxuan\RonaldJack\Models;

use Diepxuan\Core\Models\Package;

class Machine
{
    private $_zkemkeeper;

    public function __construct()
    {
        $_zkemkeeper       = Package::path('diepxuan/laravel-core', 'libs/zkemkeeper.dll');
        $this->_zkemkeeper = new \COM($_zkemkeeper) || new \Exception();
        dd($this->_zkemkeeper);
    }
}
