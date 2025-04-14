document.getElementById('inventoryForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const itemName = document.getElementById('itemName').value;
    const itemQuantity = document.getElementById('itemQuantity').value;

    fetch('inventory.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: itemName, quantity: itemQuantity }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            loadInventory();
            document.getElementById('inventoryForm').reset();
        } else {
            alert('Error adding item');
        }
    });
});

function loadInventory() {
    fetch('inventory.php')
        .then(response => response.json())
        .then(data => {
            const inventoryList = document.getElementById('inventoryList');
            inventoryList.innerHTML = '';
            data.forEach(item => {
                inventoryList.innerHTML += `<div>${item.name} - ${item.quantity}</div>`;
            });
        });
}

// Load inventory on page load
loadInventory();