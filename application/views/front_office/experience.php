<h2 style="text-align: center">Recrutement</h2>
<h5 style="margin-left: 300px">Entrez vos informations professionnels</h5>
<div style="width: 300px; float:left; margin-left: 200px">
    <form action="<?php echo base_url().'crecrutement/insertion2'?>" method="post">
        <div class="col-12">
            <div class="form-material floating">
                <input type="number" class="form-control" name="annee" required>
                <label>Annee d'experience</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-material floating">
                <select name="diplome">
                    <option>Diplome</option>
                    <option value=1>Bacc</option>
                    <option value=2>Licence</option>
                    <option value=3>Master</option>
                    <option value=4>Doctorat</option>
                </select>
            </div>
        </div>
        
        <br>
        <div class="form-group">
            <button type="submit">Ok</button>
        </div>
    </form>    
</div>
