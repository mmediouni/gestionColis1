<html>

<head>
    <title> admin dashobord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <body>
        <div class="sideber">
            <div class="sideber-brand">
                <h2> <span class=""></span> MedYou_Com</h2> </label>
            </div>
            <li>
                <!-- user  image section-->
                <div class="user-section">


                    <div class="user-section-inner">
                        <img src="assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-text-online">

                        <i class='bx bx-menu' id="btn"></i>
                        <class="sidebar-collapse">
                            <!-- side-<dimenu -->
                            <ul class="nav-list" id="side-menu">
                                <li>
                                    <i class='bx bx-search'></i>
                                    <input type="text" placeholder="search" </div>
                    </div>
                    <!--end user image section-->
            </li>





            <div class="sideber-menu">
                <ul>

                    <a href="admin.html"> <i class='bx bxs-home'></i>
                        Dashboard <span class="fa fa-home"></span></a>
                    <br>
                    <br>

                    <a href="ajoutt.php"> <i class='bx bxs-user-plus'></i>
                        Ajout Pickup <span class=" fa fa-tasks"></span></a>
                    <br>
                    <br>

                    <a href="modif.html"> <i class='bx bxs-message-square-edit'></i>
                        modifier <span class="fa fa-th-large"></span> </a>
                    <br>
                    <br>

                    <a href="recherche.html"> <i class='bx bx-search-alt'></i>
                        Recherche <span class="fa fa-line-chart"></span></a>
                    <br>
                    <br>

                    <a href="compte expediteur.html"><i class='bx bx-chat'></i>
                        Compte Expéditeur <span class="fa fa-adress-book"></span></a>
                    <br>
                    <br>

                    <a href="login.html">
                        Deconnexion <span class="fa fa-edit fa-fw"></span></a>

                </ul>

            </div>
        </div>
        <div class="content">
            <header>
                <p> <label for="menu"><span class="fa fa-bars""></span></label></p>
               <p> <span class=" acceuil">Nouveau Pickup</span></p>
                <div id="dropdown" class="user-wrapp">

                </div>
            </header>
            <div id="page-wrapper">

                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">

                        <br>
                        <div style="float:center;height:50px;margin-left:200px;">

                            <table border="0" width="100%" height="100">
                                <form name="f1" action="ajout.php" method="post">
                                    <br> <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <?php $bareCode = Rand(100000000,9999999999);
                                                $br = strval($bareCode);?>
                                                <div
                                                    style="text-align: center;font-size: 24px;font-weight: bold;color: #e40b13;">
                                                    <?=$br;?>
                                                </div>
                                                <br> <br>
                                                <input name="code_barre" type="hidden" placeholder="Code à barre"
                                                    value="<?=$br;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <td>
                                            <font face='Verdana, Arial, Helvetica, sans-serif'><b>Nom</b></font>
                                        </td>
                                        <td>
                                            <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                    class="form-control" required name="nom" size="30"
                                                    style="font-size:16;height:30px ;width:450px;" /></font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font face='Verdana, Arial, Helvetica, sans-serif'><b>Prenom</b></font>
                                        </td>
                                        <td>
                                            <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                    class="form-control" required name="prenom" size="30"
                                                    style="font-size:16;height:30px ;width:450px;" /></font>
                                        </td>
                                    </tr>
                                    <td>
                                        <font face='Verdana, Arial, Helvetica, sans-serif'><b> Gouvernourat: </b>
                                        </font>
                                    </td>
                                    <td>
                                        <select name="gouvernourat">
                                            <option> Gafsa</option>
                                            <option>Tunis</option>
                                            <option>Kasserine</option>
                                            <option>Soussa</option>
                                            <option>Sfax</option>
                                        </select>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b>ville :</b></font>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="ville" size="30"
                                                        style="font-size:16;height:30px;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b>Adresse:</b>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="adresse" size="30"
                                                        style="font-size:16;height:30px;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b>Num telephone:</b>
                                                </font>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="numTelephone" size="30"
                                                        style="font-size:16;height:30px;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b>Prix:</b></font>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="prix" size="30"
                                                        style="font-size:16;height:30px ;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b>Article:</b>
                                                </font>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="article" size="30"
                                                        style="font-size:16;height:30px ;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><b> Nbre Article:</b>
                                                </font>
                                            </td>
                                            <td>
                                                <font face='Verdana, Arial, Helvetica, sans-serif'><input type="text"
                                                        class="form-control" required name="nbreArticle" size="30"
                                                        style="font-size:16;height:30px ;width:450px;" /></font>
                                            </td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                    <td></td>
                                    <td></td>
                                    </tr>
                            </table><br>
                            <center>
                                <input type='submit' value='Ajouter' class="btn btn-default"
                                    style='font-size:16;height:35px;'>
                                <input type='button' value='Imprimer' class="btn btn-default"
                                    style='font-size:16;height:35px;'>
                            </center>

                        </div>


                    </div>
                    <!--End Page Header -->
                </div>


            </div>
            <!-- end page-wrapper -->

        </div>

    </body>

</html>