<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Zamasaur\PhpTemplate\TemplateImpl;

final class TemplateTest extends TestCase
{
    public function testTemplateImplException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Failed opening the file.');

        $filename = __DIR__ . "/resources/inexistent.php";
        $template = new TemplateImpl($filename);
    }
    
    public function testTemplateImpl(): void
    {
        $filename = __DIR__ . "/resources/template.php";
        $template = new TemplateImpl($filename);
        
        $searchArray = array("<!-- TITLE -->", "<!-- BODY -->");
        $replaceArray = array("MyTitle","MyBody");
        
        $output = $template->incorporate($searchArray, $replaceArray);
        $expected = file_get_contents("./tests/resources/expected.php");

        $this->assertEquals(
            $expected,
            $output
        );
    }
}
