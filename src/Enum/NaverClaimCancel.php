<?php

namespace Iamport\RestClient\Enum;

/**
 * Class Endpoint.
 */
class NaverClaimCancel extends Enum
{
    public const CANCEL_REQUEST = 'CANCEL_REQUEST';
    public const CANCELING      = 'CANCELING';
    public const CANCEL_DONE    = 'CANCEL_DONE';
    public const CANCEL_REJECT  = 'CANCEL_REJECT';

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
            case self::CANCEL_REQUEST:
                return '취소 요청';
            case self::CANCELING:
                return '취소 처리 중';
            case self::CANCEL_DONE:
                return '취소 처리 완료';
            case self::CANCEL_REJECT:
                return '취소 철회';
            default:
                return null;
        }
    }
}
