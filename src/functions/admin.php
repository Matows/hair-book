<?php
function getRDV() {
    global $conn;
    $sql = 'SELECT `prestation`, `date`, `duration`, `nom`, `personnel` FROM rdv JOIN client ON rdv.client=client.id WHERE TIMESTAMPDIFF(MINUTE, NOW(), `date`) > -120';
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
