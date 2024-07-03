<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
require_once("{$base_dir}Models{$ds}Cards.php");
$cards = new Cards();
$result_of_cards = $cards->select()->fetchAll();
?>
<section class="p-3">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($result_of_cards as $card) {
            $id = (string)$card['ID'];
            $name = (string)$card['name'];
            $price = (string)$card['price'];
            $date = (string)$card['date_of_create'];
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $price . "</td>";
            echo "<td>" . $date . "</td>";
            echo "</div>";
        }
        ?>
        </tbody>

</section>