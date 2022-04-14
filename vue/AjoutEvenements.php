<div class="container">
            <div class ="col-sm-9 bg-success">

            
               
                     <form action='AjoutPro.php' Method = "POST">

                           <br><label for="ref">Evenement:</label><br/>
                           <input type="text" id="ref" name="id_evenement">
                        
                           <br><label for="nom">Date debut :</label><br/>
                           <input type="date" id="date_d" name="date_debut">

                           <br><label for="nom">Date fin :</label><br/>
                           <input type="date" id="date_f" name="date_fin">
                      
                           <br><label for='prix'>Organisateur :</label><br/>
                           <input type="text" id="organisateur" name="id_organisateur" ><br>
                     
                           <input type="submit" name="valider" value="Valider vos choix" />
                           <input type="reset" value="Remise a zero" /></br>

                        </form>

                    
            </div>       
</div>