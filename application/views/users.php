<?php require("header.php");?>


<table id="mytab" class="table">
    <thead style="background-color: #382f2f;color:white;">
    <tr>
        <th>Object</th>
        <th>Type</th>
        <th>Date</th>
        <th>Participants</th>
        <th>CRR</th>
    </tr>
    </thead>
    <tbody style="background-color: #8bc34a;">
    <?php foreach($records as $records ){ ?>
        <tr style="background-color: #f1f1f1;">

            <td> <?php echo $records-> user_id ?> </td>
            <td> <?php echo $records-> name ?> </td>
            <td> <?php echo $records-> lastname ?> </td>
            <td> <?php echo $records-> password ?> </td>
            <td> <?php echo $records-> comment_id ?> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<style>
    #mytab_wrapper{
        width: 1200px;
        margin: 100px;
    }
</style>

<?php require("footer.php");?>
