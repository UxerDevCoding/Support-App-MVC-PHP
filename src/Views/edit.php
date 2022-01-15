<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web\css\style.css">
    <title>Base MVC with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    
    


    <div class="container mt-5">   
        <h2>Support App</h2>
        <h5 class= "badge rounded-pill bg-success">Edit the request</h5> 
        <form action=<?php echo "?action=update&&id_request={$data[0]->getId()}" ?> method="post">
            <div class="col-4">
                <label class="form-label mt-3" for="topic">Topic</label>
                <select class="form-select" name="topic" id="topic" required>
                    <option value=<?=$data[0]->getTopic()?> hidden selected><?=$data[0]->getTopic()?></option>
                    <option value="Print error">Print error</option>
                    <option value="Windows Blue Screen">Windows Blue Screen</option>
                </select></br>
            </div>
            <div class="col-4">
                <label class="form-label" for="user_name">User name</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value=<?=$data[0]->getUserName()?>required>
            </div></br>
            <div class="col-4">
                <label for="inputDescription" class="form-label">Description</label>
                <textarea class="form-control" type="text" name="description" id="description" required><<?=$data[0]->getDescription()?></textarea></br>
                <div class="d-grid gap-2 col-3 ">
                <input type="submit" class="btn btn-success" value="Update">
                </div>
            </div>        
        </form> 
    </div>   

</body>
</html>
