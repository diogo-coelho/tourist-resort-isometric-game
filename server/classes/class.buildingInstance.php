<?php
/**
 * BuildingInstance class
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

class BuildingInstance
{
	private $id, $userId, $buildingId, $xpos, $ypos;

	public function __construct($id, $userId, $buildingId, $xpos, $ypos)
	{						
		if ($id != null) {
			$this->setId($id);
		}

		$this->setUserId($userId);
		$this->setBuildingId($buildingId);
		$this->setXPos($xpos);
		$this->setYPos($ypos);
	}

	public function getId() { return (int)$this->id; }
	public function setId($id) { $this->id = (int)$id; }

	public function getUserId() { return (int)$this->userId; }
	public function setUserId($userId) { $this->userId = (int)$userId; }

	public function getBuildingId() { return (int)$this->buildingId; }
	public function setBuildingId($buildingId) { $this->buildingId = (int)$buildingId; }

	public function getXPos() { return (int)$this->xpos; }
	public function setXPos($xpos) { $this->xpos = (int)$xpos; }

	public function getYPos() { return (int)$this->ypos; }
	public function setYPos($ypos) { $this->ypos = (int)$ypos; }
}
?>