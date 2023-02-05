
<!DOCTYPE html>
<html>
<head>
    <title>SQL state</title>
    <style type="text/css">
    table {
        border-collapse: collapse;
        Width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th {
        background-color: #d96459;
        color: white;
    }
    </style>
</head>

<body>
<table>
    <th>numerals</th>
    <th>hanzi</th>
    <th>pinyin</th>
    <th>english</th>
</tr>
<?php
$conn = mysqli_connect("103.231.30.155", "devongl_Devon", "(yc{z[~Ps~]Y", "devongl_HSK1_Vocab_List");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

/*
$charset = mysqli_character_set_name($conn);
printf ("Current character set is %s\n",$charset);*/


/* change character set to utf8mb4 */
if (!mysqli_set_charset($conn, "utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
    exit();
} else {
    printf("Current character set: %s\n", mysqli_character_set_name($conn));
}

$sql = "SELECT prime_key, hanzi, pinyin, english from numbers";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["prime_key"] ."</td><td>" . $row["hanzi"] ."</td><td>" . $row["pinyin"] . "</td><td>". $row["english"] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}

$conn-> close();
?>

<table>
    <th>quantifiers</th>
    <th>hanzi</th>
    <th>pinyin</th>
    <th>english</th>
</tr>
<?php
$conn = mysqli_connect("103.231.30.155", "devongl_Devon", "(yc{z[~Ps~]Y", "devongl_HSK1_Vocab_List");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

/*
$charset = mysqli_character_set_name($conn);
printf ("Current character set is %s\n",$charset);*/


/* change character set to utf8mb4 */
if (!mysqli_set_charset($conn, "utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
    exit();
} else {
    printf("Current character set: %s\n", mysqli_character_set_name($conn));
}

$sql = "SELECT prime_key, hanzi, pinyin, english from quantifiers";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["prime_key"] ."</td><td>" . $row["hanzi"] ."</td><td>" . $row["pinyin"] . "</td><td>". $row["english"] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}

$conn-> close();
?>

</table>
</body>
</html>