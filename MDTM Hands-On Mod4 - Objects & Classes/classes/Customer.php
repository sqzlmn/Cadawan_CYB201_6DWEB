<!--
Adriane Louis S. Cadawan
CYB201
-->
<?php
class Customer {
    public string $FirstName;
    public string $LastName;
    public string $email;
    public string $password;
    public array $portfolio; 

    public function __construct(string $FirstName, string $LastName, string $email, string $password, array $portfolio) {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->email = $email;
        $this->password = $password;
        $this->portfolio = $portfolio; 
    }

    public function getFullName():string {
        return strtoupper($this->FirstName . " " . $this->LastName); 
    }
}
?>