<?php

namespace Tests\App;

use PHPUnit\Framework\TestCase;

class AgeTest extends TestCase {

    public function testCalculateAge(){
        
        $today = new \DateTime();
        $dob = new \DateTime();
        $dob->setDate(1992,14,9);

        $age = new \App\Age($dob,$today);


        $this->assertEquals($age->calculate(),27);
    }

}