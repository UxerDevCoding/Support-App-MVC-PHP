<?php include './src/Views/layouts/header.php'; ?>

<body>
    <main>
    <div class="container mt-5">   
        <h2>Support App</h2>
        <div class="d-grid gap-2 d-md-block mt-3">
            <a href="?action=create"><button type="submit" class="btn btn-primary btn-sm" value="Update">Add request</button></a>
        </div>
            <table class="table table-striped table-hover mt-3">
                <thead>
                    <th>Topic</th>
                    <th>Description</th>
                    <th>User</th>
                    <th>Create at</th>
                </thead>
                <tbody>
                    
                <?php 
                foreach ($data as $request) {
                    $html = <<<HTML
                    <tr>
                        <td>{$request->getTopic()}</td>
                        <td>{$request->getDescription()}</td>
                        <td>{$request->getUserName()}</td>
                        <td>{$request->getCreateAt()}</td>
                        <td>
                            <a href="?action=destroy&&id_request={$request->getId()}"><button class="btn btn-danger btn-sm">Delete</button></a>
                        </td>
                        <td>
                            <a href="?action=edit&&id_request={$request->getId()}"><button class="btn btn-success btn-sm">Edit</button></a>
                        </td>
                    </tr>
                    HTML;
                    echo $html;
                }
                ?>  
                </tbody>
            </table>
        </div>
    </main>

<?php include './src/Views/layouts/footer.php'; ?>

