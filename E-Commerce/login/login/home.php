<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <!-- For Admin -->
            <div class="card" style="width: 18rem;">
                <img src="img/admin-default.png" class="card-img-top" alt="admin image">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <?= $_SESSION['name'] ?>
                    </h5>
                    <a href="logout.php" class="btn btn-dark">Logout</a>
                </div>
            </div>
            <div class="p-3">
                <!-- Display employee details for admin -->
                <?php
                if ($_SESSION['role'] == 'admin') {
                    include 'php/members.php';
                    if (mysqli_num_rows($res) > 0) {
                ?>

                    <h1 class="display-4 fs-1">Members</h1>
                    <table class="table" style="width: 32rem;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">User name</th>
                                <th scope="col">Role</th>
                                <?php if ($_SESSION['role'] == 'admin') { ?>
                                <th scope="col">Password</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($rows = mysqli_fetch_assoc($res)) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $rows['name'] ?></td>
                                    <td><?= $rows['username'] ?></td>
                                    <td><?= $rows['role'] ?></td>
                                    <?php if ($_SESSION['role'] == 'admin') { ?>
                                    <td><?= $rows['password'] ?></td>
                                    <?php } ?>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                <?php
                    }
                }
                ?>
            </div>
			<div id="message-container"></div>
            <!-- Add Announcement Form for Admin -->
            <div class="p-3">
                <h2>Make an Announcement</h2>
				<form action="submit_announcement.php" method="post">
    <!-- Announcement field with the specified ID -->
    <textarea id="announcement" name="announcement" placeholder="Enter your announcement..."></textarea>

    <!-- Submit Announcement button with Font Awesome icon -->
    <button type="submit" class="btn btn-primary submit-button">
        <i class="fas fa-paper-plane"></i> Submit Announcement
    </button>
</form>

<style>
	/* Style for the button */
.submit-button {
    background-color: #007bff; /* Blue color for the button background */
    color: #fff; /* White text color */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for the Font Awesome icon */
.fas.fa-paper-plane {
    margin-right: 5px; /* Add space between the icon and text */
}

/* Style for the announcement field */
textarea#announcement {
    width: 100%; /* Make the textarea take up the full width of its container */
    height: 150px; /* Set the desired height for the textarea */
    padding: 10px; /* Add some padding for better readability */
    font-size: 16px; /* Adjust the font size */
    border: 1px solid #ccc; /* Add a border */
    border-radius: 5px; /* Add rounded corners */
    resize: vertical; /* Allow vertical resizing */
}

	</style>
               
            </div>
        <?php } else { ?>
            <!-- For Employees -->
            <div class="card" style="width: 18rem;">
                <img src="img/user-default.png" class="card-img-top" alt="employee image">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <?= $_SESSION['name'] ?>
                    </h5>
                    <a href="logout.php" class="btn btn-dark">Logout</a>
                </div>
            </div>
            <div class="p-3">
                <!-- Display announcements for employees -->
                <h2>Announcements</h2>
                <?php
                $sql = "SELECT a.announcement_text, u.name AS admin_name FROM announcements a
                        JOIN users u ON a.admin_id = u.id
                        ORDER BY a.created_at DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div><strong>Announcement by " . $row['admin_name'] . ":</strong></div>";
                        echo "<p>" . $row['announcement_text'] . "</p>";
                    }
                } else {
                    echo "<p>No announcements available.</p>";
                }
                ?>
            </div>
        <?php } ?>
    </div>
	<script>
	document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const announcementTextArea = document.querySelector("textarea");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        const messageContainer = document.getElementById("message-container");

        fetch("submit_announcement.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                messageContainer.innerHTML = `<div class="alert alert-success">${data.success}</div>`;
                // Clear the announcement text area
                announcementTextArea.value = "";
            } else if (data.error) {
                messageContainer.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
            }
        })
        .catch(error => console.error(error));
    });
});

</script>
</body>

</html>
<?php } else {
    header("Location: index.php");
}
?>
