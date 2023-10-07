<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>
    <body>
        <div id="wrapper">
         <h1>Cars List</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Car Title</span></th>
               <th><span>Price</span></th>
               <th><span>Model</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>



           <?Php
try{

  $pdo =new pdo ("mysql:host=localhost;dbname=carsweb","root","");
  $data=$pdo->query ("select * from cars");
  $cars=$data->fetchAll (pdo::FETCH_ASSOC);

}
catch (PDOException $e)
{
  echo $e;
}
foreach ($cars as $car)
{
  ?>


         


 
             <tr>
               <td class="lalign"><?php echo $car['title']   ?></td>
               <td> <?php echo $car['price']   ?> </td>
               <td><?php echo $car['model']   ?></td>
               <td><a href="delete.php?id=<?php echo $car['id']; ?>"> Delete</a></td>
               <td>22.2</td>
             </tr>
 <?Php 
}

?>
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
