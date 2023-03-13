// Step 1: Connect to the database
$conn = mysqli_connect("localhost", "root", "", "zenflow");

// Step 2: Retrieve the data
$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql);

// Step 3: Display the data
echo "<table>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Email</th><th>Date Joined</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["fname"]."</td>";
    echo "<td>".$row["lname"]."</td>";
    echo "<td>".$row["phone"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["joined"]."</td>";
    echo "</tr>";
}
echo "</table>";
