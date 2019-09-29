<?php 
    $loggedIn = true;

    //Tenary operator can be nested
    echo ($loggedIn) ? 'logged in' : 'not logged in';

    //depends if logged in
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered; 
?>

<!--Shorthand conditionals -->
<div>
    <?php if (true): ?>
        <h1>true</h1>
    <?php elseif(false): ?>
        <h1>false</h1>
    <?php else: ?>
        <h1>false</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($vals as $val): ?>
        <?php echo($val); ?>
    <?php endforeach; ?>
</div>

<div>
    <?php for($i=0;$i<10;$i++): ?>
        <?php echo($i); ?>
    <?php endfor; ?>
</div>