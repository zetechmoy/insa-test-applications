<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
				if($number > $this->count){
					throw new Exception("Y'en a trop Narvalo", 100);
				}
				$this->count -= $number;

    }

		/**
     * Ajoute un poney dans champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
		 public function addPoneyToField(int $number): void
		 {
		 		$this->count += $number;
		 }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

		/**
		*Retourne TRUE si s'il reste de l'espace libre dans le champ
		*
		* @return boolean
		*/
		public function hasSlotLeft(): boolean
		{
			return $this->getCount() < 15;
		}
}
?>
