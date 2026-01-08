<?php

class UserService
{
    public function getName(int $id): string
    {
        return "User_" . $id;
    }
		public function brokenDemo()
    {
        return $this->notExistingMethod();   // ❌ undefined method
    }
		
    public function broken()
    {
        return $this->notExistingMethod();   // ❌ undefined method
    }

    public function brokenTwo()
    {
        return $name + 1;   // ❌ undefined variable
    }
}