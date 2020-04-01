<div class="container">
	
<div style="background-image: url('/assets/img/coronavirus-bleu.jpg');  background-size: cover;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 style="color: white" class="display-4"> <?= $_GET['p'] ?>
    </h1>
    
  </div>
</div>


<table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col"> Details Historisque </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody style="background-color: white;">
  
  <tr>
      <td> <?= "<a href=historique.php?p=$p&h=confirmed class='btn btn-info'> Historique des cas confirmé(s) </a>"  ?></td>


       <td> <?= "<a href=historique.php?p=$p&h=recovered class='btn btn-success'> Historique des guéri(s) </a>" ?> </td>

        <td> <?= "<a href=historique.php?p=$p&h=deaths class='btn btn-danger'> Historique des confirmés mort(s)  </a>" ?> </td>
  </tr>


  </tbody>
</table>


</div>