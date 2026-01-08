<?php
declare(strict_types=1);

class UserService
{
    public function getName(int $id): string
    {
        return 'User_' . $id;
    }

    /**
     * Example method that intentionally throws instead of calling
     * an undefined method.
     */
    public function demo(): void
    {
        throw new \LogicException('Not implemented yet.');
    }

    public function incrementNameLength(string $name): int
    {
        return strlen($name) + 1;
    }
}