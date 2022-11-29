<?php

namespace Model;

class User {

public function __construct(int $age) {
$this->age = $age;
}

public function isAnAdult(): bool{
return $this->age >= 18;
}
}