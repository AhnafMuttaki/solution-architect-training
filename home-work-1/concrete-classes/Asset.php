<?php

class Asset extends BaseEntity implements Versionable {
    private string $title;
    private User $owner;
    private string $type;
    private array $metadata;
    private array $dependencies = [];
    private array $versionHistory = [];

    public function __construct(string $title, User $owner, string $type, array $metadata) {
        parent::__construct();
        $this->title = $title;
        $this->owner = $owner;
        $this->type = $type;
        $this->metadata = $metadata;
    }

    public function addDependency(Asset $asset): void {
        $this->dependencies[] = $asset;
    }

    public function removeDependency(Asset $asset): void {
        $this->dependencies = array_filter($this->dependencies, fn($dep) => $dep !== $asset);
    }

    public function getVersionHistory(): array {
        return $this->versionHistory;
    }

    public function addVersion(AssetVersion $version): void {
        $this->versionHistory[] = $version;
    }
}
