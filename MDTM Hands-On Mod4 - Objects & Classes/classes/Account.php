<!--
Adriane Louis S. Cadawan
CYB201
-->

<?php
class Account {
    public int $number;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $type, float $balance = 0.0) {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
    
    public function getBalance(): bool {
        return $this->balance < 0;
    }
}
?>