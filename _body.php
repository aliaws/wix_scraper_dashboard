<div class="container">
    <h2 class='mt-5 mb-3'>
        Wix Scraper Details
    </h2>
    <div class="row mb-5 card-wrapper flex-wrap">
        <h4 class="mt-4">
            Requests
        </h4>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">All</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('all')['count']; ?></p>
            </div>
        </div>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">Today's</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('today')['count']; ?></p>
            </div>
        </div>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">Processed</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('processed')['count']; ?></p>
            </div>
        </div>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">Today's Processed</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('processed',"today")['count']; ?></p>
            </div>
        </div>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">Inprocess</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('processing')['count']; ?></p>
            </div>
        </div>
        <div class="col-2 mt-3">
            <div class="p-3 card shadow flex-row justify-content-between">
                <h6 class="m-0">Today's Inprocess</h6>
                <p class="lh-sm m-0 fw-bold"><?php echo count_result('processing',"today")['count']; ?></p>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Url</th>
                <th>Additional Information</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                ?><tr>
                    <td>
                        <?php echo $row['id'] ?>
                    </td>
                    <td>
                        <p class='text-break text-truncate user-select-all' style = 'width: 200px'>
                            <?php echo $row['url'] ?>
                        </p>
                    </td>
                    <td>
                        <p class='text-break  user-select-all' style = 'width: 200px'>
                            <?php echo $row['additional_info'] ?>
                        </p>
                    </td>
                    <td>
                        <?php echo $row['phone'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['status'] ?>
                    </td>
                    <td>
                        <?php echo $row['created_at'] ?>
                    </td>
                    <td>
                        <?php echo $row['updated_at'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>