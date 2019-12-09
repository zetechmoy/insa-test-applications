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
    }
}
?>
