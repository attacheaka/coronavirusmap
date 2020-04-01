<div class="container">
	
<div style="background-image: url('/assets/img/coronavirus-bleu.jpg');  background-size: cover;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 style="color: white" class="display-4">Liste des pays 
    </h1>
    <p style="color: white"> <?= "Mise à jour dépuis le ".$date['day']."/".$date['month']."/".$date['year'] ?> </p>
  </div>
</div>


<table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col"> Nom du pays </th>
      <th scope="col"> Total cas confirme(s) </th>
      <th scope="col"> Total guéri(s) </th>
      <th scope="col"> Total mort(s) </th>
    </tr>
  </thead>
  <tbody style="background-color: white;">
    <?php

        for ($i=0; $i < count($datas['Countries']) ; $i++) { 
        
    ?>
    <tr>
      <td> <?= "<a href=pays.php?p=".$datas['Countries'][$i]['Slug'].">".$datas['Countries'][$i]['Country']."</a>"  ?> </td>
      <td> <span class="badge badge-info badge-pill"> <?= $datas['Countries'][$i]['TotalConfirmed']  ?>  </span> 
      </td>
      <td>
		<span class="badge badge-success badge-pill"> <?= $datas['Countries'][$i]['TotalRecovered']   ?></span>
      </td>
      <td>
      	<span class="badge badge-danger badge-pill"> <?= $datas['Countries'][$i]['TotalDeaths'] ?> </span>
      </td>
    </tr>

    <?php }  ?>

  </tbody>
</table>


</div>