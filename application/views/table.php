<?php require("header.php");?>

<table id="mytab" class="table display">
    <thead style="background-color: black;
    color: aliceblue;">
        <tr>
            <th>Object</th>
            <th>Type</th>
            <th>Date</th>
            <th>Participants</th>
            <th>CRR</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($records as $records ){ ?>
        <tr>

            <td> <?php echo $records-> Object ?> </td>
            <td> <?php echo $records-> Type ?> </td>
            <td> <?php echo $records-> Date ?> </td>
            <td> <?php echo $records-> Participants ?> </td>
            <td> <?php echo $records-> CRR ?> </td>
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
