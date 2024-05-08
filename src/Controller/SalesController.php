<?php
require_once __DIR__ . '/../Model/Sales.php';

class SalesController {
    private $salesModel;

    public function __construct($pdo) {
        $this->salesModel = new Sales($pdo);
    }

    public function getAllSales() {
        return $this->salesModel->getAllSales();
    }

    public function getSalesById($orderId) {
        return $this->salesModel->getSalesById($orderId);
    }

    public function addSales($salesData) {
        return $this->salesModel->addSales($salesData);
    }

    public function updateSales($orderId, $salesData) {
        return $this->salesModel->updateSales($orderId, $salesData);
    }

    public function deleteSales($orderId) {
        return $this->salesModel->deleteSales($orderId);
    }
}