<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seller Interface</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 90%;
                margin: auto;
                overflow: hidden;
            }
            header {
                background: #35424a;
                color: #ffffff;
                padding-top: 30px;
                min-height: 70px;
                border-bottom: #e8491d 3px solid;
            }
            header a {
                color: #ffffff;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 16px;
            }
            header ul {
                padding: 0;
                list-style: none;
            }
            header ul li {
                float: right;
                display: inline;
                padding: 0 20px 0 20px;
            }
            footer {
                padding: 20px;
                background: #35424a;
                color: white;
                text-align: center;
                margin-top: 30px;
            }
            .dashboard, .menu-management, .orders, .profile {
                background: white;
                padding: 20px;
                margin-top: 20px;
                border-radius: 5px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table th, table td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .btn {
                background-color: #35424a;
                color: white;
                padding: 10px 15px;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>

        <header>
            <div class="container">
                <h1>Seller Dashboard</h1>
                <ul>
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="#orders">Orders</a></li>
                    <li><a href="#menu">Menu Management</a></li>
                    <li><a href="#dashboard">Dashboard</a></li>
                </ul>
            </div>
        </header>

        <div class="container">
            <!-- Dashboard Section -->
            <section id="dashboard" class="dashboard">
                <h2>Dashboard</h2>
                <p>Overview of your sales, recent orders, and notifications.</p>
                <div class="overview">
                    <p><strong>Total Sales:</strong> $500</p>
                    <p><strong>Pending Orders:</strong> 5</p>
                    <p><strong>Completed Orders:</strong> 25</p>
                </div>
            </section>

            <!-- Menu Management Section -->
            <section id="menu" class="menu-management">
                <h2>Menu Management</h2>
                <a href="#addItem" class="btn">Add New Item</a>
                <table>
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Burger</td>
                            <td>$5.00</td>
                            <td>Fast Food</td>
                            <td>
                                <a href="#editItem" class="btn">Edit</a>
                                <a href="#deleteItem" class="btn">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Pizza</td>
                            <td>$10.00</td>
                            <td>Fast Food</td>
                            <td>
                                <a href="#editItem" class="btn">Edit</a>
                                <a href="#deleteItem" class="btn">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Orders Section -->
            <section id="orders" class="orders">
                <h2>Order Management</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>John Doe</td>
                            <td>Burger, Fries</td>
                            <td>Pending</td>
                            <td>
                                <a href="#markComplete" class="btn">Complete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#1002</td>
                            <td>Jane Smith</td>
                            <td>Pizza</td>
                            <td>Preparing</td>
                            <td>
                                <a href="#markComplete" class="btn">Complete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Profile Management Section -->
            <section id="profile" class="profile">
                <h2>Profile Management</h2>
                <form>
                    <label for="storeName">Store Name</label>
                    <input type="text" id="storeName" name="storeName" value="My Store">

                    <label for="storeHours">Store Hours</label>
                    <input type="text" id="storeHours" name="storeHours" value="9 AM - 9 PM">

                    <label for="contact">Contact Info</label>
                    <input type="text" id="contact" name="contact" value="123-456-7890">

                    <button type="submit" class="btn">Update Profile</button>
                </form>
            </section>
        </div>

        <footer>
            <p>Food Service &copy; 2024</p>
        </footer>

    </body>
    </html>

</x-app-layout>
