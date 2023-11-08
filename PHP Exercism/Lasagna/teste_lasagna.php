<?php
$lasagna = new Lasagna();
$this->assertEquals(40, $lasagna->expectedCookTime());
$this->assertEquals(20, $lasagna->remainingCookTime(20));
$this->assertEquals(10, $lasagna->remainingCookTime(30));
$this->assertEquals(14, $lasagna->totalPreparationTime(7));
$this->assertEquals(21, $lasagna->totalElapsedTime(4, 13));
$this->assertEquals("Ding!", $lasagna->alarm());