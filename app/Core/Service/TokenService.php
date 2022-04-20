<?php

namespace App\Core\Service;

use App\Core\Constant\Constants;
use Lcobucci\Clock\SystemClock;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha512;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Token\Plain;
use Lcobucci\JWT\Validation\Constraint\SignedWith;
use Lcobucci\JWT\Validation\Constraint\ValidAt;
use Lcobucci\JWT\Validation\RequiredConstraintsViolated;

/**
 * token验证处理
 */
class TokenService
{

    /**
     * 签名
     */
    private const SIGN = 'abcdefghijklmnopqrstuvwxyz';

    /**
     * 过期时间
     */
    private const EXPIRE = 7200;

    /**
     * 签发者
     */
    private const ISSUER = 'ruoyvkj';

    public static function configuration(): Configuration
    {
        return Configuration::forSymmetricSigner(
            new Sha512(),
            Key\InMemory::base64Encoded(self::SIGN)
        );
    }

    /**
     * 创建令牌
     * @param int|null $data
     * @return string
     */
    public static function createToken(?int $data): string
    {
        $config = self::configuration();
        $time = time();

        $token = (new Builder())->issuedBy(self::ISSUER)
            ->issuedAt($time)
            ->canOnlyBeUsedAfter($time-1)
            ->expiresAt($time + self::EXPIRE)
            ->withClaim(Constants::LOGIN_USER_KEY,$data)
            ->getToken($config->signer(),$config->signingKey());

        return (string)$token;
    }

    /**
     * 验证token信息
     * @param string $token
     * @return bool
     */
    public static function verifyToken(string $token): bool
    {
        $config = self::configuration();
        assert($config instanceof Configuration);

        try {
            $token = (new Parser())->parse($token);
        }catch (\Exception $exception){
            return false;
        }

        assert($token instanceof Plain);

        // 验证令牌是否已使用预期的签名者和密钥签名
        $sign = new SignedWith($config->signer(),$config->signingKey());
        $config->setValidationConstraints($sign);

        //验证是否过期
        $timezone = new \DateTimeZone('Asia/Shanghai');
        $now = new SystemClock($timezone);
        $jwtAt = new ValidAt($now);
        $config->setValidationConstraints($jwtAt);

        $constraints = $config->validationConstraints();

        try {
            $config->validator()->assert($token, ...$constraints);
        } catch (RequiredConstraintsViolated $e) {
            return false;
        }
        return true;
    }

    /**
     * 从令牌中获取数据声明
     *
     * @param string $token
     * @return mixed|null
     */
    public static function parseToken(string $token)
    {
        $config = self::configuration();
        $data = $config->parser()->parse($token)->claims();
        if(null != $data->get(Constants::LOGIN_USER_KEY))
            return $data->get(Constants::LOGIN_USER_KEY);
        return null;
    }

}
