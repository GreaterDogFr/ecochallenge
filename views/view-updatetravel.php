<?php
// Header
include '../views/templates/header.php';
?>
    <div class="container">
        <h2 class="pagetitle">Modification du trajet</h2>
    </div>
    <form action="../controllers/controller-updatetravel.php?tvl=<?=$travelid?>" method="POST" class="form">
        <div class="formlines">
            <label class="formlabels" for="traveldate">Date du voyage</label>
            <input type="date" name="traveldate" class="traveldate" max="<?=$todaysdate?>" value="<?= isset($travelinfos['TVL_DATE']) ? $travelinfos['TVL_DATE'] : ''; ?>">
            <p class="errorText">
                <?= isset($errors['traveldate']) ? $errors['traveldate'] : "";?>
            </p>
        </div>

        <div class="formlines">
            <label class="formlabels" for="traveltime">Durée du voyage (heures:minutes)</label>
            <input type="time" name="traveltime" class="traveltime" value="<?= isset($travelinfos['TVL_TIME']) ? $travelinfos['TVL_TIME'] : ''; ?>">
            <p class="errorText">
                <?= isset($errors['traveltime']) ? $errors['traveltime'] : ""; ?>
            </p>
        </div>
        
        <div class="formlines">
            <label class="formlabels" for="traveldistance">Distance parcourue(en km)</label>
            <input type="number" name="traveldistance"  class="traveldistance"  min="0" max="99999" value="<?= isset($travelinfos['TVL_DISTANCE']) ? $travelinfos['TVL_DISTANCE'] : ''; ?>"">
            <p class="errorText">
                <?= isset($errors['traveldistance']) ? $errors['traveldistance'] : ""; ?>
            </p>
        </div>
        
        <div class="formlines">
            <label class="formlabels" for="traveltype">Moyen de transport</label>
            <select name="traveltype" class="selectinput">
                <option value="0">Choississez votre moyen de transport</option>
                <?php
                foreach($transports as $transport){
                    ?>
                    <option <?php if($travelinfos['TRA_ID'] == $transport['TRA_ID']) echo "selected" ?> class="traveltime" value=<?=$transport['TRA_ID']?>><?=$transport['TRA_NAME']?></option>
                <?php }?>
            </select>
            <p class="errorText">
                <?= isset($errors['traveltype']) ? $errors['traveltype'] : ""; ?>
            </p>
        </div>

        <div class="formbuttons">
            <button class="submitbutton" type="submit">Valider</button>
            <button class="submitbutton" type="submit" name="back">Revenir à l'accueil</button>
        </div>
    </form>
<?php
// Footer
include '../views/templates/footer.php';
?>