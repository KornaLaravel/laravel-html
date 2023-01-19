<?php

namespace Spatie\Html\Test\Elements;

use Spatie\Html\Elements\Input;
use Spatie\Html\Test\TestCase;

class InputTest extends TestCase
{
    /** @test */
    public function it_can_create_an_input()
    {
        assertHtmlStringEqualsHtmlString(
            '<input>',
            Input::create()
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_custom_type()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="text">',
            Input::create()->type('text')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_name()
    {
        assertHtmlStringEqualsHtmlString(
            '<input name="foo">',
            Input::create()->name('foo')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_value()
    {
        assertHtmlStringEqualsHtmlString(
            '<input value="bar">',
            Input::create()->value('bar')
        );
    }

    /** @test */
    public function it_can_create_an_input_with_a_placeholder()
    {
        assertHtmlStringEqualsHtmlString(
            '<input placeholder="Foo bar">',
            Input::create()->placeholder('Foo bar')
        );
    }

    /** @test */
    public function it_can_create_an_input_that_is_required()
    {
        assertHtmlStringEqualsHtmlString(
            '<input required>',
            Input::create()->required()
        );
    }

    /** @test */
    public function it_can_create_an_input_that_is_required_when_passing_true()
    {
        assertHtmlStringEqualsHtmlString(
            '<input required>',
            Input::create()->required(true)
        );
    }

    /** @test */
    public function it_wont_create_an_input_that_is_required_when_passing_false()
    {
        assertHtmlStringEqualsHtmlString(
            '<input>',
            Input::create()->required(false)
        );
    }

    /** @test */
    public function it_can_create_an_input_that_has_autofocus()
    {
        assertHtmlStringEqualsHtmlString(
            '<input autofocus>',
            Input::create()->autofocus()
        );
    }

    /** @test */
    public function it_can_create_an_input_that_has_autofocus_when_passing_true()
    {
        assertHtmlStringEqualsHtmlString(
            '<input autofocus>',
            Input::create()->autofocus(true)
        );
    }

    /** @test */
    public function it_wont_create_an_input_that_has_autofocus_when_passing_false()
    {
        assertHtmlStringEqualsHtmlString(
            '<input>',
            Input::create()->autofocus(false)
        );
    }

    /** @test */
    public function it_can_check_an_input()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="checkbox" checked="checked">',
            Input::create()->type('checkbox')->checked(true)
        );

        assertHtmlStringEqualsHtmlString(
            '<input type="checkbox" checked="checked">',
            Input::create()->type('checkbox')->checked()
        );
    }

    /** @test */
    public function it_can_uncheck_an_input()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="checkbox">',
            Input::create()->type('checkbox')->checked()->checked(false)
        );

        assertHtmlStringEqualsHtmlString(
            '<input type="checkbox">',
            Input::create()->type('checkbox')->checked()->unchecked()
        );
    }

    /** @test */
    public function it_can_disable_an_input()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="checkbox" disabled>',
            Input::create()->type('checkbox')->disabled()
        );
    }

    /** @test */
    public function it_can_create_an_input_with_maxlength()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="text" maxlength="25">',
            Input::create()->type('text')->maxlength(25)
        );
    }

    /** @test */
    public function it_can_create_an_input_with_minlength()
    {
        assertHtmlStringEqualsHtmlString(
            '<input type="text" minlength="25">',
            Input::create()->type('text')->minlength(25)
        );
    }
}
