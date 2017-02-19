@extends('admin.base.base');

@section('title')
	Thêm nhóm sản phẩm
@endsection

@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Titre</label>
                                        <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                                <option value="1">Mademoiselle</option>
                                                <option value="2">Madame</option>
                                                <option value="3">Monsieur</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Nom</label>  
                                        <div class="col-md-4">
                                            <input id="Nom22" name="Nom22" placeholder="Nom" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="Prénom">Prénom</label>  
                                      <div class="col-md-4">
                                      <input id="Prénom" name="Prénom" placeholder="Prénom" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="Ddn">Date de Naissance</label>  
                                      <div class="col-md-4">
                                      <input id="Ddn" name="Ddn" placeholder="Date de Naissance" class="form-control input-md" required="" type="text">
                                      <span class="help-block">format :JJ/MM/YYYY</span>  
                                      </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="EtatC">Etat Civil</label>
                                      <div class="col-md-4">
                                        <select id="EtatC" name="EtatC" class="form-control">
                                          <option value="1">Marié(e)</option>
                                          <option value="2">Divorcé(e)</option>
                                          <option value="3">Séparé(e)</option>
                                          <option value="4">Célibataire</option>
                                          <option value="5">Veuf(ve)</option>
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="rue">Adresse</label>  
                                      <div class="col-md-4">
                                      <input id="rue" name="rue" placeholder="Adresse" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="num">N°</label>  
                                      <div class="col-md-1">
                                      <input id="num" name="num" placeholder="N°" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="CP">Code Postal</label>  
                                      <div class="col-md-2">
                                      <input id="CP" name="CP" placeholder="Code Postal" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="commune">Commune</label>  
                                      <div class="col-md-4">
                                      <input id="commune" name="commune" placeholder="Commune" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="mail">Adresse e-mail</label>  
                                      <div class="col-md-4">
                                      <input id="mail" name="mail" placeholder="Adresse e-mail" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="tel">Téléphone</label>  
                                      <div class="col-md-4">
                                      <input id="tel" name="tel" placeholder="Téléphone" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="typeHypo">Objet du prêt Hypothécaire</label>
                                      <div class="col-md-4">
                                        <select id="typeHypo" name="typeHypo" class="form-control">
                                          <option value="1">Acquisition</option>
                                          <option value="2">Rénovation</option>
                                          <option value="3">Refinancement</option>
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="revMensNet">Revenus mensuels nets</label>  
                                      <div class="col-md-4">
                                      <input id="revMensNet" name="revMensNet" placeholder="Revenus mensuels nets" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="revMensNetP">Revenus mensuels nets partenaire</label>  
                                      <div class="col-md-4">
                                      <input id="revMensNetP" name="revMensNetP" placeholder="Revenus mensuels nets partenaire" class="form-control input-md" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="montant">Montant</label>  
                                      <div class="col-md-4">
                                      <input id="montant" name="montant" placeholder="Montant" class="form-control input-md" required="" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send">Envoyer Demande</label>
                                      <div class="col-md-4">
                                        <button id="send" name="send" class="btn btn-primary">Envoyer</button>
                                      </div>
                                    </div>

                                    </fieldset>
                                    </form>

                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection


