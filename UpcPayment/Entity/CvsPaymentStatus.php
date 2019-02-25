<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\UpcPayment\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Master\AbstractMasterEntity;

/**
 * CvsPaymentStatus
 *
 * @ORM\Table(name="plg_upc_payment_cvs_payment_status")
 * @ORM\Entity(repositoryClass="Plugin\UpcPayment\Repository\CvsPaymentStatusRepository")
 */
class CvsPaymentStatus extends AbstractMasterEntity
{
    /**
     * 定数名は適宜変更してください.
     */

    /**
     * 未決済
     */
    const OUTSTANDING = 1;
    /**
     * 要求成功
     */
    const REQUEST = 2;
    /**
     * 決済完了
     */
    const COMPLETE = 3;
    /**
     * 決済失敗
     */
    const FAILURE = 4;
    /**
     * 期限切れ
     */
    const EXPIRED = 5;
}
