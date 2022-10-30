<?php
require_once("./connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `authors` ")->num_rows;
$search_where = "";
if (!empty($search)) {
    $search_where = "where";
    $search_where .= "todoname LIKE '%{$search['value']}%'";
    $search_where .= "OR description LIKE '%{$search['value']}%'";
    $search_where .= "OR status LIKE '%{$search['value']}%'";
}
$columns_arr = array(
    "id",
    "todoname",
    "description",
    "status"
);

$query = $conn->query("SELECT * FROM `authors`");
$recordsFilterCount = $conn->query("SELECT * FROM `authors`")->num_rows;

$recordsTotal = $totalCount;
$recordsFiltered = $recordsFilterCount;
$data = array();
$i = 1 + $start;
while ($row = $query->fetch_assoc()) {
    $row['no'] = $i++;
    $data[] = $row;
}
echo json_encode(
    array(
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $data
    )
);
