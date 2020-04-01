<div class="container">
	
<div style="background-image: url('/assets/img/coronavirus-bleu.jpg');  background-size: cover;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <p style="color: white;font-size: 3em;" class="display-4"> <?= $p."   " ?> <span class="bg-<?= $class_style ?>">  <?= $infos ?></span>
    </p>

    <p style="color: white;"> Details historique </p>
    
  </div>
</div>


<table class="table">
  <thead class="table-<?= $class_style ?>">
    <tr >

      <th scope="col"> Date</th>
      <th scope="col"> Cas </th>
    </tr>
  </thead>
  <tbody style="background-color: white;">
  
      <?php

        for ($i=0; $i < count($datas) ; $i++) { 
         
         $date = date_parse($datas[$i]["Date"]);

    ?>

  <tr>
      <td>
          <?= $date['day']."/".$date['month']."/".$date['year'] ?>
      </td>
      <td>
        <span class="badge badge-<?= $class_style ?> badge-pill"> <?= $datas[$i]['Cases']  ?> </span>
          
      </td>
  </tr>

   <?php }  ?>
  </tbody>
</table>


</div>