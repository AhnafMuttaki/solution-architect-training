<?php

interface Licensable {
    public function validateLicense(): bool;
    public function renewLicense(DateTime $newDate): void;
}

