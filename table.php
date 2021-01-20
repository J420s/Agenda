<?php include_once "db.php" ?>

<table class="table table-dark text-center" style="border-radius:10px">
    <thead>
        <tr>
            <th scope="col"><a class="btn btn-gold" href="index.php?order=id" role="button">ID</a></th>
            <th scope="col"><a class="btn btn-gold" href="index.php?order=nom" role="button">Nom</a></th>
            <th scope="col"><a class="btn btn-gold" href="index.php?order=cognoms" role="button">Cognoms</a></th>
            
        </tr>
    </thead>
    <tbody>
       <?php getPage()?> 
    </tbody>
</table> 