<!-- including the header and footer files -->
<?php
include('header.php');
include('dbcon.php');
?>
<div class="box1">
    <h2>All students</h2>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENT</button>

</div>

<table class="table table-hover table-boardered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>

        </tr>

    </thead>

    <tbody>
        <?php
        // instruction for retrieving data from database
        $query = "select * from students";
        // execute the query
        $result = mysqli_query($conn, $query);
        // displaying data rom the database
        // checking if the connection has been made
        if (!$result) {
            die("Connection failed");
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>

        <?php
            }
        }

        ?>

    </tbody>

</table>

<!-- the modal body -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal">
                <form action="">

                </form>


            </div>
            <div class="modal=footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>