<?php

class Stage extends BaseEntity implements WorkflowStage {
    private string $name;
    private string $description;
    private ?User $assignedTo = null;
    private string $status;

    public function __construct(string $name, string $description, string $status) {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }

    public function complete(): void {
        $this->status = 'Completed';
    }

    public function updateStatus(string $status): void {
        $this->status = $status;
    }
}
