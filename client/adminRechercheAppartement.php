  <div class="padding-md">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default table-responsive">
					<div class="panel-heading">
						Recherche des biens par critère

					</div>
					<div class="padding-md clearfix">

            <div class="table-responsive">

            <div class="form-inline col-md-12" style="background: #fc8675;padding: 9px;color: #FFF;margin-bottom: 10px; font-weight:bold;">
            <table border="0" cellspacing="5" cellpadding="5" class="table">
					<tr>
						<td style="padding-right: 15px;">Entrer l'intervale des Prix: </td>
						<td><input type="text" id="min" name="min" placeholder="Prix min..."  class="form-control input-sm" style="width: 238px;"> Et <input placeholder="Prix max..."  type="text" id="max" name="max"  class="form-control input-sm" style="width: 238px;"></td>
					</tr>

				</table>

                </div>
<table  class="table table-hover table-striped" id="example_search" >
  <col width="2%">
    <col width="40%">
      <col width="20%">
        <col width="10%">
          <col width="10%">
            <col width="10%">
              <col width="8%">
              <thead>
               <tr>
                <th>#</th>
               <th>Titre de bien</th>
               <th>Reference</th>
               <th>Superficie</th>
                <th>Prix</th>
               <th>Region</th>
               <th>ville</th>
               <th>Type de bien</th>
               <th>Statut</th>
               <th>Etat</th>

                </tr>
                <tr  style="background: #2297ba;">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>
                <th class="filterhead"></th>

                 </tr>
              </thead>
              <tfoot>
            <tr>
            	 <th>#</th>
                <th>Titre de bien</th>
                <th>Reference</th>
                <th>Superficie</th>
                <th>Prix</th>
                <th>Region</th>
                <th>ville</th>
                <th>Type de bien</th>
                <th>Statut</th>
                <th>Etat</th>
            </tr>
        </tfoot>
              <tbody>
                <?php
						$appartement = $conn->query("SELECT * FROM ".$_SESSION['pfx']."_annonce WHERE type IN(1,2)  ORDER BY id_categorie");
            $i=0;
						while($res_app = $appartement->fetch_assoc()){
              $i++;
						$id_region = $res_app['region'];
						$id_ville = $res_app['ville'];
						$id_categorie = $res_app['id_categorie'];
						$region = new Region();
						$region->getFromDB($id_region);
						$pays = new Ville();
						$pays->getFromDB($id_ville);
						$categorie = new Categorie();
						$categorie->getFromDB($id_categorie);


		 
			$statut = $res_app['type'];
			if($statut ==  1){$stat = "Location";}
			if($statut ==  2){$stat = "Vente";}
			 $etat = $res_app['etat'];
		  if($etat ==1 && $statut == 2){$et= 'Vendu'; $td='style="background-color:#fc8675; color:#FFF;"';}
		  else if($etat ==0 && $statut == 2) {$et= 'Disponible'; $td='style="background-color:#65cea7; color:#FFF;"';}
		  if($etat ==1 && $statut == 1){$et= 'Louer'; $td='style="background-color:#fc8675; color:#FFF;"';}
		  else if($etat ==0 && $statut == 1) {$et= 'Disponible'; $td='style="background-color:#65cea7; color:#FFF;"';}
						   echo '<tr>
               <td>'.$i.'</td>
						   			<td>'.stripslashes($res_app['titreFr']).'</td>
						   		<td>'.stripslashes($res_app['ref']).'</td>
								<td>'.stripslashes($res_app['superficie']).' m&sup2;</td>
								<td>'.stripslashes($res_app['prix']).' DT</td>
								<td>'.stripslashes($region->getNom()).'</td>
								<td>'.stripslashes($pays->getNom()).'</td>
								<td>'.stripslashes($categorie->getTitreFr()).'</td>
								<td>'.$stat.'</td>
								<td '.$td.'>'.$et.'</td>

						    </tr>
						   ';

						}
					?>
              </tbody>
              </table>
            </div>
            <!--/table-responsive-->
          </div>
          <!--/porlets-content-->
        </div>
        <!--/block-web-->
      </div>
      <!--/col-md-12-->

          </div>
        </div>
