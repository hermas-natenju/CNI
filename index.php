<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-25
 * Time: 7:21 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>CNI</title>
    <meta charset="utf-8">
</head>
<body>
<section class="container container-fluid">
    <form action="files/addCitizen.php" class="form-horizontal cni">
        <div class="form-group top">
            <label class="container-fluid">nom<small>surname</small></label>
            <input type="text" placeholder="nom" class="field text-field" name="nom" maxlength="40">
        </div>
        <div class="middle">
            <div class="form-control pic">
                <label> <input type="file" class="" id="picture"></label>
            </div>
            <div class="left">
                <div class="form-group">
                    <label class="container-fluid">prenom(s) <small>given name(s)</small></label>
                    <input type="text" placeholder="prenom" class="field text-field" name="prenom" maxlength="40">
                </div>
                <div class="form-group">
                    <label class="container-fluid">né(e)le <small>Born on</small></label>
                    <input type="date" class="field text-field" name="dateNaiss">
                </div>
                <div class="form-group">
                    <label class="container-fluid">À <small>At</small></label>
                        <input type="text" class="field text-field" name="lieuNaiss" maxlength="20">
                </div>
                <div class="form-group">
                    <label class="container-fluid">Père <small>Father</small></label>
                        <input type="text" class="field text-field" placeholder="père" name="nomPere" maxlength="40">
                </div>
                <div class="form-group">
                    <label class="container-fluid" for="mere">Mère <small>Mother</small></label>
                    <input type="text" class="field text-field" placeholder="mère" id="mere" name="nomMere" maxlength="40">
                </div>
                <div class="form-group">
                    <label class="container-fluid" for="profession">Profession <small>occupation</small></label>
                    <input type="text" class="field text-field" placeholder="profession" name="profession" maxlength="20">
                </div>
                <div class="form-group">
                    <label class="container-fluid" for="adresse">Adresse <small>Address</small></label>
                    <input type="text" class="field text-field" name="adresse" id="adresse" placeholder="adresse" maxlength="20">
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="form-group">
                <label class="container-fluid">Taille <small>Height</small></label>
                <input type="number" class="field text-field" name="taille" placeholder="1.4">
            </div>
            <div class="form-group">
                <label class="container-fluid" for="sexe">Sexe <small>Sex</small></label>
                <input type="radio" name="sexe" id="sexe" value="M">M
                <input type="radio" name="sexe" id="sexe" value="F">F
            </div>
            <div class="form-group">
                <label>S.P <small>S.M</small></label>
                <input type="number" class="field text-field" name="sp" placeholder="1234" maxlength="4">
            </div>
            <div class="fingerprint"></div>
        </div>
    </form>
</section>
</body>
<link rel="stylesheet" href="files/css/bootstrap.min.css">
<link rel="stylesheet" href="files/css/mycss.css">
<script src="files/js/bootstrap.min.js"></script>
<script src="files/js/npm.js"></script>
</html>
