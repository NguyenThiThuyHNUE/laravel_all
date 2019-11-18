<?php


class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO customers (name, email,address) VALUE (:name, :email, :address)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":name", $customer->name);
        $statement->bindParam(":email", $customer->email);
        $statement->bindParam(":address", $customer->address);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customers";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $cutomers = [];
        foreach ($result as $item) {
            $cutomer = new Customer($item["name"], $item['email'], $item['address']);
            $cutomer->id = $item['id'];
            array_push($cutomers, $cutomer);

        }
        return $cutomers;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $item = $statement->fetch();
        $customer = new Customer($item["name"], $item['email'], $item['address']);
        $customer->id = $item['id'];
        return $customer;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = '$id'";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();

    }

    public function update($id, $customer){
        $sql = "UPDATE customer SET name = ?, email = ?, address = ? WHERE id = $id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }


}