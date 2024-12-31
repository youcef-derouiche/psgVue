<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TemplateControllerTest extends TestCase
{
    public function testMethodSignaturesMatch()
    {
        $ref = new \ReflectionClass(TemplateController::class);

        $templateActionRef = $ref->getMethod('templateAction');
        $invokeRef = $ref->getMethod('__invoke');

        $this->assertSame(
            array_map(strval(...), $templateActionRef->getParameters()),
            array_map(strval(...), $invokeRef->getParameters()),
        );
    }

    public function testTwig()
    {
        $twig = $this->createMock(Environment::class);
        $twig->expects($this->exactly(2))->method('render')->willReturn('bar');

        $controller = new TemplateController($twig);

        $this->assertEquals('bar', $controller->templateAction('mytemplate')->getContent());
        $this->assertEquals('bar', $controller('mytemplate')->getContent());
    }

    public function testNoTwigTemplateActionMethod()
    {
        $controller = new TemplateController();

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('You cannot use the TemplateController if the Twig Bundle is not available. Try running "composer require symfony/twig-bundle".');

        $controller->templateAction('mytemplate')->getContent();
    }

    public function testNoTwigInvokeMethod()
    {
        $controller = new TemplateController();

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('You cannot use the TemplateController if the Twig Bundle is not available. Try running "composer require symfony/twig-bundle".');

        $controller('mytemplate')->getContent();
    }

    public function testContext()
    {
        $templateName = 'template_controller.html.twig';
        $context = [
            'param' => 'hello world',
        ];
        $expected = '<h1>'.$context['param'].'</h1>';

        $loader = new ArrayLoader();
        $loader->setTemplate($templateName, '<h1>{{param}}</h1>');

        $twig = new Environment($loader);
        $controller = new TemplateController($twig);

        $this->assertEquals($expected, $controller->templateAction($templateName, null, null, null, $context)->getContent());
        $this->assertEquals($expected, $controller($templateName, null, null, null, $context)->getContent());
    }

    public function testStatusCode()
    {
        $templateName = 'template_controller.html.twig';
        $statusCode = 201;

        $loader = new ArrayLoader();
        $loader->setTemplate($templateName, '<h1>{{param}}</h1>');

        $twig = new Environment($loader);
        $controller = new TemplateController($twig);

        $this->assertSame(201, $controller->templateAction($templateName, null, null, null, [], $statusCode)->getStatusCode());
        $this->assertSame(201, $controller($templateName, null, null, null, [], $statusCode)->getStatusCode());

        $this->assertSame(200, $controller->templateAction($templateName)->getStatusCode());
        $this->assertSame(200, $controller($templateName)->getStatusCode());
    }

    public function testHeaders()
    {
        $templateName = 'image.svg.twig';

        $loader = new ArrayLoader();
        $loader->setTemplate($templateName, '<svg></svg>');

        $twig = new Environment($loader);
        $controller = new TemplateController($twig);

        $this->assertSame('image/svg+xml', $controller->templateAction($templateName, headers: ['Content-Type' => 'image/svg+xml'])->headers->get('Content-Type'));
        $this->assertSame('image/svg+xml', $controller($templateName, headers: ['Content-Type' => 'image/svg+xml'])->headers->get('Content-Type'));

        $this->assertNull($controller->templateAction($templateName)->headers->get('Content-Type'));
        $this->assertNull($controller($templateName)->headers->get('Content-Type'));
    }
}
