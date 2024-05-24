<?php

class Company {
    private $companyType;
    private $goodsType;

    public function __construct($companyType, $goodsType) {
        $this->companyType = $companyType;
        $this->goodsType = $goodsType;
    }

    public function getCompanyType() {
        return $this->companyType;
    }

    public function getGoodsType() {
        return $this->goodsType;
    }
}

// (Optional) Example usage for demonstration purposes (remove from actual implementation)
// $company = new Company('Manufacturing', 'Electronics');
// echo 'Company Type: ' . $company->getCompanyType() . "\n";
// echo 'Goods/Services Offered: ' . $company->getGoodsType() . "\n";
?>
