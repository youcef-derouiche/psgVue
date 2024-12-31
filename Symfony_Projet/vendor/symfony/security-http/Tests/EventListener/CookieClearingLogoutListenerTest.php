<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Tests\EventListener;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Security\Http\Event\LogoutEvent;
use Symfony\Component\Security\Http\EventListener\CookieClearingLogoutListener;

class CookieClearingLogoutListenerTest extends TestCase
{
    public function testLogout()
    {
        $response = new Response();
        $event = new LogoutEvent(new Request(), null);
        $event->setResponse($response);

        $listener = new CookieClearingLogoutListener(['foo' => ['path' => '/foo', 'domain' => 'foo.foo', 'secure' => true, 'samesite' => Cookie::SAMESITE_STRICT, 'partitioned' => true], 'foo2' => ['path' => null, 'domain' => null]]);

        $cookies = $response->headers->getCookies();
        $this->assertCount(0, $cookies);

        $listener->onLogout($event);

        $cookies = $response->headers->getCookies(ResponseHeaderBag::COOKIES_ARRAY);
        $this->assertCount(2, $cookies);

        $cookie = $cookies['foo.foo']['/foo']['foo'];
        $this->assertEquals('foo', $cookie->getName());
        $this->assertEquals('/foo', $cookie->getPath());
        $this->assertEquals('foo.foo', $cookie->getDomain());
        $this->assertEquals(Cookie::SAMESITE_STRICT, $cookie->getSameSite());
        $this->assertTrue($cookie->isSecure());
        if (self::doesResponseHeaderBagClearChipsCookies()) {
            $this->assertTrue($cookie->isPartitioned());
        }
        $this->assertTrue($cookie->isCleared());

        $cookie = $cookies['']['/']['foo2'];
        $this->assertStringStartsWith('foo2', $cookie->getName());
        $this->assertEquals('/', $cookie->getPath());
        $this->assertNull($cookie->getDomain());
        $this->assertNull($cookie->getSameSite());
        $this->assertFalse($cookie->isSecure());
        if (self::doesResponseHeaderBagClearChipsCookies()) {
            $this->assertFalse($cookie->isPartitioned());
        }
        $this->assertTrue($cookie->isCleared());
    }

    /**
     * Checks if the patch from https://github.com/symfony/symfony/pull/53703 is available.
     */
    private static function doesResponseHeaderBagClearChipsCookies(): bool
    {
        $bag = new ResponseHeaderBag();
        $bag->clearCookie('foo', '/', null, false, true, null, true);

        return $bag->getCookies()[0]->isPartitioned();
    }
}
