<form class="form-inline w-75 justify-content-end" action="" method="post">
  <div class="input-group mr-1 w-75">
     <div class="input-group-prepend">
       <span class="input-group-text">Trier</span>
     </div>
     <select class="form-control w-25" name="city">
       <option value="0">Choisir une ville</option>
       <?php
       foreach ($listCity as $key => $value) { ?>
         <option <?php echo (isset($city) && $city == $value["city"])?'selected="selected"':'';  ?>value="<?php echo $value["city"]; ?>"><?php echo $value["city"]; ?></option>
       <?php }
        ?>
     </select>
     <select class="form-control w-25" name="availability">
       <option <?php echo (isset($availability) && $availability == "1")?'selected="selected"':'';  ?>value="1">Disponible</option>
       <option <?php echo (isset($availability) && $availability == "0")?'selected="selected"':'';  ?>value="0">Indisponible</option>
     </select>
     <select class="form-control" name="tri">
       <option <?php echo (isset($tri) && $tri == "name")?'selected="selected"':'';  ?> value="name">Nom</option>
       <option <?php echo (isset($tri) && $tri == "age")?'selected="selected"':'';  ?> value="age">Âge</option>
     </select>
  </div>
  <div class="">
    <input type="submit" class="btn btn-primary" name="" value="OK">
  </div>
</form>
