<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
* Classe de test de gestion de poneys
*/
class PoneysTestSlots extends TestCase
{

	private $poneys;

	protected function setUp()
	{
		$this->$poneys = $this->getMockBuilder('Poneys')
		->disableOriginalConstructor()
		->setMethods(['setCount', 'hasSlotLeft'])
		->getMock();

		$this->$poneys
		->method('setCount')
		->willReturn(15);

		$this->$poneys
		->method('hasSlotLeft')
		->willReturn(TRUE);
	}

	public function testHasSlotLeft()
	{
		$this->assertTrue(FALSE, $this->poneys->hasSlotLeft());
	}

	protected function tearDown()
	{
		$this->poneys = null;
	}
}

?>
