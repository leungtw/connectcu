<?php

require_once('functions.php');
//require_once('delete.php');
//require_once('questionHandler.php');
require_once('PHPUnit/Framework/TestCase.php');

class TestFunctions extends PHPUnit_Framework_TestCase
{
  function test1()
  {
    $found = sqlConnect();
    $this->assertTrue($found != null);
  }

  function test_delete()
  {
    $this->assertTrue(delete());
  }

  function test_add()
  {
    $this->assertTrue(add('Math', 'Whats 2 + 2?', 'Bob'));
  }
}

?>
