<?php

interface WorkflowStage {
    public function complete(): void;
    public function updateStatus(string $status): void;
}