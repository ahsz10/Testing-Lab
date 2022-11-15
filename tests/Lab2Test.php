<?php

use PHPUnit\Framework\TestCase;

require "./src/Lab2.php";

class Lab2Test extends TestCase{
    
    public function testClassConstructor(){
        $user = new User('samy@gmail.com', 'samy');

        $this->assertSame('samy', $user->name);
        $this->assertSame('samy@gmail.com', $user->email);
    }

}

?>