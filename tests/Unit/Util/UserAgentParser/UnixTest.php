<?php

require_once __DIR__ . "/../../../../src/Fam/Util/UserAgentParser/Unix.php";

class Fam_Util_UserAgentParser_UnixTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     * @var \Fam\Util\UserAgentParser\Unix
     */
    private $subject;

    protected function setUp()
    {
        parent::setUp();

        $this->subject = new \Fam\Util\UserAgentParser\Unix();
    }

    /**
     * @test
     * @dataProvider userAgentOsDataProvider
     */
    public function match_WithValidValue($userAgent)
    {
        $this->assertTrue($this->subject->match($userAgent));
    }

    /**
     * @test
     */
    public function match_WithInvalidValue()
    {
        $this->assertFalse($this->subject->match("Lynx/2.8.4rel.1 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.6c"));
    }

    /**
     * @test
     */
    public function getName_returnsUnix()
    {
        $this->assertEquals("unix", $this->subject->getName());
    }

    public function userAgentOsDataProvider()
    {
        return array(
            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; Linux 2.6.2) (KHTML, like Gecko)",
            ),

            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; FreeBSD 2.6) (KHTML, like Gecko)",
            ),

            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; NetBSD 2.6) (KHTML, like Gecko)",
            ),

            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; IRIX 2.6) (KHTML, like Gecko)",
            ),

            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; SunOS 2.6) (KHTML, like Gecko)",
            ),

            array(
                "Mozilla/5.0 (compatible; Konqueror/3.2; Unix 2.6) (KHTML, like Gecko)",
            ),
        );
    }
}
