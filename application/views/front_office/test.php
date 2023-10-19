<h2 style="text-align: center">Test</h2>
<h5 style="margin-left: 300px">Repondez à ces quelques questions</h5>
<div style="width: 400px; float:left; margin-left: 200px">
    <form action="<?php echo base_url().'ctest/verification'?>" method="post">
        <input type="number" name="numero" placeholder="Entrez votre numero">
        <?php foreach($questions as $q) { ?>
            <div class="col-12">
                <label><?php echo $q->question; ?></label>
                <?php foreach($reponses as $r) { 
                    if($r->idquestion == $q->id){ ?>
                        <p style="margin-left: 100px"><input type="radio" value="<?php echo $r->verification; ?>" name="<?php echo $q->id; ?>"><?php echo $r->reponse; ?></p>
                <?php } } ?>            
            </div>
        <?php } ?>
        <br>
        <div class="form-group">
            <button type="submit">Envoyer les reponses</button>
        </div>
    </form>    
</div>
