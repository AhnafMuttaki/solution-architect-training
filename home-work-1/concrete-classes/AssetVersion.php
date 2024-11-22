<?php

class AssetVersion extends BaseEntity {
    private string $versionNumber;
    private string $changes;
    private array $dependencies;

    public function __construct(string $versionNumber, string $changes, array $dependencies) {
        parent::__construct();
        $this->versionNumber = $versionNumber;
        $this->changes = $changes;
        $this->dependencies = $dependencies;
    }

    public function getDependencyTree(): array {
        return $this->dependencies;
    }
}
