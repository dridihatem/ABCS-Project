<?php
   class Pagination{
		public static function affiche($chemin,$nomget,$total,$courante=1,$affichage=2){
			$html = '';
			if($total<=1)
				return $html;
			$precedent = $courante-1;
			$suivant = $courante+1;
			$textePrecedent = 'Precedent';
			$texteSuivant = 'Suivant';
			$html .= '<div class="pagination">';
			if ($courante == 2) 	$html.= Pagination::lien($chemin,$textePrecedent);
       		elseif($courante > 2) 	$html.= Pagination::lien($chemin,$textePrecedent,$nomget,$precedent);
        	else 					$html.= '<span class="desactive">'.$textePrecedent.'</span>';
			
			if($total < 7 + $affichage*2){

				$html.= ($courante == 1) ? '<span class="courante">1&nbsp;</span>' : Pagination::lien($chemin,'1',$nomget,1);

	            for ($i = 2; $i <= $total; $i++){
	                if ($i == $courante) 	$html.= '<span class="courante">'.$i.'</span>';
	                else 	$html.= Pagination::lien($chemin,$i,$nomget,$i);
	            }
			} elseif($total > 5 + ($affichage * 2)){
				if($courante < 1+($affichage * 2)){
				$html.= ($courante == 1) ? '<span class="courante">1&nbsp;</span>' : Pagination::lien($chemin,'1',$nomget,1);

		           for($i = 2; $i < 4 + ($affichage * 2); $i++){
		                if ($i == $courante) 	$html.= '<span class="courante">'.$i.'</span>';
		                else 					$html.= Pagination::lien($chemin,$i,$nomget,$i);
					}
                	$html.= " ... ";

	                $html.= Pagination::lien($chemin,$total-1,$nomget,$total-1);
	                $html.= Pagination::lien($chemin,$total,$nomget,$total);
				}elseif($total - ($affichage * 2) > $courante && $courante > ($affichage * 2)){
	                $html.= Pagination::lien($chemin,'1',$nomget,1);
	                $html.= Pagination::lien($chemin,'2',$nomget,2);
	                $html.= " ... ";
	
	                for ($i= $courante - $affichage; $i<= $courante + $affichage; $i++){
	                    if ($i== $courante)
	                        $html.= '<span class="courante">'.$i.'</span>';
	                    else
	                        $html.= Pagination::lien($chemin,$i,$nomget,$i);
	                }
	
	                $html.= " ... ";

                	$html.= Pagination::lien($chemin,$total-1,$nomget,$total-1);
                	$html.= Pagination::lien($chemin,$total,$nomget,$total);
            	}
				 else{
	                $html.= Pagination::lien($chemin,'1',$nomget,1);
	                $html.= Pagination::lien($chemin,'2',$nomget,2);
	                $html.= " ... ";
	
	                for ($i = $total - (2 + ($affichage * 2)); $i <= $total; $i++){
	                    if ($i == $courante)
	                        $html.= '<span class="courante">'.$i.'</span>';
	                    else
	                        $html.= Pagination::lien($chemin,$i,$nomget,$i);
	                }
 	           }
			}
            
			if ($courante < $total)
            	$html.= Pagination::lien($chemin,$texteSuivant,$nomget,$suivant);
        	else
			    $html.= '<span class="desactive">'.$texteSuivant.'</span>';
				$html .= '</div>';
			echo $html;
   		}
		
		public static function lien($chemin,$texte,$parametre='',$valeur=''){
			$lien = '&nbsp;<a href="'.$chemin;
			if(!empty($parametre))	$lien .= '&'.$parametre.'='.$valeur;
			$lien .= '" title="'.$texte.'">'.$texte.'</a>&nbsp;';
			return $lien;
		}
		
   }
?>
