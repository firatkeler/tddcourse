<?php

use forTestingAbstractClassesAndTraits\PersonAbstract;

class Employee extends PersonAbstract {

    public function getSalary()
    {
        return 50 * 100;
    }
}
