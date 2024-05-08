<?php

require_once __DIR__ . '/../Model/Purchases.php';

class PurchaseController {
    private $purchaseModel;

    public function __construct($pdo) {
        $this->purchaseModel = new Purchases($pdo);
    }

    public function getAllPurchases() {
        return $this->purchaseModel->getAllPurchases();
    }

    public function getPurchaseById($purchaseId) {
        return $this->purchaseModel->getPurchaseById($purchaseId);
    }

    public function addPurchase($purchaseData) {
        return $this->purchaseModel->addPurchase($purchaseData);
    }

    public function updatePurchase($purchaseId, $purchaseData) {
        return $this->purchaseModel->updatePurchase($purchaseId, $purchaseData);
    }

    public function deletePurchase($purchaseId) {
        return $this->purchaseModel->deletePurchase($purchaseId);
    }
}
