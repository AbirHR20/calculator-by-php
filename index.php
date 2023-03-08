<?php
require_once("./header.php");
?>
<form action="./calculate.php" method="post" class="container mt-5 mb-5">
    <div class="mb-3 text-center">
        <label for="num1" class="form-label">Number1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1" value="<?php if (isset($_SESSION["num1"])) {
            print_r($_SESSION["num1"]);
        }
        ?>">
    </div>
    <div class="mb-3 text-center">
        <label for="num2" class="form-label">Number2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="num2" value="<?php if (isset($_SESSION["num1"])) {
            print_r($_SESSION["num1"]);
        }
        ?>">
    </div>
    <button type="submit" class="btn btn-primary text-center w-100">Calculate</button>
    <?php
    if (isset($_SESSION["result"])) {?>
        <div class="alert alert-success mt-5 text-center" role="alert"><?php
        print_r($_SESSION["result"]);
        ?></div>
    <?php
    }
    // unset($_SESSION["result"]);
    ?>
    
</form>
<?php
require_once("./footer.php");
?>