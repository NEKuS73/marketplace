<?php
$products = [
    ['id' => 1, 'name' => 'Product A', 'price' => 100],
    ['id' => 2, 'name' => 'Product B', 'price' => 250],
    ['id' => 3, 'name' => 'Product C', 'price' => 350],
];

$users = [];
$orders = [];

function listProducts(array $products): void
{
    echo "Available products:\n";
    foreach ($products as $product) {
        echo "#{$product['id']} {$product['name']} - {$product['price']} USD\n";
    }
}

function registerUser(array &$users, string $name, string $email): array
{
    $user = [
        'id' => count($users) + 1,
        'name' => $name,
        'email' => $email,
    ];
    $users[] = $user;
    return $user;
}

function createOrder(array &$orders, int $userId, array $productIds, array $products): array
{
    $items = array_filter($products, fn($product) => in_array($product['id'], $productIds, true));
    $total = array_reduce($items, fn($sum, $item) => $sum + $item['price'], 0);
    $order = [
        'id' => count($orders) + 1,
        'user_id' => $userId,
        'items' => array_values($items),
        'total' => $total,
        'created_at' => date('Y-m-d H:i:s'),
    ];
    $orders[] = $order;
    return $order;
}

// Example usage
$user = registerUser($users, 'Ivan', 'ivan@example.com');
listProducts($products);
$order = createOrder($orders, $user['id'], [1, 3], $products);

echo "\nNew order created for {$user['name']}:\n";
echo "Order ID: {$order['id']}\n";
echo "Total: {$order['total']} USD\n";
foreach ($order['items'] as $item) {
    echo "- {$item['name']} ({$item['price']} USD)\n";
}
