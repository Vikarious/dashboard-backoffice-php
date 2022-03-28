<?php include("view/layout/nav.inc.php") ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include("./view/layout/sidenavAccordion.inc.php") ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Comments
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>display name</th>
                                <th>post title</th>
                                <th>comment_content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $onedata) { ?>
                                <tr>
                                    <td><?= $onedata["display_name"] ?></td>
                                    <td><?= $onedata["post_title"] ?></td>
                                    <td><?= $onedata["comment_content"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php include("./view/layout/footer.inc.php") ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>