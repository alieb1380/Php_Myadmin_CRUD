<?php
if(isset($_SESSION['message'])) :

?>

<div class="alert alert-warning alert-desmissible fade show "role="alert">
        <strong>Hey!</strong> <?php $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?>