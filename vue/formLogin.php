<!-- container -->
<div class="container">

    

    <div class="row">
        
        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
           
         
            
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Authentification</h3>
                        <!--<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.html">Login</a>-->

                        <form action='index.php?ctl=connect&action=validConnect' method= 'POST'>

                           <!-- <div class="top-margin">
                                <label>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="top-margin">
                                <label>Last Name</label>
                                <input type="text" class="form-control">
                            </div> -->

                            <div class="top-margin">
                                <label>Email Address <span class="text-danger">*</span></label>
                                <input type="text" name='login' class="form-control">
                            </div>

                            <div class="row top-margin">
                                <div class="col-sm-6">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="text" name='mdp' class="form-control">
                                </div>

                               <!-- <div class="col-sm-6">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div> -->

                            <hr>

                            <!--<div class="row">
                                <div class="col-lg-8">
                                    <label class="checkbox">
                                        <input type="checkbox"> 
                                        I've read the <a href="page_terms.html">Terms and Conditions</a>
                                    </label>                        
                                </div>-->
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            
        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->