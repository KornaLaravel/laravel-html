<?php

namespace Spatie\Html\Test\Elements;

use Spatie\Html\Elements\A;
use Spatie\Html\Test\TestCase;

class ATest extends TestCase
{
    /** @test */
    public function it_can_create_an_a_element()
    {
        assertHtmlStringEqualsHtmlString(
            '<a></a>',
            A::create()
        );
    }

    /** @test */
    public function it_can_create_an_a_element_with_a_href()
    {
        assertHtmlStringEqualsHtmlString(
            '<a href="https://spatie.be"></a>',
            A::create()->href('https://spatie.be')
        );
    }

    /** @test */
    public function it_can_create_an_a_element_with_a_target()
    {
        assertHtmlStringEqualsHtmlString(
            '<a target="_blank"></a>',
            A::create()->target('_blank')
        );
    }
}
