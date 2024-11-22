<?php

class Workflow extends BaseEntity {
    private string $name;
    private string $department;
    private array $stages = [];
    private ?Stage $currentStage = null;

    public function __construct(string $name, string $department) {
        parent::__construct();
        $this->name = $name;
        $this->department = $department;
    }

    public function addStage(Stage $stage): void {
        $this->stages[] = $stage;
        if (!$this->currentStage) {
            $this->currentStage = $stage;
        }
    }

    public function advanceToNextStage(): void {
        $currentIndex = array_search($this->currentStage, $this->stages);
        if ($currentIndex !== false && isset($this->stages[$currentIndex + 1])) {
            $this->currentStage = $this->stages[$currentIndex + 1];
        }
    }

    public function getStages(): array {
        return $this->stages;
    }
}
