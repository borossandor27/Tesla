                <h1>Főoldal</h1>
                <img src="images/teslam3.jpg" title="teslam3.jpg" alt="teslam3.jpg" />

                <p>A Tesla (korábban Tesla Motors) elektromos meghajtású autók gyártására alapított amerikai vállalat, amely idővel más megújuló energiára épülő területre, így például a villamosenergia-tároló egységek, vagy napelemek kutatásába, gyártásába is belépett. Központja a Szilícium-völgyben, Palo Altóban található. </p>
                
                <form method="POST">
                    <label>Egy tank üzemanyaggal megtehető km: </label>
                    <input type="number" name="km" min="1"/> 
                    <button type="submit" name="adat" value="true">Számolj!</button>
                    <?php
                    if(filter_input(INPUT_POST, 'adat', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
                        $km = intval(filter_input(INPUT_POST, 'km', FILTER_SANITIZE_NUMBER_INT),0);
                        $tm = 485;
                        var_dump($km);
                        if($km > $tm){
                            echo '<p style="color: green;">'.($km-$tm).' km-el tud többet megtenni, mint a Tesla Model 3.</p>';
                        } elseif ($km < $tm) {
                            echo '<p style="color: red;">'.($tm-$km).' km-el tud kevesebbet megtenni, mint a Tesla Model 3.</p>';
                        }
                    }
                    ?>                     
                </form>
            
