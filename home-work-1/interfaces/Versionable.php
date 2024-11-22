<?php

interface Versionable {
    public function getVersionHistory(): array;
}