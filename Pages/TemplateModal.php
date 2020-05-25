<div id="myModalModify" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="" onsubmit="" class="room-settings" id="roomSettings" method="post">
                    <fieldset>
                        <p>
                            <label for="Name">Numele melodiei</label>
                            <input id="numeleMelodiei" name="numeleMelodiei" placeholder="Introdu noul nume" type="text" >
                        </p>
                        <p>
                            <label for="Artist">Artist</label>
                            <input id="artist" name="artist" placeholder="Introdu noul artist" type="text" >
                        </p>
                        <p>
                            <label for="spec">Gen</label>
                            <input id="gen" name="gen" placeholder="Introdu noul gen" type="text" >
                            <p id="errorGen"></p> 
                        </p>
                        <p>
                            <label for="spec">Album</label>
                            <input id="album" name="album" placeholder="Introdu noul Album" type="text">
                        </p>
                        <p>
                            <label for="idle">Data lansarii</label>
<select id="zi" name="zi">
  <option value=""></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

 <select id="luna" name="luna">
  <option value=""></option>
  <option value="1">Ianuarie</option>
  <option value="2">Februarie</option>
  <option value="3">Martie</option>
  <option value="4">Aprilie</option>
  <option value="5">Mai</option>
  <option value="6">Iunie</option>
  <option value="7">Iulie</option>
  <option value="8">August</option>
  <option value="9">Septembrie</option>
  <option value="10">Octombrie</option>
  <option value="11">Noiembrie</option>
  <option value="12" >Decembrie</option>
</select>

<select id="an" name="an">
  <option value=""></option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
</select>

                        </p>
                        <p>
                            <label for="spec">Link</label>
                            <input id="link" name="link" placeholder="Introdu noul link" type="text">
                        </p>
                    
                        <button class="btn btn-success" id="Salvare" type="submit">Salvare</button>
                    </fieldset>
                </form>
  </div>

</div>
<div id="myModalInsert" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closeInsert">&times;</span>
    <form action="" onsubmit="" class="music-Settings" id="musicSettings" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <p>
                            <label for="Name">Numele melodiei</label>
                            <input id="numeleMelodieiInserare" name="numeleMelodiei" placeholder="Introdu noul nume" type="text" required="required">
                        </p>
                        <p>
                            <label for="Artist">Artist</label>
                            <input id="artistInserare" name="artist" placeholder="Introdu noul artist" type="text">
                        </p>
                        <p>
                            <label for="Geb">Gen</label>
                            <input id="genInserare" name="gen" placeholder="Introdu noul gen" type="text" required="required">
                        </p>
                        <p>
                            <label for="Album">Album</label>
                            <input id="albumInserare" name="album" placeholder="Introdu noul Album" type="text">
                        </p>
                        <p>
                            <label for="idle">Data lansarii</label>
<select id="ziInserare" name="zi" required="required">
  <option value=""></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

 <select id="lunaInserare" name="luna" required="required">
  <option value=""></option>
  <option value="1">Ianuarie</option>
  <option value="2">Februarie</option>
  <option value="3">Martie</option>
  <option value="4">Aprilie</option>
  <option value="5">Mai</option>
  <option value="6">Iunie</option>
  <option value="7">Iulie</option>
  <option value="8">August</option>
  <option value="9">Septembrie</option>
  <option value="10">Octombrie</option>
  <option value="11">Noiembrie</option>
  <option value="12" >Decembrie</option>
</select>

<select id="anInserare" name="an" required="required">
  <option value=""></option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
</select>

                        </p>
                        <p>
                            <label for="Link">Link</label>
                            <input id="linkInserare" name="link"  placeholder="Introdu noul link"   type="text" >
                            <label> Or </label>
                            
                            <input type='file' id='audiofile' name='audiofile'/>
                           

                            <p id="errorLink"></p> 
                        </p>
                    
                        <button class="btn btn-success"  id="Inserare" type="submit">Adaugare</button>
                    </fieldset>
                </form>
               
  </div>
                </div>


                <div id="myModalModifyUser" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="closeUser">&times;</span>
    <form action="" onsubmit="" class="room-settings1" id="roomSettings1" method="post">
                    <fieldset>
                        <p>
                            <label for="Name">Numele nou:</label>
                            <input id="numelenou" name="numelenou" placeholder="Introdu noul nume" type="text" >
                        </p>
                        <p>
                            <label for="Artist">Parola noua:</label>
                            <input id="parolanoua" name="parolanoua" placeholder="Introdu noua parola" type="text" >
                        </p>
                        <p>
                            <label for="spec">Email nou:</label>
                            <input id="emailnou" name="emailnou" placeholder="Introdu noul email" type="text" >
                            <p id="errorGen"></p> 
                        </p>
                        <p>
                        <label for="country" >Choose a Country:</label>
                        <select id="country" name="country"> 
                        <option value=""></option>
                <option value="italia">Italia</option>
                <option value="spania">Spania</option>
                <option value="china">China</option>
                <option value="belgia">Belgia</option>
              </select></p>
              <button class="btn btn-success" id="SalvareUser"  type="submit">Salvare</button>
              </fieldset>
                </form>
  </div>
                </div>


                <div id="myModalModifyAdmin" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="closeAdmin">&times;</span>
    <form action="" onsubmit="" class="room-settingsAdmin" id="roomSettingsAdmin" method="post">
                    <fieldset>
                        <p>
                            <label for="Name">Numele nou:</label>
                            <input id="numelenouAdmin" name="numelenou" placeholder="Introdu noul nume" type="text" >
                        </p>
                        <p>
                            <label for="Artist">Parola noua:</label>
                            <input id="parolanouaAdmin" name="parolanoua" placeholder="Introdu noua parola" type="text" >
                        </p>
                        <p>
                            <label for="spec">Email nou:</label>
                            <input id="emailnouAdmin" name="emailnou" placeholder="Introdu noul email" type="text" >
                            <p id="errorGen"></p> 
                        </p>
                        <p>
                        <label for="country" >Choose a Country:</label>
                        <select id="countryAdmin" name="country"> 
                        <option value=""></option>
                <option value="italia">Italia</option>
                <option value="spania">Spania</option>
                <option value="china">China</option>
                <option value="belgia">Belgia</option>
              </select></p>
              <button class="btn btn-success" id="SalvareAdmin"  type="submit">Salvare</button>
              </fieldset>
                </form>
  </div>
                </div>