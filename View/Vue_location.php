
<main class="containe-fluid">
    <div class="container">
        <div class="inscription">
            <h1>Reservation</h1>
            <div class="row">
                <div class="col">
                        <table>
                            <tr style="text-align: center;">
                                <td>
                                    <img src="Assets/Images/<?php echo $location["image"]; ?>" style="width:100px; height:100px;" class="img-fluid"  alt="image">
                                </td>
                                <td>
                                    <?php echo $location["marque"]; ?> <br>
                                    <?php echo $location["description"]; ?> <br>
                                    <?php echo $location["prix_journalier"]; ?> 
                                </td>
                            </tr>
                        </table>
                    </div>    
            </div> 
            <form action="" method="post">
                
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                            Date de debut de location
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="date" name="date" type="date" />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                            Date de fin de location
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="date" name="date" type="date" />
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            <div class="input-group">
                                <input class="form-control" id="date" name="date" type="hidden" />
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Enregistrer" name="Reserver" class="btn btn-primary">
            </form>
        </div>
    </div>
</main>