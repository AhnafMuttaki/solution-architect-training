<?php

abstract class UserRole {
    protected string $name;
    protected array $permissions;

    public function __construct(string $name, array $permissions) {
        $this->name = $name;
        $this->permissions = $permissions;
    }

    public function getName(): string {
        return $this->name;
    }

    public function hasPermission(string $action): bool {
        return in_array($action, $this->permissions);
    }
}
