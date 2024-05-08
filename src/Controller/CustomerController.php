<?php
require_once __DIR__ . '/../Model/Customers.php';

class CustomerController {
    private $customerModel;

    public function __construct($pdo) {
        $this->customerModel = new Customers($pdo);
    }

    public function getAllCustomers() {
        return $this->customerModel->getAllCustomers();
    }

    public function getCustomerById($customerId) {
        return $this->customerModel->getCustomerById($customerId);
    }

    public function addCustomer($customerData) {
        return $this->customerModel->addCustomer($customerData);
    }

    public function updateCustomer($customerId, $customerData) {
        return $this->customerModel->updateCustomer($customerId, $customerData);
    }

    public function deleteCustomer($customerId) {
        return $this->customerModel->deleteCustomer($customerId);
    }
}