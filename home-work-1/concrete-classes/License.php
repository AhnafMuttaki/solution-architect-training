<?php

class License extends BaseEntity implements Licensable {
    private string $type;
    private DateTime $expirationDate;
    private array $platformRestrictions;
    private string $usagePermissions;

    public function __construct(string $type, DateTime $expirationDate, array $platformRestrictions, string $usagePermissions) {
        parent::__construct();
        $this->type = $type;
        $this->expirationDate = $expirationDate;
        $this->platformRestrictions = $platformRestrictions;
        $this->usagePermissions = $usagePermissions;
    }

    public function validateLicense(): bool {
        return $this->expirationDate > new DateTime();
    }

    public function renewLicense(DateTime $newDate): void {
        $this->expirationDate = $newDate;
    }
}
