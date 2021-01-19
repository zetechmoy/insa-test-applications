<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
* Classe de test de gestion de poneys
*/
class PoneysTest extends TestCase
{
	/**
	* Undocumented function
	*
	* @return void
	*/
	public function testRemovePoneyFromField()
	{
		// Setup
		$poneys = new Poneys();

		// Action
		$poneys->removePoneyFromField(3);

		// Assert
		$this->assertEquals(5, $poneys->getCount());

		$this->assertEquals($this->expectExceptionCode(100), $poneys->removePoneyFromField(10));
	}

	/**
	* Undocumented function
	*
	* @return void
	*/
	public function testAddPoneyToField()
	{
		// Setup
		$poneys = new Poneys();

		// Action
		$poneys->addPoneyToField("3");

		// Assert
		$this->assertEquals(11, $poneys->getCount());
	}

	/**
	* @dataProvider removeProvider
	*/
	public function testRemove(int $number, int $expected): void
	{

		$poneys = new Poneys();

		$poneys->removePoneyFromField($number);
		$this->assertEquals($expected, $poneys->getCount());
	}

	public function removeProvider(): array
	{

		return [
			[0, 8],
			[1, 7]
		];
	}

	/**
	* insert sth here
	*/
	public function testNames(): void
	{
		$poneys = $this->createMock('Poneys');
		$poneys->method('getNames')->willReturn(["abc", "xyz"]);

		$this->assertEquals(["abc", "xyz"], $poneys->getNames());
	}
}

?>
