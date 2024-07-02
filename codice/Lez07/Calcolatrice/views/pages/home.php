<?php

    $operatori = ['+', '-', '*', '/'];

    if (isset($_GET)){
        echo "Hai richiesto via get";
        var_dump($_GET);
    }
    echo '<hr>';
    if (isset($_POST)){
        echo "Hai richiesto via POST";
        //var_dump($_POST);

        $num1 = $_POST['numero1'] ?? 0 ; // <=>
        $num2 = $_POST['numero2'] ?? 0 ;
        $ope = $_POST['operatore'] ?? '+' ;

        $addizione = calcola($num1, $num2, $ope);

    }
    echo '<hr>';
    if (isset($_REQUEST)){
        echo "Hai richiesto via REQUEST";
        var_dump($_REQUEST);
    }

    function calcola($a,$b, $operatore = "+"){

        switch ($operatore) {
            case '+':
                return $a + $b;
            
            case '-':
                return $a - $b;
            
            case '*':
                return $a * $b;
            
            case '/':
                return $a / $b;
            
            default:
                return "nobbuono";
        }


       
    }






?>

<div id="home">
    <h2 class="titolo">Fai calcoli avanzati</h2>
    <div>
    
        <form action="" method="post">

            <div>
                <label for="num1">Primo numero</label>
                <input type="number" name="numero1" id="num1">
            </div>

            <div>
                <label for="num2">Secondo numero</label>
                <input type="number" name="numero2" id="num2">
            </div>

            <div>
                
            + <input type="radio" name="operatore" value="+">
            - <input type="radio" name="operatore" value="-">
            * <input type="radio" name="operatore" value="*">
            / <input type="radio" name="operatore" value="/">

            </div>

            <div>
                <label for="calcola">Calcola</label>
                <input type="submit" name="calcola" id="calcola" value="calcola">
            </div>

        </form>
    
    </div>

    <div id="result">
        <p><?= $addizione ?></p>
    </div>

    <div id="pulsantiera">

        <?php for ($i=0; $i < 10 ; $i++) : ?>

            <button class="cifra"><?=$i?></button>

        <?php endfor; ?>

    </div>

    <div id="operatori">
        
        <?php for ($i=0; $i < count($operatori) ; $i++) : ?>

            <button class="operatore"><?=$operatori[$i]?></button>

        <?php endfor; ?>

    </div>




</div>

<script>

        const BOTTONI = document.querySelectorAll('.cifra');
        const OPERATORI = document.querySelectorAll('.operatore');
        const RADIO = document.querySelectorAll('input[name="operatore"]');
        const DISPLAY = document.getElementById('result')
        const NUM1 = document.getElementById('num1')
        const NUM2 = document.getElementById('num2')
        let BUCO = 'num1';
        
        console.log(RADIO);

        BOTTONI.forEach(b => {
            b.addEventListener('click', function(){
                DISPLAY.textContent += this.textContent
                if (BUCO == 'num1')
                    NUM1.value += this.textContent
                if (BUCO == 'num2')
                    NUM2.value += this.textContent
    
                    console.log();
            })
        })

        OPERATORI.forEach(o => {
            o.addEventListener('click', function(){
                BUCO = 'num2';
                const SELECTED = this.textContent
                RADIO.forEach(OP => {
                    if (OP.value == SELECTED){
                        OP.checked = true
                    }
                });
                console.log(this.textContent);
            })
        })

</script>