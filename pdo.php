<?php
$con= new PDO("mysql:host=localhost;dbname=pdo","root","");
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");
$sql_in =  "insert  into  product (title, image, summary, content) values (?,?,?,?)";
$query1 = $con->prepare($sql_in);
$query1->bindValue(1,"Title3");
$query1->bindValue(2,"ti.hpg");
$query1->bindValue(3,"thisis a summary");
$query1->bindValue(4,"this is a new content for this data");
$query1->execute();


$query = $con->prepare('select * from product');
$query->execute();
$res = $query->fetchAll();
foreach ($res as $t){
    echo "<h2 style='color: red; margin:1px;'>". $t['title']."</h2>"."</br>";
    echo "<h3 style='color: green; margin:1px;'>". $t['image']."</h3>"."</br>";
    echo "<h3 style='color: blue; margin:1px;'>". $t['summary']."</h3>"."</br>";
    echo "<h3 style='color: darkgoldenrod; margin:1px;'>". $t['content']."</h3>"."</br>";
    echo "<hr>";

}