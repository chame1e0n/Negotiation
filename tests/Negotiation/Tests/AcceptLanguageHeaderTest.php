<?php

namespace Negotiation\Tests;

use Negotiation\AcceptLanguageHeader;

class AcceptLanguageHeaderTest extends TestCase
{

    /**
     * @dataProvider dataProviderForGetType
     */
    public function testGetType($header, $expected)
    {
        $acceptHeader = new AcceptLanguageHeader($header);
        $actual = $acceptHeader->getType();
        $this->assertEquals($expected, $actual);
    }

    public static function dataProviderForGetType()
    {
        return array(
           array('en;q=0.7', 'en'),
           array('en-GB;q=0.8', 'en-gb'),
        );
    }

    /**
     * @dataProvider dataProviderForGetValue
     */
    public function testGetValue($header, $expected)
    {
        $acceptHeader = new AcceptLanguageHeader($header);
        $actual = $acceptHeader->getValue();
        $this->assertEquals($expected, $actual);

    }

    public static function dataProviderForGetValue()
    {
        return array(
           array('en;q=0.7', 'en;q=0.7'),
           array('en-GB;q=0.8', 'en-GB;q=0.8'),
        );
    }
}
