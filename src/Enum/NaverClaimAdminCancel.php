<?php

namespace Iamport\RestClient\Enum;

/**
 * Class Endpoint.
 */
class NaverClaimAdminCancel extends Enum
{
    public const ADMIN_CANCELING        = 'ADMIN_CANCELING';
    public const ADMIN_CANCEL_DONE      = 'ADMIN_CANCEL_DONE';

    /**
     * Enum의 설명을 가져옵니다.
     *
     * @param int $value
     *
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ADMIN_CANCELING:
                return '직권 취소 중';
            case self::ADMIN_CANCEL_DONE:
                return '직권 취소 완료';
            default:
                return null;
        }
    }
}
