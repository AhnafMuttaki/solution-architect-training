<?php

class User extends BaseEntity {
    private string $name;
    private string $email;
    private UserRole $role;
    private array $assignedAssets = [];

    public function __construct(string $name, string $email, UserRole $role) {
        parent::__construct();
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function assignAsset(Asset $asset): void {
        $this->assignedAssets[] = $asset;
    }

    public function hasAccessTo(Asset $asset): bool {
        return in_array($asset, $this->assignedAssets);
    }
}
