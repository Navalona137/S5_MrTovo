7<h2 style="text-align: center">Recrutement</h2>
<h5 style="margin-left: 300px">Entrez vos informations personnels</h5>
<div>
    <form action="<?php echo base_url().'crecrutement/insertion'?>" method="post">
        <div style="width: 300px; float:left; margin-left: 200px">
            <div class="col-12">
                <div class="form-material floating">
                    <input type="text" class="form-control" name="nom" required>
                    <label>Nom</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-material floating">
                    <input type="text" class="form-control" name="prenom" required>
                    <label>Prenom</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-material floating">
                    <input type="date" class="form-control" name="dtn" required>
                </div>
                <label>Date de naissance</label>
            </div>
            <div class="col-12">
                <div class="form-material floating">
                    <input type="radio" value=1 name="sexe" id="homme" checked="checked">
                    <span style="padding-left: 5px;font-weight: normal;"> Masculin </span> 
                    <input type="radio" value=2 name="sexe" id="femme" style="margin-left: 60px;">
                    <span style="padding-left: 5px;font-weight: normal;"> Feminin </span>
                </div>
            </div>    
        </div>
        <div style="width: 300px; float:right; margin-right: 200px">
            <div class="col-12">
                <div class="form-material floating">
                    <input type="text" class="form-control" name="adresse" required>
                    <label>Adresse</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-material floating">
                    <select name="situation">
                        <option>Situation matrimoniale</option>
                        <option value=1>Marié(e)</option>
                        <option value=2>Celibataire</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-material floating">
                    <select name="nationalite">
                        <option>Nationalité</option>
                        <?php foreach($nationalite as $n) { ?>
                            <option value=<?php echo $n->id; ?>> <?php echo $n->nom; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <br>
            <div class="form-group" style="float:right;">
                <button type="submit">Suivant</button>            
            </div>    
        </div>
    </form>    
</div>
