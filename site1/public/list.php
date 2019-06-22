<?php
$conn = mysqli_connect("localhost", "root", "", "a1") or die("DB CONNECTION ERROR");

$sql = "
SELECT *
FROM article
ORDER BY id DESC
";
$rs = mysqli_query($conn, $sql);

$rows = [];

while ( $row = mysqli_fetch_assoc($rs) ) {
    $rows[] = $row;
}
?>

<div>
    <a href="./add.php">글 작성하기</a>
</div>

<table border="1">
<thead>
<tr>
    <th>번호</th>
    <th>날짜</th>
    <th>제목</th>
    <th>내용</th>
</tr>
</thead>
<tbody>
<?php foreach ( $rows as $row ) { ?>
<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['regDate']?></td>
    <td><?=$row['title']?></td>
    <td><?=$row['body']?></td>
</tr>
<?php } ?>
</tbody>
</table>


<div>
    <a href="./add.php">글 작성하기</a>
</div>

