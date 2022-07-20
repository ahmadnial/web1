<?php
require_once 'conn.php';

$sql = "SELECT a.fs_kd_dokter,a.FS_JAM_MULAI,a.FS_JAM_SELESAI,b.fs_nm_peg from TA_JADWAL_DOKTER a left join TD_PEG b on a.fs_kd_dokter=b.fs_kd_peg";
$query = sqlsrv_query($conn, $sql);
while ($result = sqlsrv_fetch_array($query)) {

    $item[] = array(
        'nama_dokter'   => $result["fs_nm_peg"],
        'jam_mulai'     => $result["FS_JAM_MULAI"],
        'jam_selesai'   => $result["FS_JAM_SELESAI"]
    );
}

$response = array(
    // 'status'    => 'OKEBOS',
    'data'      => $item
);

echo json_encode($response);
