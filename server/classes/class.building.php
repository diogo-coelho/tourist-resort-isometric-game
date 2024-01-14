<?php
/**
 * Building class
 *
 * Developed by Mario Andres Pagella (andres.pagella@gmail.com) 
 *
 * These example is from the book JavaScript: Making Isometric Social Real-Time Games with HTML5, CSS3 and Javascript
 * See the "O'Reilly Policy on Re-Use of Code Examples from Books"
 * (http://www.oreilly.com/pub/a/oreilly/ask_tim/2001/codepolicy.html) for
 * details on how you may and may not use these examples. In most cases, it
 * suffices to simply provide suitable attribution, in the source code and
 * documentation of your program, with a comment like the following:
 * 
 * // This code is from the book JavaScript: Making Isometric Social Real-Time Games with HTML5, CSS3 and Javascript
 * // (ISBN #???). Copyright ??? by Mario Andres Pagella.
 * 
 * Please note that the examples are not production code and have not been
 * carefully testing. They are provided "as-is" and come with no warranty
 * of any kind.
 */ 

class Building
{
	private $id, $name, $cost = 0, $xsize = 1, $ysize = 1, $profit = 0, $lapse = 0;

	public function __construct($id, $name)
	{						
		if ($id != null) {
			$this->setId($id);
		}

		$this->setName($name);
	}

	public function getId() { return (int)$this->id; }
	public function setId($id) { $this->id = (int)$id; }

	public function getName() { return $this->name; }
	public function setName($name) { $this->name = $name; }

	public function getCost() { return (int)$this->cost; }
	public function setCost($cost) { $this->cost = (int)$cost; }

	public function getXSize() { return (int)$this->xsize; }
	public function setXSize($xsize) { $this->xsize = $xsize; }

	public function getYSize() { return (int)$this->ysize; }
	public function setYSize($ysize) { $this->ysize = (int)$ysize; }

	public function getProfit() { return (int)$this->profit; }
	public function setProfit($profit) { $this->profit = (int)$profit; }

	public function getLapse() { return (int)$this->lapse; }
	public function setLapse($lapse) { $this->lapse = (int)$lapse; }
}
?>