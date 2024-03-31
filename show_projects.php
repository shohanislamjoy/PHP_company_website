<?php
include('connection.php');

// Query to select all projects
$sql = "SELECT project_name, description, image_url, website_link FROM projects";
$result = $conn->query($sql);

// Output projects
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <div class="col-lg-6 mb-4">
            <div class="card h-100 project_card"> <!-- Add the 'h-100' class to ensure consistent card height -->
                <img class="card-img-top" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['project_name']; ?>" style="width: 100%; height: 300px; object-fit: cover;">
                <div class="card-body ">
                    <h4 class="card-title"><?php echo $row['project_name']; ?></h4>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <div class="text-center">
                        <a href="<?php echo $row['website_link']; ?>" target="_blank" class="button-89">Visit Website</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
