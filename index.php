<?php
    require_once 'libs/functions.php';
    $pets = get_pets();
?>
<?php
require_once 'layout/header.php';
?>
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>

        <p>This is a template for a simple marketing or informational website. It includes a large callout called the
            hero unit and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>

        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach($pets as $cutePet) { ?>
            <div class="col-lg-4">
                <h2><?php echo $cutePet['name']; ?></h2>
                <img src="./images/<?php echo $cutePet['image']; ?>" class="img-thumbnail" />

                <blockquote class="pet-details">
                    <span class='label label-info'><?php echo $cutePet['breed']; ?></span>
                    <?php
                        if (!array_key_exists('age', $cutePet) || $cutePet['age'] == '') {
                            echo 'Unknown';
                        } elseif ($cutePet['age'] == 'hidden') {
                            echo '(contact owner for age)';
                        } else {
                            echo $cutePet['age'];
                        }
                    ?>
                    <?php echo $cutePet['weight']; ?> lbs
                </blockquote>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
        <?php } ?>
    </div>
</div>
<?php
require_once 'layout/footer.php';
?>